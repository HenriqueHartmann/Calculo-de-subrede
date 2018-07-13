<?php
    function expma($mask) {
        $exp = 32 - $mask;
        return $exp;
    }


    function qtdend($mask) {
        $exp = expma($mask);
        $qtdend = pow(2,$exp);
        return $qtdend;
    }

    function qtdsredes($mask) {
        $qtdend = qtdend($mask);
        $qtdsredes = 256 / $qtdend;
        return $qtdsredes;
    }

    function numhost($mask) {
        $qtdend = qtdend($mask);
        $numhost = $qtdend -2;
        if ($numhost < 0) {
            $numhost = 0;
            return $numhost;
        }else {
            return $numhost;
        }
    }

    function qualrede($q,$mask) {
        $qtdend = qtdend($mask);
        $qualrede = $q / $qtdend;
        settype($qualrede, 'int');
        return $qualrede;
    }

    function rede($q,$mask) {
        $qtdend = qtdend($mask);
        $qualrede = qualrede($q,$mask);
        $rede = $qualrede * $qtdend;
        return $rede;
    }

    function broadcast($q,$mask) {
        $qtdend = qtdend($mask);
        $rede = rede($q,$mask);
        $broadcast = ($qtdend + $rede) - 1;
        return $broadcast;
    }

    function prihost($q,$mask) {
        $rede = rede($q,$mask);
        $prihost = $rede + 1;
        return $prihost;
    }

    function ulthost($q,$mask) {
        $broadcast = broadcast($q,$mask);
        $ulthost = $broadcast - 1;
        return $ulthost;
    }

    function mascdec($mask){
        $qtdend = qtdend($mask);
        $mascdec = "255.255.255.$qtdend";
        return $mascdec;
    }

    function ip($p,$s) {
        if ($p != 192 and $s != 168) {
            $ip = "Público";
            return $ip;
        }else {
            $ip = "Privado";
            return $ip;
        }
    }