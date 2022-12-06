<form action="index.php" method="POST">
        <input type="text" name="texto" id="texto">
        <input type="submit" name="enviar" id="enviar">
    </form>

    <?php
    include('conect.php');

    $texto = isset($_POST['texto']) ? $_POST['texto'] : null;
    $texto = null;
    if (isset($_POST['texto']))
        $texto = $_POST['texto'];
    echo  $texto;


    $mysqli->query("INSERT INTO chatteste SET (default, '1', '$texto' )");
    ?>