window.initScripts = (window.initScripts||{});
initScripts['homehl'] = function(element) {

	var object = {
		type: "home-highligts",
		element: element,
		destroy: destroy,
		container: $('.homehl'),
		prev: $('.homehl_nav-btn--prev'),
		next: $('.homehl_nav-btn--next'),
		showLeft: showLeft,
		showRight: showRight
	};

	$(object.prev).on('click', function(e){
		e.preventDefault();
		object.showLeft();
	});

	$(object.next).on('click', function(e){
		e.preventDefault();
		object.showRight();
	});

	function showLeft(){
		if( object.container.hasClass('more') ){
			object.container.removeClass('more');
		}
	};

	function showRight(){
		if( !object.container.hasClass('more') ){
			object.container.addClass('more');
		}
	};

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};