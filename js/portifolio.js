  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {
      location.href="album.html";
    });
  }


var Label = document.getElementsByTagName('label');

var CheckedBox = document.getElementsByTagName('input');

for (var j = 0; j < CheckedBox.length; j++){
  CheckedBox[j].onclick = function OnCheckedMudaCor(){

  Label.className += " " + "BackgroundColorOfLabel";

      // if(CheckedBox[j].checked){
      //   alert('checked ' + j);
      // }
    }
  }
