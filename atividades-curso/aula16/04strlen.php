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
        $tam = strlen($t);
        echo"O texto $t <br/> Tem o tamanho de $tam  - Caracteres";
    ?>
    <br/>
</div>
</body>
</html>