<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $v = isset($_GET["val"])?$_GET["val"]:1;
            $c = $v;
            $fat = 1;
            do {
                $fat = $fat * $c;
                $c --;
            } while ($c >= 1);
            echo "<h1>Calculando o valor fatorial de $v.</h1>";
            echo "<h2>$v! = $fat.</h2>";
        
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>

    </div>
</body>
</html>