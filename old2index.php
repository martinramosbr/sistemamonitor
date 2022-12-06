<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
    <div>
        <form method="get" action="dados.php">
            <label>Nota 1:</label>           
            <input type="number" placeholder="Digite a sua nota" name="nota1"><br/> 
            <label>Nota 2:</label>            
            <input type="number" placeholder="Digite a sua nota" name="nota2"><br/>
            <input type="submit" value="Calcular Média">
        </form>

    </div>
<!-- lesson 8 cores 
<div>
<form method="get" action="dados.php">
    <label for="itxt">Texto:</label>
    <input type="text" name="t" id="itxt"><br>
    <label for="itam">Tamanho:</label>
    <select name="tam" id="itam">
        <option value="8pt">8</option>
        <option value="10pt">10</option>
        <option value="14pt">14</option>
        <option value="20pt">20</option>
        <option value="40pt">40</option>
    </select> <br>
        <label for="icor">Cor:</label>
        <input type="color" name="cor" id="icor"> <br>
        <input type="submit" value="Gerar">
</form>
</div>-->
<!--lesson 8 envio de dados GET 
<h1>form_data_send</h1>
<form method="get" action="dados.php">
    <fieldset><legend>Dados</legend>
        <label>Nome:.................</label>
        <input type="text" name="nome">
        <br/>
        <br>
        <label>Ano nascimento:.</label>
        <input type="number" name="ano">
    </fieldset><br/> 
    
    <fieldset><legend>Sexo</legend>
        <input type="radio" name="sexo" id="masc" value="Homem" checked>
        <label for="masc">Masculino</label><br/>
        <input type="radio" name="sexo" id="fem" value="Mulher">
        <label for="fem">Feminino</label>
    </fieldset>
    <br>
        <input type="submit" value="Enviar">
</form>-->

<?php 
    /*$idade=19;
    if ($idade>=18) {
            $vota=true;
            $dirigi=true;
        }else{
            $vota=false;
            $dirigi=false;
        }

    var_dump($vota, $dirigi);
    */

    #lesson 8: Envio de dados method GET
    /*$name = $_GET["v"];
    $ano = $_GET["v1"];
    $sexo = $_GET["v2"];
    echo "Digitou $valor";*/






    #lesson 7
   /*$n1 = $_GET["n1"];
   $n2 = $_GET["n2"];
   $tipo = $_GET["tipo"];

   echo "The values is $n1 and $n2 <br>";
   $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
   echo "The results is $r";
   echo "<br>=============================================";
   $a = 3;
   $b = "3";
   $r = ($a == $b) ? "SIM":"NÃO";
   echo "<br><br>The variables A and B are like? $r";
   echo "<br>=============================================";
   $a = 3;
   $b = "3";
   $r = ($a === $b) ? "SIM":"NÃO";
   echo "<br><br>The variables A and B are same? $r";
   echo "<br>=============================================";
   $note1 = $_GET["n1"];
   $note2 = $_GET["n2"];
   $note3 = $_GET["n3"];
   $m = ($note1+$note2+$note3) / 3;

   echo "<br><br>The average is: ";
   var_dump($m);
   echo "<br>=============================================";
   echo "<br><br>The student's situation is ". (($m<6)?"Disapproved":"Approved");
   echo "<br>=============================================";
   echo "<br>";

   #logical operator
   $ano = 2010;
   $idade = 2022 - $ano;
   echo "Who was born in $ano is $idade years old.";
   $tipo = ($idade >=18 && $idade<65)?"Mandatory":"No Mandatory";
   echo "<br>";
   var_dump($tipo);*/

 ?>
</body>
</html>

