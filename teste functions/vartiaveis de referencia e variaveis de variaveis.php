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
    #variavel referenciais 
    $a = 3;
    $b = &$a;
    $b += 5;

    echo "A variavel A vale $a<br>";
    echo "A variavel B vale $b";

    #variaveis de variaveis ou variaveis variantes
    $site = "abc";
    $$site = "def";

    echo "$site<br><br>";
    
    echo "A variavel abc recebeu $abc";


 ?>
</body>
</html>