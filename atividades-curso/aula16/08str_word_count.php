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
        $frase = "Eu vou estudar PHP agora";
        $cont = str_word_count($frase,0);
        echo $cont;
        echo "<br/>";
        echo "<br/>";
        $cont = str_word_count($frase,1);
        print_r($cont);
        echo "<br/>";
        echo "<br/>";
        $cont = str_word_count($frase,2);
        print_r($cont);

    ?>
    <br/>
</div>
</body>
</html>