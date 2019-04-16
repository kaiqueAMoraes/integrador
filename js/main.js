$(document).mousemove(function (e) {
    $('.cursor')
        .eq(0)
        .css({
            left:e.clientX,
            top: e.clientY
        

        }, 50);
    setTimeout(function () {
        $('.cursor')
            .eq(1)
            .css({
                left: e.clientX,
                top: e.clientY
                
            });
    }, 100);
});
