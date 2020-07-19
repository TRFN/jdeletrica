<?php
    function ctrl_principal($ctx){
        $ctx->regVar("anoatual", date("Y"));
        $ctx->regVar("titulo", "JD Elétrica");
        $ctx->regVar("cortema", "#FFD700");
        $ctx->regVar("corborda", "#CDCDCD");
        $ctx->regVar("corbordadark", "#4E5A62");
        $ctx->regVar("logotipo", "imagens/logotipo.png");
        $ctx->regVar("logocss", "
            width: 250px;
            background-size: 220px;
            margin-top: 6px;
        ");
        $ctx->regVar("slidehome-anim-in", "bounceInUp");
        $ctx->regVar("slidehome-anim-out", "bounceOutDown");
        $ctx->regVar("imagem-parallax", "imagens/placafotovoltaica.jpg");
    }
?>
