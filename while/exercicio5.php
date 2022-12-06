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
        $val = isset($_GET["tab"])?$_GET["tab"]:0;
        $d = isset($_GET["dad"])?$_GET["dad"]:0;
        $m = $val;
        $c = 1;

        do {
            $ma = $m * $c;
            echo "$m X $c = $ma <br/>";
            $c ++;
            
        } while ($c <= $d);

        
    ?>

    </div>
</body>
</html>