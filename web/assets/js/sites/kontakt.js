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
    $('#contactForm').submit(function(e) {
        // Stop the form actually posting
        e.preventDefault();
        var url = $("#contactForm").attr("action");

        // Send the request
        $.post(url,
                $("#contactForm").serialize(),
                function(data) {
                    // Here we handle the response from the script
                    //$('#result').html(data);
                if(data.responseCode==200 ){           
                $('#result').html('Sent');
                $('#result').css("color","green");
                }    

                });
        //Do not allow to click the button again 
        $('#submit-button').hide();
    });
});