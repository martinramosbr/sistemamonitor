<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $es = isset($_GET["estado"])?$_GET["estado"]:0;
            switch ($es) {
            case '1':
            case '2':
            case '3':
            case '4':
            case '5':
            case '6': 
            case '7':
                echo "O estado pertence a Região Norte";
                break;
            case '8':
            case '9':
            case '10':
            case '11':
            case '12':
            case '13':
            case '14':
                echo "O estado pertence a Região Nordeste";
                break;
            case '15':
            case '16':
            case '17':
            case '18':
                echo "O estado pertence a Região Centro-Oeste";
                break;
            case '19':
            case '20':
            case '21':
            case '22':
                echo "O estado pertence a Região Sudeste";
                break;
            case '23':
            case '24':
            case '25':
                echo "O estado pertence a Região Sul";
                

            }
    ?>
    <br><br>
    <a href="javascript:history.go(-1)" class="primary-buttom">Voltar</a>
</body>
</html>