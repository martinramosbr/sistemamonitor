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
        <form action="exercicio2p2.php" method="get">
        <?php
        $c = 1;
        while ($c <=5) {
            echo "Valor $c:
            <input type='number' name='v$c'><br/>";
            $c++;
        }
        
        ?>
        <input type="submit">
        </form>

    </div>
</body>
</html>