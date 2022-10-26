<?php
 include_once('conexao.php');

 if(isset($_POST["email"]) || isset($_POST["senha"]) ){

      if(strlen($_POST["email"])==0){

echo "Preencha seu Email.";

      }
    if(strlen($_POST["senha"])==0){

      echo "Preencha sua Senha.";

    }
  }

    
      $email=$_POST["email"];
      $senha=$_POST["senha"];

      $sql="select * from cliente where email='$email' and senha='$senha'";

      $result=mysqli_query($con,$sql) or die("falha na execução".mysqli_error);

      $linhas=mysqli_num_rows($result);

      if($linhas==1){

$dados= mysqli_fetch_array($result);
 
if(!isset($_SESSION)){
  session_start();
   };

 $_SESSION["id"]= $dados["codcliente"]; 
 $_SESSION["nome"]= $dados["nomecli"]; 
 $_SESSION["email"]= $dados["email"]; 
 $_SESSION["cpf"]= $dados["cpf"];
 $_SESSION["datanasc"]= $dados["datnasc"]; 
 $_SESSION["senha"]= $dados["senha"];
 $_SESSION["cargo"]= $dados["cargo"]; 
 
 header("location:index.php?");



      }
else{

echo "erro ao logar";

}



  ?>