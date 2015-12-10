window.initScripts = (window.initScripts||{});
initScripts['cms-create'] = function(element) {

	var object = {
		type: "cms-create",
		element: element,
		destroy: destroy
	};


    $(".make-switch").bootstrapSwitch();
    var title = $('#title');
    title.keyup(function (e) {
        val = title.val();
        var slug = val.replace(/[^a-zA-Z0-9\s]/g, '')
                 .replace(/^\s+|\s+$/, '')
                 .replace(/\s+/g, '-')
                 .toLowerCase();
        $("#slug").val(slug);
    });


	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};