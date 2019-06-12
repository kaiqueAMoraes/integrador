

  document.getElementsByClassName('contato')[1].style.left = '5vw';
  document.getElementsByClassName('contato')[2].style.left = '10vw';

   trabalhosSelecionados = document.getElementsByTagName('div')[1];
   portifolioCompleto = document.getElementsByTagName('div')[2];

document.getElementsByTagName('a')[1].onmouseenter = function(){
  trabalhosSelecionados.style.background = '#000';
  document.getElementsByTagName('a')[0].innerHTML = "Portifolio Completo";
}
document.getElementsByTagName('a')[1].onmouseout = function(){
  trabalhosSelecionados.style.background = '#f5f5f5';
  document.getElementsByTagName('a')[0].innerHTML = "Trabalhos selecionados";
}

document.getElementsByTagName('a')[0].onmouseenter = function(){
  portifolioCompleto.style.background = '#f5f5f5';
document.getElementsByTagName('a')[1].innerHTML = "Trabalhos Selecionados";
}
document.getElementsByTagName('a')[0].onmouseout = function(){
  portifolioCompleto.style.background = '#000';
  document.getElementsByTagName('a')[1].innerHTML = "portifolio Completo";
}
