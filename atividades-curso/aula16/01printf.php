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
        $p = "Leite";
        $pr = "4.5";
        //  echo "O $p custa R$ $pr<br/>";
        printf ("O %s custa R$ %.2f", $p, $pr);
    ?>
    <br/>
</div>
</body>
</html>