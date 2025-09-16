<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>

<?php
$hoje = new DateTime("now");
$url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . $hoje->format("m-d-Y") . "'&\$top=1&\$format=json";

$resposta = file_get_contents($url);
$dados = json_decode($resposta, true);


while (!$dados || !isset($dados['value'][0])) {
    $hoje->modify("-1 day");
    $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='" . $hoje->format("m-d-Y") . "'&\$top=1&\$format=json";
    $resposta = file_get_contents($url);
    $dados = json_decode($resposta, true);
}
$cotacao = $dados['value'][0];
$cotacaoVenda = $cotacao['cotacaoVenda'];
?>

<body>
    <main>
        <h1>Conversor de Moedas v2.0</h1>
        <p><?php
            $valor = $_GET["valor"];
            $cotacaoRealDol = $cotacaoVenda;
            $valorDol = $valor / $cotacaoRealDol;
            $valorDol = number_format($valorDol, 2, ",", ".");
            echo "Seus R$ $valor equivalem a <strong>US$ $valorDol</strong>";
            ?></p>
        <p>Cotação obtida diretamente do site do <a href="https://www.bcb.gov.br/estabilidadefinanceira/historicocotacoes">Banco Central do Brasil</a></p>
        <p>A cotação utilizada foi de R$ <?= "$cotacaoRealDol" ?></p>
        <button onclick="history.back()">Voltar</button>
    </main>
</body>

</html>