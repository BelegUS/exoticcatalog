$(document).ready(function() {
    var meny = Meny.create({
        // The element that will be animated in from off screen
        menuElement: document.querySelector('.meny'),
        // The contents that gets pushed aside while Meny is active
        contentsElement: document.querySelector('.contents'),
        // The alignment of the menu (top/right/bottom/left)
        position: 'top',
        // The height of the menu (when using top/bottom position)
        height: 200,
        // The width of the menu (when using left/right position)
        width: 260,
        // The mouse distance from menu position which can trigger menu to open.
        threshold: 40,
        // Width(in px) of the thin line you see on screen when menu is in closed position.
        overlap: 44,
        // The total time taken by menu animation.
        transitionDuration: '0.5s',
        // Transition style for menu animations
        transitionEasing: 'ease',
        // Use mouse movement to automatically open/close
        mouse: false,
        // Use touch swipe events to open/close
        touch: true
    });
    $(".meny-menu").show(); //Show the "Menu" text
    
    if(meny.isOpen() === false) {
        $('.meny-menu').css( 'cursor', 'pointer' );
    }
    
    $( ".meny-menu" ).click(function() {
        if(meny.isOpen() === false) {
            meny.open();
        }
    });
    
    $(".contents").click(function() {
        if(meny.isOpen() === true) {
            meny.close();
        }
    });    
    
    meny.addEventListener('close', function() {
        
        //$("#menu").css('display','none');
        $("#meny-content-wrapper").hide(800);
    });

    meny.addEventListener('open', function() {

        //$("#menu").css('display','block');
        $("#meny-content-wrapper").show(400);
    });
});


