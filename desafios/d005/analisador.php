<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<?php 
    $numReal = $_GET["num"];
    $numRealInt = number_format(intval($numReal),0,",",".");
    $numRealDec = ($numReal*1000)%1000;
    $numRealFormatado = number_format($numReal, 3, ",", ".");


?>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <p>Analisando o número <strong><?= $numRealFormatado?></strong> informado pelo usuário:</p>
        <ul>
            <li>A parte inteira do número é <strong><?=  $numRealInt ?></strong></li>
            <li>A parte fracionária do número é <strong><?= "0,".$numRealDec ?></strong></li>
        </ul>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>