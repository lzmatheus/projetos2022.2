<?php
include_once "conexao.php";

if(!isset($_SESSION)){
    session_start();
     };

if(!isset($_SESSION["id"])){

session_destroy();
header("location:login.php");
die("deu ruim");
}
else{
 $codiprod= $_GET["codi"];
 $quantidade= $_GET["quantidade"];

$carrinho="insert into itens_".$_SESSION["nome"]." values('$codiprod','$quantidade')";

$result2=mysqli_query($con,$carrinho);

header("location:carrinho.php");


}


?>	


