<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste PHP</title>
</head>
<body>
    <h1>Operação PHP</h1>
    <div>
        <form method="POST">
            <input type="" name="">
        </form>
    </div>
    <?php 

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $n3 = $_GET["c"];
        
        $soma = $n1 + $n2 + $n3;
        $media = ($n1 + $n2) / 2;
        $resto = ($n1 + $n2) % $n3;
        //var_dump($media);
        echo "Os valores recebidos de $n1 $n2 e $n3.<br>";
        echo "A soma é $soma <br>";
        echo "A media é $media <br>";
        echo "O resto é $resto <br>";

        echo "<br>O valor absoluto de $n3 é ". abs($n3);
        echo "<br>O valor de $n3<sup>$n2</sup> é ". pow($n3, $n2);
        echo "<br>A raiz quadrada de $n3 é ". sqrt($n3);
        echo "<br>O valor aredondado de $n3 é ". round($n3); //ceil (arredonda sempre para cima) floor (arredonda sempre para menos).
        echo "<br>A parte inteira de $n3 é ".intval($n3);
        echo "<br> O valor de $n1 em moeda é R$". number_format($n1,2,",",".");

     ?>
</body>
</html>