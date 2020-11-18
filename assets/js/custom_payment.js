// set your stripe publishable key
Stripe.setPublishableKey('pk_test_IKgHpz7lpleTM3rcFSnyoxC700UDOoixI7');
$(document).ready(function() {
    $("#custom_form").submit(function(event) {
        $('#make_custom_account').attr("disabled", "disabled");
        // create stripe token to make payment
        //Stripe.createToken({
        //    number: $('#cardNumber').val(),
        //    cvc: $('#cardCVC').val(),
        //    exp_month: $('#cardExpMonth').val(),
        //    exp_year: $('#cardExpYear').val(),
        //    country: 'FR'
        //}, handleStripeResponse);
        
        Stripe.createToken({
            number: $('#card_number').val(),
            cvc: $('#card_cvv').val(),
            exp_month: $('#card_mm').val(),
            exp_year: $('#card_yy').val(),
        }, handleStripeResponse);
        return false;
    });
});
// handle the response from stripe
function handleStripeResponse(status, response) {
	console.log(JSON.stringify(response));
    if (response.error) {
        swal("Erreur de carte", "Les informations de votre carte ne sont pas correctes.", "error");
        $('#make_custom_account').removeAttr("disabled");
        $(".paymentErrors").html(response.error.message);
    } else {
		var payForm = $("#paymentForm");
        //get stripe token id from response
        var stripeToken = response['id'];
        //set the token into the form hidden input to make payment
        payForm.append("<input type='hidden' name='stripeToken' value='" + stripeToken + "' />");
		payForm.get(0).submit();			
    }
}