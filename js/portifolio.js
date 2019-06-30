window.onload = function(){

  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {

      location.href="album.html";
    });
  }

  function myFunction() {

    var checkBox = document.getElementsByClassName('teste');

    if (checkBox.checked == true){
      alert('true');
    }
  }
}
