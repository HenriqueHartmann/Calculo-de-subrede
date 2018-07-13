<?php
$p = $_POST['prioct'];
$s = $_POST['segoct'];
$t = $_POST['tercoct'];
$q = $_POST['quartoct'];
$mask = $_POST['masc'];
if (!isset($_POST['prioct'], $_POST['segoct'], $_POST['tercoct'], $_POST['quartoct'], $_POST['masc'])){
    header('location: ../controller/controllerAction.php?action=');
}
require_once "../functions.php";
?>
<!doctype html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/bootstrap/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger titulo" href="">Cálculos de sub-rede</a>
    </div>
</nav>
<div class="container-fluid">
    <p>Quantidade de endereços: <?= qtdend($mask);?></p>
    <p>Quantidade de redes: <?= qtdsredes($mask);?></p>
    <p>Número de hosts: <?= numhost($mask);?></p>
    <p>Qual rede se encontra: <?= qualrede($q,$mask);?></p>
    <p>Endereço de rede: <?= rede($q,$mask);?></p>
    <p>Endereço de broadcast: <?= broadcast($q,$mask);?></p>
    <p>Primeiro host da rede: <?= prihost($q,$mask);?></p>
    <p>Último host da rede: <?= ulthost($q,$mask);?></p>
    <p>Máscara decimal: <?= mascdec($mask);?></p>
    <p>Classe C</p>
    <p>IP: <?= ip($p,$s);?></p>
</div>
</body>
</html>