<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Calculo de PRIMO</title>
</head>
<body>
<div>
    <?php
            //Declaração de variáveis e inserção do número ao formulário
        $c = 1;
        $mult = 0;
        $num = isset($_GET["num"])? $_GET["num"]:0;
        echo "Analisando o número $num <br/>";
        echo "Valores múltiplos: ";

        // Calculo de Números primos e retorno do resto
        for ($c=1; $c<=$num; $c++) {
            $mod = $num % $c;
                if ($mod == 0 && $c >= 1) {
                    $mult ++;
                    echo "$c";
            }
        }
        echo "<br/>";
        //Verificação de Primo ou não
        echo "Total de múltiplos: $mult";
        if ($mult == 2) {
            echo "<br/>". "Resultado: $num". " - É primo.";
        } else {
            echo "<br/>". "Resultado: $num". " - Não é primo.";
        }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>