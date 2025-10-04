<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<body>
    <?php
    $num = $_GET["num"] ?? 0;

    ?>
    <h1>Resultado:</h1>
    <main>
        <p>
            <?=
            "O número escolhido foi <strong>$num</strong> <br>Seu antecessor é <strong>" . ($num - 1) . "</strong><br> Seu sucessor é <strong>" . ($num + 1) . "</strong>";
            ?>
        </p>

        <button onclick="history.back()"> &#x2B05; Voltar</button>
    </main>
</body>

</html>