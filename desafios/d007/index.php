<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<body>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $salarioMinimo = 1518;
    $salarioMinimoFormat = numfmt_format_currency($padrao, $salarioMinimo, "BRL");
    $salario = $_GET["salario"] ?? 0;
    $quantSalariosInt = (int)($salario / $salarioMinimo);
    $quantSalariosFloat = number_format($salario / $salarioMinimo, 2, ',', '.');
    $sobra = $salario % $salarioMinimo;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando salário mínimo de <strong><?= $salarioMinimoFormat ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?= numfmt_format_currency($padrao, $salario, "BRL") ?> ganha <strong><?= $quantSalariosInt ?> salários mínimos</strong> e <?= numfmt_format_currency($padrao, $sobra, "BRL") ?>, ou aproximadamente <strong><?= $quantSalariosFloat ?> salários mínimos.</strong></p>
    </section>


</body>

</html>