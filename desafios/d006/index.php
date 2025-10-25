<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<style>
    * {
        padding: 0;
        margin: 0;
    }

    div>h1 {
        display: inline-block;
        padding: 20px 50px;
        width: 200px;
    }

    h1.divisor {
        border-left: black 3px solid;
        border-bottom: black 3px solid;
    }

    h1.resultado {
        border-left: black 3px solid;
    }
    h1.resto {
        text-decoration: underline;
    }

    div {
        text-align: center;
    }
</style>

<body>
    <?php
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    $resultado = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <div>
            <h1><?= $dividendo ?></h1>
            <h1 class="divisor"><?= $divisor ?></h1>
            <br>
            <h1 class="resto"><?= $resto ?></h1>
            <h1 class="resultado"><?= $resultado ?></h1>
        </div>
    </section>

</body>

</html>