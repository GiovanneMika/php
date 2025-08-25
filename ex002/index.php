<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Exemplo de PHP</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo"); //GMT -3
    for ($c = 1; $c <= 10; $c++) {
        echo "<p>Esse é o $c ° parágrafo! </p>";
    }
    echo "Hoje é dia " . date("d") . " do ". date("m").", e a hora atual é ". date("H:i:s");
    ?>
</body>

</html>