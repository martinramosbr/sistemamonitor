<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="exercicio2tabuada.php">
        <select name="num">
            <?php
                for ($c=1; $c <= 10 ; $c++) { 
                    echo "<option> $c </option>";
                }
            ?>
        </select>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>