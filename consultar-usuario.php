
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
        <a class="navbar-brand" href="index.php"><img src="./img/logosite.jpge.jpg" width="200" alt=""></a>
        <button class="navbar-toggler" style="background-color: white; color:black;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
          aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

            <li class="nav-item dropdown" style="color: #fff; background-color: black;">
              <a class="nav-link dropdown-toggle" href="#" role="button" style="color: #fff; " data-bs-toggle="dropdown"
                aria-expanded="false">
                Tipos de Eletrônicos
              </a>
              <ul class="dropdown-menu" style="color: #fff; background-color: black;">
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Camisas</a></li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Chuteiras</a></li>
                <li style="color: #fff; background-color: black;" >
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" style="color: #fff; background-color: black;" href="#">Shorts</a></li>
              </ul>
              <!---->
            </li>
            <!---->

            <li class="nav-item">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" style="color: #fff; background-color: black;" aria-label="Search">
                <button class="btn btn-outline-success"  type="submit">Search</button>
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
                <li><a class="dropdown-item" style="color: #fff; " href="#">Login</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#" style="color: #fff; "><span>Carrinho</span> <span class="material-symbols-outlined">
                      shopping_cart
                    </span></a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="painel-do-adm.php" style="color: #fff; ">Ações do Usuario</a></li>
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
	
    



    
    <form action="" method="get" autocomplet="off" class="main-form">
    <h3 style="color:#fff; margin-bottom:20px;font-size:30px;">Registro de Usuário</h3>

    <div class="forme">  
    <input type="text" name="nome" placeholder="Digite o nome do cliente para pesquisar!">
    <input type="submit" value="Pesquisar" style="color:#fff;width:15%;" class="button" >
    </div>
    
    </form>

<?php
    if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
        
        include_once"conexao.php";
        //instrução
        $sql = "select * from cliente where nomecli like '".$nome."%'" ;
        
        $result = mysqli_query($con, $sql);
        //se o número de linhas encontrado é maior que zero
        if(mysqli_num_rows($result) > 0)
        {
           // echo "ok!!!";
           ?>
           <table class= "table table-dark table-hover" >
                
           
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Excluir</th>
                </tr>
        
                <?php
                    //encanto/while
                    while($row = mysqli_fetch_array($result))
                    {
                        ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row["nomecli"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                            <td><?php echo $row["cpf"]; ?></td>
                            <td><?php echo $row["datnasc"]; ?></td>
                            <!-- Editar -->
                            <td> <a href="editar-usuario.php?cod=<?php echo $row["codcliente"]; ?>"><span style="color:purple;" class="material-symbols-outlined">
edit
</span> </a></td>
                            <!-- excluir -->
                            <td> <a href="excluir-usuario.php?cod=<?php echo $row["codcliente"]; ?>"> <span style="color:red;" class="material-symbols-outlined">
delete
</span> </a></td>
                        </tr>
                        </tbody>
                    <?php
                    } //fim do loop 
                    ?>
           </table>

<?php
        }

    }
    else
    {

   echo "Nenhum Cliente encontrado!!";

    };
    
?>

	
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

