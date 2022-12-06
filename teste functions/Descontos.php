<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<h1>PHP</h1>
<?php 
    
    $preco = $_GET["p"];
    echo "O preço do produto é R$ ". number_format($preco,2,",",".");
    $preco += ($preco * 10/100);
    echo "<br> O preço com 10% de aumento é R$ ". number_format($preco, 2, ",", ".");
    $preco2 = $_GET["p"];
    $preco2 -= ($preco2 * 10/100);
    echo "<br> O preço com 10% de desconto é R$ ". number_format($preco, 2, ",", ".");

 ?>
</body>
</html>