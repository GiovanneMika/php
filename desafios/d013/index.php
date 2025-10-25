<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
    <style>
        img {
            width: 150px;
            padding: 10px 0px;
        }
    </style>
</head>
<body>
    <?php 
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    $saque = $_GET["saque"] ?? 0;
    $saqueFormat = numfmt_format_currency($padrao, $saque, "BRL");
    $notaCem = floor($saque/100);
    $notaCinq = floor($saque%100/50);
    $notaDez = floor($saque%100%50/10);
    $notaCinco = floor($saque%100%50%10/5);

    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="saque">Qual valor você deseja sacar? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" min="0" required value="<?= $saque ?>">
            <p style="font-size: 0.7em;">*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= $saqueFormat?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <div>
            <ul>
                <li><img src="https://upload.wikimedia.org/wikipedia/pt/6/61/Atual_c%C3%A9dula_de_100_reais_anverso.jpg" alt="Nota 100 reais"><?= "$notaCem X"?></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/pt/d/db/Anverso_da_c%C3%A9dula_de_50_reais.PNG" alt="Nota 50 reais"><?= "$notaCinq  X"?></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/pt/4/4b/Anverso_da_c%C3%A9dula_de_10_reais.PNG" alt="Nota 10 reais"><?= "$notaDez  X"?></li>
                <li><img src="https://upload.wikimedia.org/wikipedia/pt/b/bd/Anverso_da_c%C3%A9dula_de_5_reais.PNG" alt="Nota 5 reais"><?= "$notaCinco  X"?></li>
            </ul>
        </div>
    </section>
    
</body>
</html>