var imagens = document.getElementsByTagName("img");
var divAlbumBackgroundImage = document.getElementsByTagName("div");

for (var i = 0; i < imagens.length; i++) {
    var imagem = imagens[i];
    imagem.addEventListener("mouseover", retiraGrayscaleOnHover);
    imagem.addEventListener("mouseleave", adicionaGrayscaleOnHover);
}

for (var i = 0; i < divAlbumBackgroundImage.length; i++) {
    var divBackgroundImage = divAlbumBackgroundImage[i];
    divBackgroundImage.addEventListener("mouseover", retiraGrayscaleOnHover);
    divBackgroundImage.addEventListener("mouseleave", adicionaGrayscaleOnHover);
}

function retiraGrayscaleOnHover(event) {
    event.target.style.filter = "grayscale(0%)";
    event.target.style.transition = "all 1s";
}
function adicionaGrayscaleOnHover(event) {
    event.target.style.filter = "grayscale(100%)";
    event.target.style.transition = "all 1s";
}
