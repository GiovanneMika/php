<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="../../cssGuanabara.css">
</head>
<body>
    <?php
    $segundosForm = $_GET["segundos"] ?? 0;
    $semanas = ($segundosForm/604800<1) ? 0 : floor($segundosForm/604800);
    $dias = (($segundosForm%604800)/86400 <1 ) ? 0 : floor(($segundosForm%604800)/86400);
    $horas = ((($segundosForm%604800)%86400)/3600 < 1) ? 0 : floor((($segundosForm%604800)%86400)/3600);
    $minutos = (((($segundosForm%604800)%86400)%3600)/60 < 1)? 0 : floor(((($segundosForm%604800)%86400)%3600)/60);
    $segundos = ((($segundosForm%604800)%86400)%3600)%60;
    $tempo = [
        "semanas" => $semanas,
        "dias" => $dias,
        "horas" => $horas,
        "minutos" => $minutos,
        "segundos" => $segundos
    ];
    
    $segundos = number_format($segundosForm, 0, ",", ".");
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER['PHP_SELF'] ?>">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?= $segundosForm?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h3>Totalizando tudo</h3>
        <p>Analisando o valor que você digitou, <strong><?= $segundos ?></strong> segundos equivalem a um total de:</p>
        <ul>
            <?php 
            foreach ($tempo as $unidade => $quantidade) {
                if($quantidade == 1){
                    $unidade = substr($unidade, 0, -1);
                }
                echo "<li>$quantidade $unidade</li>";
            }
            ?>
        </ul>
    </section>
</body>
</html>