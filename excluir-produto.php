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
        include_once"protect.php";
        include_once"conexao.php";
        include_once"funcoes.php";

        $cod = $_GET["cod"]; //resgatando o valor que veio pelo link
        
        $sql = "select * from itens_".$_SESSION['nome']." where codprod=".$cod;
            
        $result = mysqli_query($con, $sql);
        
        $row = mysqli_fetch_array($result);

        $select =  "select * from produto where codprod= ".$cod;           
            
        $result2=mysqli_query($con,$select);

        $item=mysqli_fetch_assoc($result2);

            
           
        ?>
        
        
        <div class="container">
            

            <form action="confirma.php" method="post">
             <div>   
            <h3>Produto</h3>

            

            <section class="produto">
			<form action="tela-produto.php" method="get" autocomplet="off" class="main-form">
      <input type="hidden" name="codigo" value="<?php echo $cod; ?>">
       <img src="<?php echo $item["fotoproduto"]; ?>" width="250">
		 <p style="font-size: 1.5em;"><?php echo  ucfirst($item["nomeprod"]); ?></p>
         <p style="font-size: 1.5em;">Deseja remover esses <?php echo $row["quantidade"]; ?> itens do carrinho ?</p>
                <input type="submit" value="Remover" class="botao">
                <a href="carrinho.php" class="botao" style="padding: 1%; text-decoration: none;">Voltar para o Carrino</a>
        </section>          
                
            </form>
            
        </div>
        
        

    </body>
</html>