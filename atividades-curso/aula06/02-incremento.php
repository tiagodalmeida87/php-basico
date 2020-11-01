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
        /* Este exercicio prentede demonstrar
         o uso de operadores de incremento*/
        $atual = $_GET["aa"]; //Essa linha vai pegar o ano na URL
        echo "O ano atual é $atual e o ano anterior é ". --$atual;
        # echo "<br/>O ano atual é $atual e o ano seguinte é ". ++$atual; ERRO! Esse $atual pega referencia do ano anterior.
    ?>
</div>
</body>
</html>