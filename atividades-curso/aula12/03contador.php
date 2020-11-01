<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Tabuada do Curso em Vídeo</title>
</head>
<body>
<div>
    <?php
        $n1 = isset($_GET["n1"])? $_GET["n1"]:1;
        echo "<h1> Mostrando a Tabuada de $n1</h1>";
        $c = 1;
        $mult = 1;
        // $tab = 1;
        do{
            $mult = $n1 * $c;
            echo "<h5>$n1 X $c = $mult </h5>";
            $c++;
        } while($c <= 10);
        //echo "<h3>$n1 X $c = $tab </h3>"
    ?>
    <br/>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>