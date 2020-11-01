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
        $est = isset($_GET["est"])?$_GET["est"]:0;
        switch ($est) {
            case "no":
                $reg = "Região Norte";
                break;
            case "ne":
                $reg = "Região Nordeste";
                break;
            case "co":
                $reg = "Região Centro-Oeste";
                break;
            case "sud":
                $reg = "Região Sudeste";
                break;
            case "sul":
                $reg = "Região Sul";
        }
        echo "Você está na $reg";
    ?>

    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>
</div>
</body>
</html>