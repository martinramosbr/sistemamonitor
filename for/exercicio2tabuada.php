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
        $c = isset($_GET["num"]) ? $_GET["num"] : 0;

        for ($v = 1; $v <= 10; $v++) {
            $r = $c * $v;
            echo "$c X $v = $r <br>";
        }

        ?>

        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>