<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Explode</title>
</head>
<body>
<div>
    <pre>
    <?php
        function f($v, $n){
            if ($n <= 0) return 1;
            else
                return $v [$n-1] * f($v, $n-2) + 1;
    }
    $a = array(0,1,2,3);
        print (f($a, 4));

    ?>
    </pre>
</div>
</body>
</html>