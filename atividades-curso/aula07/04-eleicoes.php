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
        $ano = $_GET["an"];
        $idade = 2019 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.";
        $tipo = ($idade>=18 && $idade<65)? "Obrigatório":"Não Obrigatório";
        echo "<br/>E dessa forma seu voto é $tipo";
    ?>
</div>
</body>
</html>