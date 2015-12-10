window.initScripts = (window.initScripts||{});
initScripts['shopping-basket'] = function(element) {

	var object = {
		type: "shopping-basket",
		element: element,
		calcTotal: calcTotal,
		destroy: destroy,
		total: 0
	};

	// On basket load
	/*
	$('document').ready(function(){
		calcTotal();
	});
	*/

	///////////////////////////
	// Pricing etc
	///////////////////////////

	// Calculate shopping basket and update total
	function calcTotal(){
		var total = 0;
		// Iterate final (total) column and accumulate total
		$('.baskettbl').find('.total .amt').each(function(){
			var amt = parseFloat( $(this).text() );
			total += amt;
		});
		$('.bookingtbl_total-price').find('.cost').text( total );
	};



	///////////////////////////
	// Billing validation
	///////////////////////////

	$('#form-shoppingbasket').validate({
		rules : {
			// Ensure emails match
			email_confirmation: {
				equalTo: "#email"
			},
			// Ensure first and last names are 2+ in length
			first_name: {
				required: true,
				minlength: 2
			},
			last_name: {
				required: true,
				minlength: 2
			}
		}
	});

	function destroy(){
		//IF THE OBJECT NEEDS TO CLEAN ANYTHING UP WHEN BEING REMOVED FROM THE PAGE DO IT HERE
		//VERY IMPORTANT TO REMOVE setInterval() AND $(window).resize/scroll() HANDLERS HERE
	}

	return object;

};