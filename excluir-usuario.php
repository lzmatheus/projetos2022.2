<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="./css/home.css">
        

    </head>
    <body>
       
        <style>

            form{
                margin-top: 40px;
                margin: auto;
                width: 40%;
                height: auto;
                
            }
            
            h3{
                font-size:40px;
                font-family: tahoma;
                color: #FFF;
            }
            p{
                font-size:18px;
                font-family: tahoma; 
                color: #FFF;
            }
            .botao{
            
                width: 100px;
                height: 60px;
                font-family: tahoma;
                font-size:22px;
                color: #FFF;
                background-color: #535353;
                cursor: pointer;
            }
            
                        </style>
        
        <?php 
        
            $cod = $_GET["cod"]; //resgatando o valor que veio pelo link
        
        include_once"conexao.php";
        include_once"funcoes.php";
        
            $sql = "select * from cliente where codcliente = ".$cod;
            
            $result = mysqli_query($con, $sql);
            
            $row = mysqli_fetch_array($result);
                        
            
        ?>
        
        
        <div class="container">
            

            <form action="excluir.php" method="post">
             <div>   
            <h3>Dados da Conta</h3>

            

            <input type="hidden" name="cod" value="<?php echo $cod?>">
            <p>Código do Usuario: <?php echo $cod; ?></p>
            <p>Nome: <?php echo $row["nomecli"]; ?></p>
            <p>Email: <?php echo $row["email"]; ?></p>
            <p>CPF: <?php echo $row["cpf"]; ?></p>
            <p>Data de Nascimento: <?php echo dataTela($row["datnasc"]); ?></p>
            <p>Senha: <?php echo $row["senha"]; ?></p>
            </div>          
                <p>Deseja Excluir os dados de sua conta permanentemente ?</p>
                <input type="submit" value="Excluir" class="botao">
                
            </form>
            
        </div>
        
        

    </body>
</html>