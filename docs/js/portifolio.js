  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {

      location.href="album.html";
    });
  }
