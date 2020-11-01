<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Curso em Video </title>
</head>
<body>
    <div>
        <form method="get" action="02parte02.php">
            <?php
            $c=1;
            while ($c<=5){
                echo "Valor $c: <input type='number' name='v$c' max='100' min='0' value='0'/><br/>";
                $c++;
            }
            ?>
                <input type="submit" value="Enviar"/>
        </form>
    </div>
</body>
</html>