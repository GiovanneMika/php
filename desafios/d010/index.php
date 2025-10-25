<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando idade PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<body>
    <?php
    $anoNasc = $_GET["anoNasc"] ?? date("Y");
    $ano = $_GET["ano"] ?? date("Y");
    $idade = $ano - $anoNasc;

    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="anoNasc">Em que ano você nasceu?</label>
            <input type="number" name="anoNasc" id="anoNasc" value="<?= $anoNasc ?>" min="1900" max="<?= date("Y") ?>" required>
            <label for="ano">Quer saber sua idade em que ano? (Atualmente estamos em <strong><?= date("Y") ?></strong>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $anoNasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?>!</p>
    </section>

</body>

</html>