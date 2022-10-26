<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
       include_once"protect.php";
       include_once"conexao.php";
       $cod=$_POST["codigo"];

       $sql="DELETE FROM itens_".$_SESSION['nome']."
        WHERE codprod = ".$cod;

        if(mysqli_query($con,$sql)){

     echo"Dados Excluidos com sucesso.";
header("location:carrinho.php?");

        }
        else{echo"falha Drastica";}
        ?>
          
        
</body>
</html>