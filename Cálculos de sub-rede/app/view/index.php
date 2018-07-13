<?php require_once "../functions.php"; ?>
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
<script>
    $(document).ready(function () {
       $("#enviar").click(function () {
           var pri = $("#prioct").val();
           var seg = $("#segoct").val();
           var ter = $("#tercoct").val();
           var qua = $("#quartoct").val();
           var mas = $("#masc").val();


            $.post("../view/result.php",
                {
                    prioct: pri,
                    segoct: seg,
                    tercoct: ter,
                    quartoct: qua,
                    masc: mas
                }
                ,function (data) {
                    $("#conteudo").html(data);
                });

           if(pri < 192) {
               alert("Not a valid character");

           }
           else if(pri > 223) {
               alert("Not a valid character");

           }
           else if(seg < 0) {
               alert("Not a valid character");

           }
           else if(seg > 255) {
               alert("Not a valid character");

           }
           else if(ter < 0) {
               alert("Not a valid character");

           }
           else if(ter > 255) {
               alert("Not a valid character");

           }
           else if(qua < 0) {
               alert("Not a valid character");

           }
           else if(qua > 255) {
               alert("Not a valid character");

           }
           else if(mas < 24) {
               alert("Not a valid character");

           }
           else if(mas > 32) {
               alert("Not a valid character");
           }

       });
       $("#prioct").keyup(function () {
           $("#prioct").val(this.value.match(/[0-9]*/));
       });
       $("#segoct").keyup(function () {
           $("#segoct").val(this.value.match(/[0-9]*/));
       });
       $("#teroct").keyup(function () {
           $("#teroct").val(this.value.match(/[0-9]*/));
       });
       $("#quartoct").keyup(function () {
           $("#quartoct").val(this.value.match(/[0-9]*/));
       });
       $("#masc").keyup(function () {
           $("#masc").val(this.value.match(/[0-9]*/));
       });

    });
</script>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger titulo" href="">Cálculos de sub-rede</a>
    </div>
</nav>
    <div class="container-fluid">
        <h3><span style="border-bottom:2.5px solid red">Regras:</span></h3>
        <p>Somente endereços de <span style="border-bottom:2.5px solid red">Classe C</span>, ou seja, o valor da primeira caixa deve ser entre 192 e 223.
        As caixas  2, 3 e 4 recebem no mínimo 0 e no máximo até 255. A caixa 5 pode no mínimo 24 e no máximo 32</p>

        <form class="form-inline" id="form-id" method="post">
            <label class="sr-only" for="inlineFormInput">Caixa1</label>
            <input type="text" maxlength="3" class="form-control mb-2 mr-sm-2 mb-sm-0" id="prioct" name="prioct">
            <span class="ponto">.</span>
            <label class="sr-only" for="inlineFormInput">Caixa2</label>
            <input type="text" maxlength="3" class="form-control mb-2 mr-sm-2 mb-sm-0" id="segoct" name="segoct">
            <span class="ponto">.</span>
            <label class="sr-only" for="inlineFormInput">Caixa3</label>
            <input type="text" maxlength="3" class="form-control mb-2 mr-sm-2 mb-sm-0" id="tercoct" name="tercoct">
            <span class="ponto">.</span>
            <label class="sr-only" for="inlineFormInput">Caixa4</label>
            <input type="text" maxlength="3" class="form-control mb-2 mr-sm-2 mb-sm-0" id="quartoct" name="quartoct">
            <span class="ponto">/</span>
            <label class="sr-only" for="inlineFormInput">Máscara</label>
            <input type="text" maxlength="2" class="form-control mb-2 mr-sm-2 mb-sm-0" id="masc" name="masc">

            <button id="enviar" type="button" class="btn btn-success">Submit</button>
        </form>

        <div id="conteudo">
        </div>
    </div>
</body>
</html>