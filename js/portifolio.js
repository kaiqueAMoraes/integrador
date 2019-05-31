window.onload = function(){
  alert('funciona');

  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {
      console.log("clicked");
      location.href="album.html";
    });
  }
}
