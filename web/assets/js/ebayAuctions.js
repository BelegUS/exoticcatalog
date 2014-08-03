function calculateImages() {
    var numberOfImages = 0;

    if ($('body').innerWidth() > 1585) {
        numberOfImages = 5;
    }
    else if (($('body').innerWidth() > 1108) && ($('body').innerWidth() <= 1585)) {
        numberOfImages = 4;
    }
    else if (($('body').innerWidth() > 1037) && ($('body').innerWidth() <= 1108)) {
        numberOfImages = 3;
    }
    else if (($('body').innerWidth() > 823) && ($('body').innerWidth() <= 1037)) {
        numberOfImages = 2;
    }
    else if (($('body').innerWidth() <= 823)) {
        numberOfImages = 1;
    }
//console.log($('body').width());

    $.getScript("//www.auctionnudge.com/item_build/js/SellerID/www__dot__exoticcarparts__dot__eu/siteid/77/theme/images_only/MaxEntries/" + numberOfImages + "/show_logo/0");
}
;

$(document).ready(calculateImages);

//$(document).ready(function() {
    
//    $("#myDiv").append(calculateImages);
//});