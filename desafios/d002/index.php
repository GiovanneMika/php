<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 1 e 100...</p>
        <p>O valor gerado foi <strong><?= rand(1, 100) ?></strong></p>
        <button onclick="location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>
</html>