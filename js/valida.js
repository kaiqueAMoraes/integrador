$(document).ready(function () {

    $("#form_cadastra").submit(function () {
        var vazios = $("input").filter(function() {
            return !this.value;
        }).get();

        if (vazios.length) {
            alert("Todos os campos devem ser preenchidos.");
            return false;
        } else {

        }  
    });
});
