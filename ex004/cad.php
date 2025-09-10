<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="cssGuanabara.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome";
            $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
            echo "<p>Olá <strong>$nome $sobrenome</strong>, esse é meu site!</p>";
        ?>
        <button id="voltar" onclick="voltar()">Voltar</button>
    </main>
    <script>
        function voltar(){
            window.location.href = "index.html";
        }
    </script>
</body>
</html>