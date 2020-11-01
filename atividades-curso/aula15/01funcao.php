<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title> Procedimento por Referencia</title>
</head>
<body>
<div>
    <?php
        function teste(&$x) {
            $x += 2;
            echo "<p>O valor de X e $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
    <br/>
</div>
</body>
</html>