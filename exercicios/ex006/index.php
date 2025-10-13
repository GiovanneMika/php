<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>
<?php
$v1 = $_POST['v1'] ?? 0;
$v2 = $_POST['v2'] ?? 0;
$soma = $v1 + $v2;
?>

<body>
    <main>
        <h1>Somando Valores</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required value="<?= $v2 ?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required value="<?= $v2 ?>">
            <input type="submit" value="Enviar" onclick="mostrar()">
        </form>
    </main>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>
        <section>
            <h2>Resultado da Soma</h2>
            <?= "A soma entre $v1 e $v2 é: <strong>$soma</strong>"; ?>
        </section>
    <?php endif; ?>
</body>

</html>