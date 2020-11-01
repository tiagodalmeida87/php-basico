<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css"
    <title>Explode</title>
</head>
<body>
<div>
    <?php
        $site = "Curso em vídeo";
        $vetor = explode (" ", $site);
        print_r ($vetor);
    ?>

</div>
</body>
</html>