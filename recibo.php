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


  
    <h2 style="color:#fff; margin-left:33%;  float: center; margin-top:190px; font-size:30px;">
   
         Compra Realizada com Sucesso
   
    </h2>
  

<a href="index.php" <a href=<form action="index.php">
<button style=" font-size:1em; margin-left:40%; width:200px; padding: 1em; float: center;">Voltar para Home</button>
</form></a></a>
<br><br>

<?php
    include_once "protect.php";
    include_once "conexao.php";
    
    //instrução
    $seletor = "select * from itens_".$_SESSION['nome'];
   
    if( $result=mysqli_query($con, $seletor)){

        for($index=0;mysqli_num_rows($result) >=$index;$index++){
            $limpar="DELETE FROM itens_".$_SESSION["nome"]." 
            WHERE codprod > 0;";
            mysqli_query($con,$limpar);
            
            
        }
    }
    
    ?>
 
</body>
</html>