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
  include_once "funcoes.php"; 
  include_once"conexao.php";
$nome=$_POST["nome"];
$email=$_POST["email"];
$cpf=$_POST["cpf"];
$dtnasc=dataBanco($_POST["dtnasc"]);
$senha=$_POST["senha"];
$cod = $_POST["cod"]; //resgatando o valor que veio pelo link


    $sql="update cliente set nomecli='".$nome."',
    email='".$email."',
    cpf='".$cpf."',
    datnasc='".$dtnasc."',
    senha='".$senha."'  
    where codcliente='".$cod."'";

   mysqli_query($con,$sql);
   
   if(mysqli_query($con,$sql))
            {
                echo "Nome alterado com sucesso!!";
            }else{
                echo "Erro ao Gravar!";
            }

           
      ?>
 </body>
 </html>