<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./materialize/css/materialize.min.css">
    <link rel="stylesheet" href="./css/home.css">
    <title>Document</title>
</head>
<body>
    
<?php 

if(!isset($_SESSION)){
    session_start();
     };


?>
<p style="color:#fff; margin-left:33%; margin-top:190px; font-size:30px; "><?php echo "Seja bem vindo {$_SESSION['nome']} você é {$_SESSION['cargo']}";
 ?></p>
<a href="carrinho.php" <a href=<form action="carrinho.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Consultar Carrinho</button>
</form></a></a>
<br><br>

<a href="editar-perfil.php"<a href=<form action="editar-perfil.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">editar-perfil</button>
</form></a></a>
<br><br>

<a href="sair.php" <a href=<form action="sair.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Sair</button>
</form></a></a>
</body>
</html>