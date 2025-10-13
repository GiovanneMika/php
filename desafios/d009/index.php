<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<body>
    <?php 
    $valor1 = $_GET["valor1"] ?? 0;
    $peso1 = $_GET["peso1"] ?? 0;
    $valor2 = $_GET["valor2"] ?? 0;
    $peso2 = $_GET["peso2"] ?? 0;

    $mediaAritmetica = ($valor1 + $valor2) / 2;
    $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="valor1">1° Valor:</label>
            <input type="number" name="valor1" id="valor1" required>
            <label for="peso1">1° Peso:</label>
            <input type="number" name="peso1" id="peso1" required>
            <label for="valor2">2° Valor:</label>
            <input type="number" name="valor2" id="valor2" required>
            <label for="peso2">2° Peso:</label>
            <input type="number" name="peso2" id="peso2" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores de <strong><?= $valor1 ?></strong> e <strong><?= $valor2 ?></strong>, temos:</p>
        <ul>
            <li>A média aritmética simples é <strong><?= number_format($mediaAritmetica, 2) ?></strong></li>
            <li>A média ponderada é <strong><?= number_format($mediaPonderada, 2) ?></strong></li>
        </ul>
    </section>

</body>

</html>