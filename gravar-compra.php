<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

if(!isset($_SESSION)){
    session_start();
     };
    if(isset($_SESSION['id'])){
        
        include_once"conexao.php";
        //instrução
        $seletor = "select * from itens_".$_SESSION['nome'];
        
        $result = mysqli_query($con, $seletor);
         
        //se o número de linhas encontrado é maior que zero
            
                    //enquanto no while
                    
                    for($index=0;mysqli_num_rows($result) >=$index;$index++)
                    {
                        $compras=mysqli_fetch_array($result);
                        $seletor2= "select * from produto where codprod= ".$compras["codprod"];
            $result2 = mysqli_query($con, $seletor2);
                //pega o valor dos produtos
                $itens_compra = mysqli_fetch_array($result2);
                $valor= $itens_compra["valor"];
                $quantidade=$compras["quantidade"];
//
$valor_a_pagar= (float)$valor*intval($quantidade);

                $numcart=$_POST["numcart"];

                        $sql = "insert into compra values(
                            null, '".$compras["codprod"]."',
                            '".$_SESSION["id"]."','".$numcart."','".$quantidade."','".$valor_a_pagar."')";
                            
                            $resultf=mysqli_query($con, $sql);
                           
                            echo"Dados gravados com sucesso";
                            header("location:recibo.php");
                        
                    
                }
            }

            
                        ?>


        
</body>
</html>