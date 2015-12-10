window.initScripts = (window.initScripts||{});
initScripts['signup-form'] = function(element) {

	var object = {
		type: "signup-form",
		element: element,
		destroy: destroy
	};


	$(object.element).on('submit', function(e){
		e.preventDefault();

		var call_url = $(object.element).attr('data-url');

		var email =  $('#email').val();

		var promise = $.post(call_url, {email:email});

		promise.success(function(data){
			console.log(data);
			var message = '';
			if(data !== 'success'){
				message = 'Please enter a valid email address';
				$(object.element).find('.form-group').addClass('has-error');
				$(object.element).find('.form-group').find('p.error-message').html(message);
			} else {
				message = 'Thank you, we will be in touch';
				$(object.element).find('.form-group').removeClass('has-error');
				$(object.element).find('.form-group').find('p.error-message').html(message);
			}

		});

	});

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};