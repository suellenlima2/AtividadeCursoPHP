<?php

$nomeCorreto = "Suellen";
$emailCorreto = "suellen123@gmail.com";
$telefoneCorreto = "123456789";

$nomeDigitado = $_GET["nome"];
$emailDigitado = $_GET["email"];
$telefoneDigitado = $_GET["telefone"];

if($nomeDigitado == $nomeCorreto && $emailDigitado == $emailCorreto && $telefoneDigitado == $telefoneCorreto){
    include("paginafinalGet.php");
}else{
    echo "Algum de seus dados está incorreto, reveja-os.";
}

?>