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
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O raiz de $valor é igual a ". number_format($rq,2);
    ?>
    <a href="01exercicio.html">Voltar</a>
</div>
</body>
</html>