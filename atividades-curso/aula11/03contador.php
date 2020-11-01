<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title></title>
</head>
<body>
<div>
    <?php
    $ini = isset($_GET["comeco"]) ? $_GET["comeco"] : 0;
    $fin = isset($_GET["final"]) ? $_GET["final"] : 10;
    $incre = isset($_GET["cont"]) ? $_GET["cont"] : 1 ;

    if ($ini < $fin) {
        while ($ini <= $fin) {
            echo "$ini . ";
            $ini += $incre;
        }
    }else {
        while ($ini >= $fin) {
            echo "$ini . ";
            $ini -= $incre;
        }
    }
    ?>
    <br/>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>