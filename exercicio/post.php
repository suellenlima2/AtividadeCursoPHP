<?php

$nomeCorreto = "Suellen";
$emailCorreto = "suellen123@gmail.com";
$telefoneCorreto = "123456789";

$nomeDigitado = $_POST["nome"];
$emailDigitado = $_POST["email"];
$telefoneDigitado = $_POST["telefone"];

if($nomeDigitado == $nomeCorreto && $emailDigitado == $emailCorreto && $telefoneDigitado == $telefoneCorreto){
    include("paginafinalPost.php");
}else{
    echo "Algum de seus dados está incorreto, reveja-os.";
}

?>