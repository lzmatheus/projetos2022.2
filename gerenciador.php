<?php

if(!isset($_SESSION)){

session_start();

}

if(!isset($_SESSION['id'])){

die("<h2>Você não pode acessar esta página porquê não está logado </h2> <a href=\"login.php\">Loge-se</a>
<a href=\"cadastrar-usuario.php\">Cadastre-se</a>");

}
if($_SESSION['cargo']=="adm"){
    include_once"painel-do-adm.php";

}

if($_SESSION['cargo']=="user"){
    include_once"painel-do-usuario.php";
   
}

?>
