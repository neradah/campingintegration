window.initScripts = (window.initScripts||{});
initScripts['booking-form'] = function(element) {

	var object = {
		type: "booking-form",
		element: element,
		destroy: destroy,
		tentSize: 0,
		tentCost: 0,
		singleBeds: 0,
		doubleBeds: 0,
		totalProducts: 0,
		allProductsCost: 0,
		updateTotal: updateTotal,
		total: 0
	};

	$('.cost-listen input, .cost-listen select').on('change keyup', function(e){
		object.updateTotal();
	});

	function updateTotal(){
		
		// get the cost of the selected tent
		var plotType = $('#plot_type').val();
		console.log(plotType);
		object.tentCost = 0;
		if (plotType == 1 || plotType == 3){
			object.tentCost += parseInt($("input[name=size]:checked").attr('data-cost'), 10);
		}
		if (plotType == 2 || plotType == 3){
			// We're dealing with pitches, a wee bit more complicated.
			var pitchPrice = parseInt($('#pitch_price').val(), 10);
			var pitchSize = parseInt($('select[name=pitch-size]').val(), 10);
			var personCost = parseInt($('#additional_pitch_person').val(), 10);
			object.tentCost += pitchPrice + (pitchSize * personCost);
		}

		// re-initialise the cost and quantities of all products together, then re-calculate both
		object.allProductsCost = 0;
		object.totalProducts = 0;
		$('.product-wrap').each(function(){
			var selectedValue = parseInt($(this).find('select').val(), 10);
			var productTotal = selectedValue * $(this).find('.hidden-cost').val();
			$(this).find('.product-total').html(productTotal);

			object.totalProducts += selectedValue;
			object.allProductsCost += productTotal;
		});

		object.total = object.tentCost + object.allProductsCost;
		console.log(object.totalProducts);
		$('#total-products span').html(object.totalProducts);
		$('#total-cost').html(object.total);

	};

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};