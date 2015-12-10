window.initScripts = (window.initScripts||{});
initScripts['cms-page-edit'] = function(element) {

	var object = {
		type: "cms-page-edit",
		element: element,
		destroy: destroy
	};

	$(".make-switch").bootstrapSwitch();

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};