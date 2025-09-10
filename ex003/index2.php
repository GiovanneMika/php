<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de exibição de strings</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        span {
            font-weight: lighter;
            font-size: 0.8em;
        }
    </style>
</head>

<body>
    <h1>Strings com e sem: <span>aspas duplas, simples, interpoladas e concatenadas</span></h1>
    <?php
    $nome = "Giovanne";
    echo '$nome = ' . $nome . "<br>";
    const SOBRENOME = "Mika";
    echo 'const SOBRENOME = ' . SOBRENOME . "<br>";

    $nomeCompleto = "$nome " . SOBRENOME;
    echo $nomeCompleto . ' é a concatenação da variável $nome e da constante SOBRENOME' . "<br>";

    $apelido = "Givas";
    echo "Teste com apelido: <br> O apelido de $nomeCompleto é $apelido, portanto seu nome com apelido fica $nome \"$apelido\" " . SOBRENOME;
    ?>
</body>

</html>