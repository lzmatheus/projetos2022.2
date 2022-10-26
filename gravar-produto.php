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
    include_once"conexao.php";
    $nomefoto=$_FILES["nomefoto"];
    $nomeprod=$_POST["nomeprod"];
    $valor=$_POST["valor"];
    $quantidade=$_POST["quantidade"];
    $codforn=$_POST["codigoforn"];

    if($nomefoto!= null){

if($nomefoto['error'])
die("Falha ao enviar");
$pasta="img/";
$nomedafoto=$nomefoto['name'];
$novoNomeDoArquivo=uniqid();
$extensao=strtolower(pathinfo($nomedafoto,PATHINFO_EXTENSION));

if($extensao!="jpg" && $extensao!="png")
die("Tipo de arquivo não aceito");

$caminho=$pasta.$novoNomeDoArquivo.".".$extensao;

$deu_certo=move_uploaded_file($nomefoto["tmp_name"],$caminho);


    $sql="insert into produto values(
        null,'".$caminho."',
        '".$nomeprod."',
        '".$valor."','".$quantidade."','".$codforn."')";
    

    mysqli_query($con,$sql);

    if(mysqli_query($con,$sql)){

echo "Produto Cadastrado com Sucesso";

    }

    else{
        
        $msg= "[ERR0] ao cadastrar produto";
        
    };
}

    ?>

    <a href="cadastrar-produto.php">Retornar</a>
</body>
</html>