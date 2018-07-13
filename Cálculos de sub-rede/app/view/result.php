<?php
$p = $_POST['prioct'];
$s = $_POST['segoct'];
$t = $_POST['tercoct'];
$q = $_POST['quartoct'];
$mask = $_POST['masc'];
//if (!isset($_POST['prioct'], $_POST['segoct'], $_POST['tercoct'], $_POST['quartoct'], $_POST['masc'])){
//    header('location: ../controller/controllerAction.php?action=');
//}
require_once "../functions.php";
//?>

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
