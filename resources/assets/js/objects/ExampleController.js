window.initScripts = (window.initScripts||{});
initScripts['featured-box'] = function(element) {

	var object = {
		type: "featured-box",
		element: element,
		destroy: destroy
	};

	$(object.element).click(function(e){

		var postData =  'object-type='+$(this).attr('data-object-type')+'&object-id='+$(this).attr('data-id');
		var promise = $.post('/toggle-featured-state', postData);

		promise.success(function(data){

			$(object.element).parents('table').find('input.featured').removeClass('featured').attr('checked', false);;
			$(object.element).addClass('featured');

		});

		promise.error(function(data){
		    //Something unexpected happened
		});

	});

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};