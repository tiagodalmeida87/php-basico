<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title></title>
</head>
<body>
<div>
    <?php
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos. <br/>";
        if ($i < 16) {
            $tipoVoto = "não vota";
        } elseif (($i >= 16 && $i < 18) || ($i>65)){
                $tipoVoto = "voto opcional";
            } else {
                $tipoVoto = "voto obrigatório";
            }
        echo "Para essa idade, $tipoVoto";
    ?>
    <br/>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>