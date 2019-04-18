<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="../js/jquery-3.4.0.min.js"></script>
    <script src="../js/backgroundChiado.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/scrollreveal.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

</head>

<body>
        
    <section  class="conteudoPrincipal">
        <canvas id="noise" class="noise"></canvas>
        <form action="processaLogin.php" method="post">    
                <input type="text" id="usuario" placeholder="usuario">
                <input type="password" id="senha" placeholder="senha">
                <input id="enviaForm" type="submit"  value="enviar">
                <span class="cursor"></span>
                <span class="cursor"></span>
        </form>
        <div id="logoImagem"></div>
        <a href="#" id="refazerSenha" >Esqueci a senha!</a>
        <a id="voltar" href="../index.html">voltar</a>
    </section>

    
</body>

</html>