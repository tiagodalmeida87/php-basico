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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tera $i anos. <br/>";
        if ($i >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade voçê $v e também $d";
    ?>
    <br/>
    <a href="exercicio01.html">Voltar</a>
</div>
</body>
</html>