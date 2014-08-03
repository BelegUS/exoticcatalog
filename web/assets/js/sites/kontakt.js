$(function() { //when the DOM is ready

    $('#reasonOfContact').change(function() { //when clicking the link
        if ($('#reasonOfContact option:selected').val() == 'part')
        {
            $('#brand ').show();  //toggles visibility
            $('#model ').show();  //toggles visibility
            $('#vin ').show();  //toggles visibility
            $('#catalogueNumber ').show();  //toggles visibility
        }
        else
        {
            $('#brand ').hide();
            $('#model ').hide();  //toggles visibility
            $('#vin ').hide();  //toggles visibility
            $('#catalogueNumber ').hide();  //toggles visibility            
        }
    });

});

$(function() {
    $('#form').submit(function(e) {

        // Stop the form actually posting
        e.preventDefault();

        // Send the request
        $.post(pathSend, {
            name: $('#name').val(),
            mail: $('#mail').val(),
            phone: $('#phone').val(),
            reasonOfContact: $('#reasonOfContact').val(),
            catalogueNumber: $('#catalogueNumber').val(),
            brand: $('#brand').val(),
            model: $('#model').val(),
            vin: $('#vin').val(),
            textarea: $('#textarea').val(),
            submit: 1
        }, function(d) {
            // Here we handle the response from the script
            $('#result').html(d);

        });
        //Do not allow to click the button again 
        $('#submit-button').hide();
    });
});