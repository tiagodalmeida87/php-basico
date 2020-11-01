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
        $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $n2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $m = ($n1+$n2)/2;
        echo "<br/>A média entre $n1 e $n2 é igual $m";
       if ($m > 7) {
            $sit = "APROVADO";
        } elseif (($m >= 5 && $m < 7)) {
                $sit = "EM RECUPERAÇÃO";
            } else {
                $sit = "REPROVADO";
            }
        echo "<br/>Situação do aluno: $sit";
       //echo"<span class='texto'>$txt</span>"
    ?>
    <br/>
    <a href="exercicio03.html">Voltar</a>
</div>
</body>
</html>