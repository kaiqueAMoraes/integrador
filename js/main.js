
$(document).ready( function(){

$("input").hover(function(){
    $('.cursor')
            .eq(1)
            .css({
                height: '80px',
                width: '80px',
                transition: 'height .3s ease-in, width .3s ease-in'
            });
});
$("input").mouseout(function(){
    $('.cursor')
            .eq(1)
            .css({
                height: '40px',
                width: '40px',
                transition: 'height .3s ease-in, width .3s ease-in'
            });
});
$("a").hover(function(){
    $('.cursor')
            .eq(1)
            .css({
                height: '80px',
                width: '80px',
                transition: 'height .3s ease-in, width .3s ease-in'
            });
});
$("a").mouseout(function(){
    $('.cursor')
            .eq(1)
            .css({
                height: '40px',
                width: '40px',
                transition: 'height .3s ease-in, width .3s ease-in'
            });
});

$( window ).scroll(function() {
   
    $(document).mousemove(function (e) {

     
        $('.cursor')
            .eq(0)
            .css({
                /*left: e.clientX,*/
                left : e.pageX,
                top: e.pageY
            });
        setTimeout(function () {
            $('.cursor')
                .eq(1)
                .css({
                    left:e.pageX,
                    top:e.pageY
                });
        },100); // 100 representa o numero em milisegundo de delay de seguida.
    });
    
  });


$(document).mousemove(function (e) {
    $('.cursor')
        .eq(0)
        .css({
            left: e.clientX,
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

$('document').scroll(function(){
    
})

});


window.onload = function () {

    var mostrarObjeto = {
        display: 'none'
    };

    ScrollReveal({
        distance: '50px'
    });
    ScrollReveal().reveal('#voltar', {
        delay: 100
    });
    ScrollReveal().reveal('#logoImagem', mostrarObjeto, {
        delay: 200
    });
    ScrollReveal().reveal('#usuario', {
        delay: 500
    });
    ScrollReveal().reveal('#senha', {
        delay: 650
    });
    ScrollReveal().reveal('#refazerSenha', {
        delay: 1000
    });
    ScrollReveal().reveal('.animacaoFadeUp', {
        delay: 350
    });

   

}