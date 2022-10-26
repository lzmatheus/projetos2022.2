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
    include_once 'conexao.php';
    include_once 'funcoes.php';

    //vamos chamar atraves do post os dados do form para a varável
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dtnasc = dataBanco($_POST["dtnasc"]); //28-09-2022 ---> mysql 2022-09-28
    $senha = $_POST["senha"];

    $criar_conta = "insert into cliente values(
            null, '".$nome."', '".$email."', '".$cpf."', '".$dtnasc."', '".$senha."','user')";
    $criar_carrinho="create table itens_".$nome."(
                codprod int,
                quantidadep char(6),
                foreign key(codprod) references produto(codprod)
                )";        
            if(mysqli_query($con, $criar_conta) && mysqli_query($con,$criar_carrinho))
            {
                $msg = "Dados cadastrados com sucesso!!";
                
            }else{
                $msg = "Erro ao Gravar!";
            }
            mysqli_close($con);
?>
            <script>
                alert(' <?php echo $msg ?> ');
                location.href="index.php";
            </script>
    
</body>
</html>