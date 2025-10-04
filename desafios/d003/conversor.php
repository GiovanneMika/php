<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<?php

$valor = (double) $_GET["valor"] ?? 0;
$cotacaoRealDol = 5.36;
$valorDol = $valor / $cotacaoRealDol;

$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
$valor = numfmt_format_currency($padrao, $valor, "BRL");
$valorDol = numfmt_format_currency($padrao, $valorDol, "USD");
$cotacaoRealDol = numfmt_format_currency($padrao, $cotacaoRealDol, "BRL");


?>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <p><?= "Seus $valor equivalem a <strong>$valorDol</strong>*"; ?></p>
        <p><?= "<strong>*Cotação fixa de $cotacaoRealDol</strong> informada diretamente no código." ?></p>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>