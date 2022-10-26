<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <title>Document</title>
</head>
<body>


<?php 

if(!isset($_SESSION)){
    session_start();
     };
     ?>

 <p style="color:#fff; margin-left:32%; margin-top:110px; font-size:30px; " ><?php $nomeuser=ucfirst($_SESSION['nome']); echo "Seja bem vindo {$nomeuser} você é {$_SESSION['cargo']}";?></p>


<a href="consultar-usuario.php"<a href=<form action="./consultar-usuario.php">
<button style=" font-size:1em; margin-top:20px; margin-left:40%; width:200px; padding: 1em; float: center;">Consultar Usuários</button>
</form></a></a>
<br><br>

<a href="editar-perfil.php"<a href=<form action="editar-perfil.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Editar-perfil</button>
</form></a></a>
<br><br>

<a href="cadastrar-produto.php" <a href=<form action="cadastrar-produto.php" >
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Cadastrar Produto</button>
</form></a></a>
<br><br>

<a href="cadastrar-usuario.php" <a href=<form action="cadastrar-usuario.php" >
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Cadastrar Usuário</button>
</form></a></a>
<br><br>

<a href="carrinho.php" <a href=<form action="carrinho.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Consultar Carrinho</button>
</form></a></a>
<br><br>

<a href="sair.php" <a href=<form action="sair.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Sair</button>
</form></a></a>
<br><br>
</body>
</html>