<?php

    function calculaID($p, $s, $t, $q, $mask){

        $exp  = 32 - $mask;//EXPOENTE

        $qtdend = pow(2,$exp);//QUANTIDADE DE ENDEREÇOS
        echo "<p>Quantidade de endereços: $qtdend </p>";

        $qtdsredes = 256/$qtdend; //QUANTIDADE DE SUB-REDES
        echo "<p>Quantidade de sub-redes: $qtdsredes </p>";

        $numhost = $qtdend - 2;//QUANTIDADE DE ENDEREÇOS HOSTS EM CADA SUB-REDE
        if($numhost < 0) {
            $numhost = 0;
            echo '<p>Quantidade de endereços hosts em cada sub-rede: $numhost </p>';
        }else {
            echo '<p>Quantidade de endereços hosts em cada sub-rede: $numhost </p>';
        }

        $qualrede =  (int)($q / $qtdend);//Em qual rede ele se encontra
        echo "<p>Em qual rede ele se encontra: $qualrede </p>";

        $rede = $qualrede * $qtdend;//Endereço de rede da sub-rede que ele se encontra
        echo "<p>Endereço de rede da sub-rede que ele se encontra: $rede </p>";

        $broadcast = ($qtdend + $rede) -1;//Endereço de broadcast da sub-rede que ele se encontra
        echo "<p>Endereço de broadcast da sub-rede que ele se encontra: $broadcast </p>";

        $prihost = $rede +1;//Primeiro endereço da sub-rede
        $ulthost = $broadcast -1;//Último endereço da sub-rede
        echo "<p>Primeiro host da sub-rede $prihost e ultimo $ulthost </p>";

        echo "<p>Máscara da rede em decimal: 255.255.255.$qtdend </p>";//Máscara de rede em decimal

        echo "<p>CLASSE C </p>";//CLASSE

        if ($p != 192 and $s != 168) {//Público ou Privado
            $ip = 'Público';
            echo "<p>IP: $ip </p>";
        }else {
            $ip = 'Privado';
            echo "<p>IP: $ip </p>";
    }
    }

//    $primoct = $_POST['prioct'];
//    $segoct = $_POST['segoct'];
//    $tercoct = $_POST['tercoct'];
//    $quartoct = $_POST['quartoct'];
//    $mascsubrede = $_POST['masc'];
//    $val = 0;
//
//    if (isset($primoct, $segoct, $tercoct, $quartoct, $mascsubrede)) {
//        return $val = True;
//    }
//
//    if ($val == True){
//        calculaID($primoct, $segoct, $tercoct, $quartoct, $mascsubrede);
//    }
