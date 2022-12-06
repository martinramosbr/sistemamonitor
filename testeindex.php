<style>
    body {
        overflow: hidden;
    }

    .chatopen {
        position: relative;
        background-color: white;
        width: 20%;
        height: 746px;
        left: 80%;
        top: 0;
        box-shadow: 1px 1px 4px 0px;
        overflow: scroll;
        visibility: visible;
        z-index: 980;

    }

    .headerchat {
        position: relative;
        background-color: rgb(224, 223, 223);
        width: 100%;
        height: 50px;
        display: flex;
        column-gap: 50px;
        color: #1572a1;
        border-style: solid;
        border-width: 1px;
        border-color: #1572a1;

    }

    .titulochat {
        position: relative;
        top: -23px;
        font-weight: 300;
        text-decoration: underline;
        FONT-SIZE: 29px;
        left: 60px;

    }

    .digitar {
        width: 470px;
        position: relative;
        top: 600px;
    }

    .enviar {
        width: 22%;
        height: 37px;
    }

    .msg {
        width: 38%;
        height: 35px;
    }

    .chat {
        position: absolute;
        z-index: 999999;
        background-color: red;
        width: 100%;
        height: 400px;
        color: #fff;
        visibility: hidden;
    }
</style>
<div class="chatopen">
    <div class="headerchat">
        <section class="chataberto" id="chataberto" type="none">
            <div class="btnfechar">
                <i class="bx-home">
                    <i class='bx bx-chevron-right' style='color:#1572a1'></i>
                    <h1 class="titulochat">CHAT</h1>
                </i>
                <div class="chat">

                </div>
                <form method="post" action="index.php" class="digitar">
                    <input class="msg" type="text" name="texto" placeholder="mensagem">
                    <input class="enviar" type="submit" value="Enviar">

                </form>

            </div>
        </section>
    </div>

    <?php


    require('conect.php');
    $sessione = "Fonecedor";
    $texto = isset($_POST['texto']) ? $_POST['texto'] : null;
    $texto = null;
    if (isset($_POST['texto']))
        $texto = $_POST['texto'];


    if ($texto != NULL) {
        $query = mysqli_query($conn, "INSERT INTO chat values(default,'3','$texto')");
    }

    if ($sessione != NULL) {
        $sql = mysqli_query($conn, "SELECT * FROM chat");
    }

    while ($row = mysqli_fetch_array($sql)) {
        echo "Fornecedor $row[1]: $row[2]<br>";
    }

    ?>