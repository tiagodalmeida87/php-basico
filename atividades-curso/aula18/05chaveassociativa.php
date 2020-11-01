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
        $v = array( "nome" => "Ana",
                    "idade" => 19,
                    "peso" => 78.6);
        foreach($v as $k => $c) {
            echo "O campo $k possui o conteudo $c </br>";
        }
    ?>
    </pre>
</div>
</body>
</html>