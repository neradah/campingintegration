window.initScripts = (window.initScripts||{});
initScripts['event-info'] = function(element) {

	var object = {
		type: "event-info",
		element: element,
		contentList: $('.eventinfo_contentlist'),
		destroy: destroy,
		switchNav: switchNav,
		switchContent: switchContent
	};

	// Info tabs click handler
	$('.eventinfo_navbtn').on('click', function(e){
		e.preventDefault();
		// Tab clicked / Target category / Content to switch to
		var navitem = $(this).parent(),
			category = navitem.attr('data-info'),
			content = $('.eventinfo_contentitem[data-info="' + category + '"]');
		// Exit if already active
		if( navitem.hasClass('active') ){
			return;
		}
		switchNav(navitem);
		switchContent(content);
	});

	function switchNav(navitem){
		// Remove active classes on other nav tabs...
		$('.eventinfo_navitem.active').removeClass('active');
		// ...and add to current tab
		navitem.addClass('active');
	};

	function switchContent(content){
		// Set height static for a moment
		object.contentList.css({
			'height' : object.contentList[0].scrollHeight
		});
		// Fade new content to 0 opacity, get its height and hide again
		content.fadeTo(0,0);
		var h = content[0].scrollHeight;
		content.hide();
		// Animate container's height
		object.contentList.animate({
			'height' : h
		}, 500);
		// Fade out current and remove active class
		$('.eventinfo_contentitem.active').fadeOut(250, function(){
			$(this).removeClass('active');
			content.fadeTo(250,1, function(){
				$(this).addClass('active');
			});
		});
	};

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};