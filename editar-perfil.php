<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
    <link rel="stylesheet" type="text/css" href="css/rodape.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">


    <title>Document</title>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:#FFF;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/fashion.png" width="110" alt=""></a>

      </div>
      <!--final do container-->
    </nav>
  </header>
    


    <?php


    include_once "conexao.php";
    include_once "funcoes.php";
    include_once "protect.php";
     //resgatando os valores da sessao


    $sql = "select * from cliente where codcliente = " . $_SESSION['id'];

    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($result);


    ?>



    <div class="container">

        <h3 style="color:#fff; margin-bottom:20px;font-size:30px;">Alteração de Dados do Usuario</h3>

        <form action="atualizar-usuario.php" class="main-form" method="post">

            <input type="hidden" name="cod" style="display: none;" value="<?php echo $cod ?>">

            <div class="forme">
                <label for="nome" style="color:#fff; margin-bottom:20px;font-size:28px;background-color: black ;" >Nome :</label>
                <input value="<?php echo $row["nomecli"]; ?>" type="text" name="nome" id="nome" pattern="[A-z À-ü]{3,50}" required autofocus minlength="3">

            </div>

            <div class="forme">
                <label for="cpf" style="color:#fff; margin-bottom:20px;font-size:28px;background-color: black ;">E-mail :</label>
                <input value="<?php echo $row["email"]; ?>" type="text" name="email" id="email" required>

            </div>

            <div class="forme">
                <label for="cpf" style="color:#fff; margin-bottom:20px;font-size:28px;background-color: black ;">CPF :</label>
                <input value="<?php echo $row["cpf"]; ?>" type="text" name="cpf" id="cpf" pattern="[0-9]{11}" title="Somente números" required maxlength="11">

            </div>

            <div class="forme">
                <label for="dtnasc" style="color:#fff; margin-bottom:20px;font-size:28px;background-color: black ;">Data de Nascimento :</label>
                <input value="<?php echo dataTela($row["datnasc"]); ?>" style="width:30%;" type="text" name="dtnasc" id="dtnasc" required maxlength="10">

            </div>

            <div class="forme">
                <label for="cpf" style="color:#fff; margin-bottom:20px;font-size:28px;background-color: black ;">Senha :</label>
                <input value="<?php echo $row["senha"]; ?>" type="text" style="width:30%;" name="senha" id="senha" pattern="[0-9]{11}" title="Somente números" required maxlength="11">

            </div>


            <input type="submit" value="Atualizar" style="font-size:22px;" class="button">

        </form>

    </div>

    

</body>

</html>