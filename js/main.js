$(document).mousemove(function (e) {
    $('.cursor')
        .eq(0)
        .css({
            left:e.clientX,
            top: e.clientY
        });
    setTimeout(function () {
        $('.cursor')
            .eq(1)
            .css({
                left: e.clientX,
                top: e.clientY
            });
    }, 100); // 100 representa o numero em milisegundo de delay de seguida.
});

window.onload = function(){
    ScrollReveal({ distance: '50px' });
    ScrollReveal().reveal('#voltar', { delay: 100});
    ScrollReveal().reveal('#logoImagem', { delay: 200});
    ScrollReveal().reveal('#usuario', { delay: 500});
    ScrollReveal().reveal('#senha', { delay: 650});
    ScrollReveal().reveal('#refazerSenha', { delay: 1000});

    

}
