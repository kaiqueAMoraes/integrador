  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {
      location.href="album.html";
    });
  }


 CliqueCheckbox = document.getElementsByTagName('input');
//   Checked[0].onclick = function OnCheckedMudaCor(){

var CheckedBox = document.getElementsByTagName('input');

var CheckedBox = document.getElementsByTagName('input');
for (var j = 0; j < CheckedBox.length; j++){
  CheckedBox[j].onclick = function OnCheckedMudaCor(){
      if(CheckedBox[j].checked){
        alert('checked ' + j);
      }
    }
  }
