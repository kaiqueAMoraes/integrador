window.onload = function(){

  document.getElementById("button").onclick = function () {



    if(confirm("Deseja adicionar um novo album?") == true){

            // var div = document.createElement('div');
            // div.className = 'album';
            // div.onclick = "location.href='newurl.html';";
            // document.getElementsByClassName('container')[0].appendChild(div);
            // document.getElementsByClassName('container')[0].append(div);
            location.href="../paginas/novoAlbum.html";

    }
};



}
