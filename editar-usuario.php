<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
        <link rel="stylesheet" type="text/css" href="css/rodape.css">

 
    </head>
    <body>
        
        
        <?php 
        
            $cod = $_GET["cod"]; //resgatando o valor que veio pelo link
        
        include_once"conexao.php";
        include_once"funcoes.php";
        
            $sql = "select * from cliente where codcliente = ".$cod;
            
            $result = mysqli_query($con, $sql);
            
            $row = mysqli_fetch_array($result);
                        
            
        ?>
        

        <div class="container">
            
            <h3 style="color:#fff; margin-bottom:20px;font-size:30px;">Alteração de Cliente</h3>
            
            <form action="atualizar-usuario.php" class="main-form" method="post">
                
                <input type="hidden" name="cod"  style="display: none;"  value="<?php echo $cod ?>">
                
                <div class="forme">
                <label for="nome">Nome</label>
                    <input value="<?php echo $row["nomecli"]; ?>" type="text" name="nome" id="nome" pattern="[A-z À-ü]{3,50}" required autofocus minlength="3">
                    
                </div>
                
                <div class="forme">
                <label for="cpf">Email</label>
                    <input value="<?php echo $row["email"]; ?>" type="text" name="email" id="email" required>
                   
                </div>    
                
                <div class="forme">
                <label for="cpf">Cpf</label>
                    <input value="<?php echo $row["cpf"]; ?>" type="text" name="cpf" id="cpf" pattern="[0-9]{11}" title="Somente números" required maxlength="11">
                   
                </div>
                 
                <div class="forme">
                <label for="cpf">Data de Nascimento</label>
                    <input value="<?php echo dataTela($row["datnasc"]); ?>" style="width:30%;" type="text" name="dtnasc" id="dtnasc" required maxlength="10">
                 
                </div>
               
                <div class="forme">
                <label for="cpf">Senha:</label>
                    <input value="<?php echo $row["senha"]; ?>" type="text" style="width:30%;" name="senha" id="senha" pattern="[0-9]{11}" title="Somente números" required maxlength="11">
                    
                </div>
                
                
                <input type="submit" value="Atualizar" style="font-size:22px;" class="button">
                
            </form>
            
        </div>
        
        <footer>

<div class="row align-items-center">
    <div class="col">
    <img src="img/fashion.png" height="260" style="margin-left:20%;" >
                
    </div>
    <div class="col">
    <ul class="botoes-rodape">
          <li><a href="#">Contato</a></li>
          <li><a href="#">Suporte</a></li>
          <li><a href="#">Sobre</a></li>
          <li><a href="#">Retorna à loja</a></li>
        </ul>
    </div>
    <div class="col">
    <h1 style="color:#FFF;">Sobre Nós</h1>
    <p style="color:#FFF;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis soluta corrupti deserunt quidem eum odit alias dignissimos voluptatem sequi modi, culpa fugit totam? Non nobis fugiat perspiciatis iste error cupiditate!</p>
                
    </div>
  </div>

        <div class="secoes">
            <section class="informacoes">
                <div class="info1">
                </div>
                <div class="info2">
                
                </div>
                <div class="info3">
                    </div>
            </section>
            <hr class="divisao">
            <section class="creditos">
                <p> todos os direitos reservados.<a href="">©SportMax</a></p>

            </section>
        </div>
    </footer>
	
 <!--Fim Rodapé-->
	    
        
    </body>
</html>