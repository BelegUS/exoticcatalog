$(window).load(function() {
    var i = 0;
    var images = ['web/images/banner/banner2.jpg', 'web/images/banner/banner1.jpg'];
    var image = $('.port-header');
    //Initial Background image setup
    image.css('background', 'url(web/images/banner/banner2.jpg) no-repeat 100%');
    image.css('background-size', '100%');    
    //Change image at regular intervals
    setInterval(function() {
        image.fadeOut(1000, function() {
            image.css('background', 'url(' + images [i++] + ') no-repeat 100%');
            image.css('background-size', '100%');
            image.fadeIn(1000);
        });
        if (i == images.length)
            i = 0;
    }, 5000);
});