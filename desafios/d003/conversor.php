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
        <h1>Conversor de Moedas v1.0</h1>
        <p><?php 
            $valor = $_GET["valor"];
            $cotacaoRealDol = 5.36;
            $valorDol = $valor/$cotacaoRealDol;
            $valorDol = number_format($valorDol, 2, ",",".");
            echo "Seus R$ $valor equivalem a <strong>US$ $valorDol</strong>*";
            $hoje = new DateTime("now");
            echo $hoje->format("m-d-Y");
        ?></p>
        <p><?= "<strong>*Cotação fixa de $cotacaoRealDol</strong> informada diretamente no código."?></p>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>
</html>