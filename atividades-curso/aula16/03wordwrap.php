<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Teste Wordwrap</title>
</head>
<body>
<div>
    <?php
        $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento da função Wordwrap.";
        $r = wordwrap($t, 5,"<br/>\n", true);
        echo $r;
    ?>
    <br/>
</div>
</body>
</html>