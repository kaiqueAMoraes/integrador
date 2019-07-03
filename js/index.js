


  document.getElementsByClassName('contato')[1].style.left = '5rem';
  document.getElementsByClassName('contato')[2].style.left = '10rem';

   DivTrabalhosSelecionados = document.getElementsByTagName('div')[1];
   DivPortifolioCompleto = document.getElementsByTagName('div')[2];


  PreencherDivTrabalhosSelecionados = function(){
    DivPortifolioCompleto.style.width = "100vw";
    DivPortifolioCompleto.style.position = "absolute";
    DivPortifolioCompleto.style.right = "-50vw";
    document.getElementsByTagName('a')[0].style.opacity = "0";
    document.getElementsByTagName('a')[1].style.textAlign = "center";
    document.getElementsByTagName('a')[1].style.width = "100%";
  }

  PreencherDivTrabalhosSelecionadosReverso = function(){
    document.getElementsByTagName('a')[1].style.width = "auto";
    document.getElementsByTagName('a')[0].style.opacity = "1";
    DivPortifolioCompleto.style.width = ("50vw");
    DivTrabalhosSelecionados.style.backgroundPosition = "left bottom";
    document.getElementsByTagName('a')[0].innerHTML = "Trabalhos selecionados";
  };

  PreencherDivPortifolioCompleto = function(){
    DivTrabalhosSelecionados.style.width = "100vw";
    document.getElementsByTagName('a')[1].innerHTML = "Trabalhos selecionados";
    document.getElementsByTagName('a')[1].style.position = "absolute";
    document.getElementsByTagName('a')[0].style.zIndex = "99999";
    document.getElementsByTagName('a')[0].style.width = "100%";
    document.getElementsByTagName('a')[0].style.textAlign = "center";
    document.getElementsByTagName('a')[1].style.opacity = "0";


  }

  PreencherDivPortifolioCompletoReverso = function(){
    document.getElementsByTagName('a')[0].style.width = "auto";
    document.getElementsByTagName('a')[0].style.zIndex = "0";
    DivTrabalhosSelecionados.style.width = "50vw";
    document.getElementsByTagName('a')[1].innerHTML = "Portifolio completo";
document.getElementsByTagName('a')[0].style.opacity = "100";
    document.getElementsByTagName('a')[1].style.position = "relative";
document.getElementsByTagName('a')[1].style.opacity = "100";

  }

  var delay = 1500;

  document.getElementsByTagName('a')[1].onmouseenter = PreencherDivTrabalhosSelecionados;
  document.getElementsByTagName('a')[1].onmouseout = PreencherDivTrabalhosSelecionadosReverso;

  document.getElementsByTagName('a')[0].onmouseenter = PreencherDivPortifolioCompleto;
  document.getElementsByTagName('a')[0].onmouseout = PreencherDivPortifolioCompletoReverso;
