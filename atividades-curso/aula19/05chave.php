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
        $v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
        print_r($v);
        ksort($v);
        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>