  var div = document.querySelectorAll(".album");
  for (var i = 0; i < div.length; i++){

    div[i].addEventListener("click", function() {
      location.href="album.html";
    });
  }

function fundolabel(x){

var Label = document.getElementsByTagName('label');

if(Label[x].style.backgroundColor === "rgb(46, 204, 113)"){
    Label[x].style.backgroundColor = "rgb(85, 83, 86)";
}else{
  Label[x].style.backgroundColor = "rgb(46, 204, 113)";
}


}
var CheckedBox = document.getElementsByTagName('input');

for (var k = 1; k < CheckedBox.length; k++){
if(CheckedBox[k].type == "checkbox"){
  v = k -1;
  CheckedBox[k].setAttribute("onclick",'fundolabel('+ v + ')');
}
}


/*
CheckedBox[1].onclick = function OnCheckedMudaCor(){
     fundolabel(1 - 1);
 }


   CheckedBox[2].onclick = function OnCheckedMudaCor(){
        fundolabel(2 - 1);
   }

   CheckedBox[3].onclick = function OnCheckedMudaCor(){
        fundolabel(3 - 1);
   }
*/
