<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
    <style>

    </style>
</head>

<body>
    <?php
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $precoInicial = $_GET["preco"] ?? 0;
    $reajuste = $_GET["reajuste"] ?? 0;
    $precoFinal = $precoInicial * (1 + $reajuste / 100);

    $precoInicialFormat = numfmt_format_currency($padrao, $precoInicial, "BRL");
    $precoFinalFormat = numfmt_format_currency($padrao, $precoFinal, "BRL");
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" step="0.01" min="0.10" value="<?=  $precoInicial?>" required>
            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="reajustenum"><?= $reajuste ?></span></strong>%)</label>
            <input type="range" name="reajuste" id="reajuste" step="1" min="0" max="100" oninput="atualizaReajuste()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava <?= $precoInicialFormat ?>, com <strong><?= $reajuste ?>% de aumento</strong> vai passar a custar <strong><?= $precoFinalFormat ?></strong> a partir de agora.</p>
    </section>

    <script>
        function atualizaReajuste() {
            let reajuste = document.getElementById('reajuste');
            let reajustenum = document.getElementById('reajustenum');
            reajustenum.textContent = reajuste.value;
        }
    </script>
</body>

</html>