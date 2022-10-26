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
       $cod=$_POST["cod"];
       $sql="DELETE FROM cliente
        WHERE codcliente = '".$cod."'";

        mysqli_query($con,$sql);
        if(mysqli_query($con,$sql)){

$msg="Dados Excluidos com sucesso.";

        }
        else{$msg="falha Drastica";}
        ?>
        <script src="materialize/js/materialize.min.js"></script>        
        
        <script>
                alert(' <?php echo $msg ?> ');
                location.href="consultar-usuario.php";
            </script>
</body>
</html>