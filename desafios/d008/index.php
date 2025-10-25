<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<body>
    <?php
    $numero = $_GET['numero'] ?? 1;
    $raizQuad = number_format(pow($numero, 1 / 2), 3, ",", ".");
    $raizCub = number_format(pow($numero, 1 / 3), 3, ",", ".");
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero" value="<?= $numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?= $numero ?></strong>, temos:</p>
        <ul>
            <li>A sua raíz quadrada é <strong><?= $raizQuad ?></strong> </li>
            <li>A sua raíz cúbica é <strong><?= $raizCub ?></strong> </li>
        </ul>
    </section>

</body>

</html>