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
        function soma() {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i=0; $i<$t; $i++){
                 $s += $p[$i];
            }
            return $s;
        }
        $r = soma(3,5,2,8,9);
        echo "A soma dos valores é $r";
    ?>
    <br/>
</div>
</body>
</html>