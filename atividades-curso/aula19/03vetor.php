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
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        array_unshift($v,"V");
        //array_shift($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>