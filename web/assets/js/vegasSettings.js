function shuffle(o) {
    for (var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}

backgroundImages = shuffle(backgroundImages);

if ($('body').innerWidth() > 500) {
    $.vegas('slideshow', {
        backgrounds: backgroundImages,
        delay: 7000,
    })('overlay', {
        src: overlay
    });
}