
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="./style/stiles.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

   
    <link rel="stylesheet" href="css/estrutura.css">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/cadastrar.css">
    <link rel="stylesheet" type="text/css" href="css/rodape.css">
 
 
  <title>Loja</title>
  <script>
                function confirmaExclusao(cod,nome){
                    if(confirm('deseja realmente excluir o(a) cliente'+nome+'?'))
                    { 
                        location.href="excluir-cliente.php?cod="+cod;
                    }
                }
            </script>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg " style="background-color: black; color:#FFF;">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="./img/fashion.png" width="110" alt=""></a>
        <button class="navbar-toggler" style="background-color: white; color:black;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            <li class="nav-item dropdown" style="color: #fff; background-color: black;">
              <a class="nav-link dropdown-toggle" href="#" role="button" style="color: #fff; " data-bs-toggle="dropdown"
                aria-expanded="false">
                Produtos
              </a>
              <ul class="dropdown-menu" style="color: #fff; background-color: black;">
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="pesquisa-camisa.php">Camisas</a></li>
                <li style="color: #fff; background-color: black;" >
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="pesquisa-chuteira.php">Chuteiras</a></li>
                <li style="color: #fff; background-color: black;" >
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="pesquisa-short.php">Shorts</a></li>
              </ul>
              <!---->
            </li>
            <!---->

            <li class="nav-item">
            <form class="d-flex" method="post" action="pesquisa.php" role="search">
                <input class="form-control me-2" type="search" name="pesquisa" placeholder="O que você procura?" style="color: #fff; background-color: black;" aria-label="Search">
                <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
              </form>
             

              
              <!--fim da barra de pesquisa-->
            </li>
            <!---->
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false" style="color: #fff; background-color: black;">
                Usuário
              </a>
              <ul class="dropdown-menu" style="color: #fff; background-color: black;">
                <li><a class="dropdown-item" style="color: #fff; " href="login.php">Login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="carrinho.php" style="color: #fff; "><span>Carrinho</span> <span class="material-symbols-outlined">
                      shopping_cart
                    </span></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="gerenciador.php" style="color: #fff; ">Ações do Usuario</a></li>
              </ul>
              <!---->
            </li>
            <!---->
          </ul>
          <!--fim dos icons da nav bar-->

        </div>
        <!--final da nave bar-->

      </div>
      <!--final do container-->
    </nav>
  </header>
  <!--fim da cabeçalho-->
	
	
	<section class="container">	

    <?php
    include_once "conexao.php";

    $codigo=$_GET["codigo"];

    $sql="select * from bancoconsulta where codprod =".$codigo;

    $res=mysqli_query($con,$sql);

    $result=mysqli_fetch_array($res);

    ?>

<div id="bloco1">


<div class="imagens">
    <img src="<?php echo $result["fotoproduto"]; ?>"  width="500">

    

    </div>

</div>

<div id="bloco2">

<div class="textopontos">
<form action="autenticacao-login.php" method="get">
<input type="hidden" name="codi" value="<?php echo $codigo; ?>">

    <p> <strong>12 meses de garantia</strong> </p>
    <h2><?php echo ucfirst($result["nomeprod"]); ?></h2><br>
    
      <p class="maior"> <strong>R$ <?php  echo $result["valor"]; ?></strong> </p>
    
     <span> <strong class="text">à vista com 15% de desconto no boleto ou pix</strong> </span> <br>
    <p>Vendido por: <?php  echo $result["nomeforn"]; ?></p>
  <br>
  <p>
    <div class="forme" >
      <p>Quantidade de Produtos</p>
        <input type="number" name="quantidade" id="quantidade" value="1" placeholder="Quantidade">
        
    </div>
    </p>

    <p> ou em 1x com 7% de desconto <br>
    ou em até 3x com 5% de desconto <br>
    ou de 4 a 6x sem juros + Frete Grátis  </p>



    <input class="button" type="submit" style="width:60%;" value= "Adicionar ao Carrinho">
    </form>
</div>
</div>
    


</section> <!--Fim Container-->
	
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

