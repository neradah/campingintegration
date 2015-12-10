window.initScripts = (window.initScripts||{});
initScripts['cms-image-section'] = function(element) {

	var object = {
		type: "cms-image-section",
		element: element,
        CSRF_TOKEN: $( "input[name='_token']" ).val(),
		destroy: destroy
	};

	// FILE UPLOAD STUFF FROM HERE

	$(object.element).find('.drop a').click(function(){
	     // Simulate a click on the file input button
	     // to show the file browser dialog
	     $(object.element).find('.upload-btn').click();
	 });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': object.CSRF_TOKEN
        }
    });

	$(object.element).fileupload({

        // This element will accept file drag/drop uploading
        dropZone: $(object.element).find('.drop'),
        url: BASE_PATH+'/file-upload',
        formData: [
          { name: 'authenticity_token', value: object.CSRF_TOKEN }
        ],
        // This function is called when a file is added to the queue;
        // either via the browse button, or via drag/drop:
        add: function (e, data) {

        	console.log(data.files[0]['name']);

            var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

            // Append the file name and file size
            tpl.find('p').text(data.files[0].name)
                         .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

            // Add the HTML to the UL element
            $(object.element).find('ul.file-list li').remove();
            data.context = tpl.appendTo($(object.element).find('ul.file-list'));

            // Initialize the knob plugin
            tpl.find('input').knob();

            // Listen for clicks on the cancel icon
            tpl.find('span').click(function(){

                if(tpl.hasClass('working')){
                    jqXHR.abort();
                }

                tpl.fadeOut(function(){
                    tpl.remove();
                });

            });

            // console.log('€€€€¢¢¢¢¢: ', data.files);

            $(object.element).find('input.image-name').val(data.files[0]['name']);

        	// console.log(data);
        	
            // Automatically upload the file once it is added to the queue
            var jqXHR = data.submit();

            // console.log('-0-0-0: ',jqXHR);
        },

        progress: function(e, data){

            // Calculate the completion percentage of the upload
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Update the hidden input field and trigger a change
            // so that the jQuery knob plugin knows to update the dial
            data.context.find('input').val(progress).change();

            if(progress == 100){
                data.context.removeClass('working');
            }

        },

        done: function (e, data) {
            if(data.textStatus === "success"){
            	var section = $(object.element).parents('form').find('input.section-name').val();
            	var img = $('<img src="'+BASE_PATH+'/assets/uploads/'+data.files[0].name+'" alt="Event Campsites " />');
            	var container = $(object.element).find('.image-container');

            	container.html(img);
            }
        },

        fail:function(e, data){
            // Something has gone wrong!
            data.context.addClass('error');
        }

	});

    // Prevent the default action when a file is dropped on the window
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });

    // Helper function that formats the file sizes
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};