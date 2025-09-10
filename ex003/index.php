<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em PHP</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
    //      0x = hexadecimal  0b = binário  0 = octal
    //ex:   0x1A = 26         0b11010 = 26  032 = 26

    echo "<h2>Com números</h2>";
    $num = 26.2;
    echo "O número é $num </br>";
    var_dump($num);

    echo "<h2>Com strings</h2>";
    $string = "Giovanne";
    echo "A string é $string e seu tipo é: ";
    
    var_dump($string);
    echo "</p>";
    echo "<p>Com print_r: ";
    print_r($string);

    echo "<h2>Com números exponenciais</h2>";
    $ne = 26e3;
    echo "O número é $ne </br>";
    echo "<p>Com var_dump: ";
    var_dump($ne);
    echo "</p>";
    echo "<p>Com print_r: ";
    print_r($ne);

    echo "<h2>Com arrays</h2>";
    $v = array(3, 5, 8, 2);
    echo 'O array é $v[3, 5, 8, 2]';
    echo "<p>Com var_dump: ";
    var_dump($v);
    echo "</p>";
    echo "<p>Com print_r: ";
    print_r($v);
    echo "</p>";


    echo "<h2>Exemplo de casting</h2>";
    $a = "10";
    $b = (int)$a;
    echo "O valor de a é $a e o valor de b é $b";
    echo "<br>a = ";
    var_dump($a);
    echo "<br>b = ";
    var_dump($b);
    ?>
</body>

</html>