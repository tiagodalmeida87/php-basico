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
        $v = isset($_GET["val"])? $_GET["val"]:1;
        echo "<h1> Calculando fatorial de $v</h1>";
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c --;
        } while($c >= 1);
        echo "<h3>O fatorial de $v != $fat </h3>"
    ?>
    <br/>
    <a href="exercicio02.html">Voltar</a>
</div>
</body>
</html>