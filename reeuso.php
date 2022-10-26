<?php

if( mysqli_query($con, $sql)){

    while(mysqli_num_rows($result) > 0){
        $limpar="DELETE FROM itens_".$_SESSION["nome"]." 
        WHERE codprod > 0;";
        mysqli_query($con,$limpar);
        sleep(5);
    }

?>