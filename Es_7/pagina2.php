<?php
session_start();

if(empty($_SESSION)){
    $_SESSION["nome"] = $_GET["nome"];
    $_SESSION["scelta"] = $_GET["scelta"];
    $_SESSION["turno"] = 0;
}




function turnoA()
{
    if($_SESSION["turno"] == 5){
        $_SESSION["turno"] = 0;
    }
    $_SESSION["turno"] = $_SESSION["turno"] + 1;
    echo $_SESSION["turno"];
}


function gioca(){
echo "ciao";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA 2</title>
</head>

<body>

    <body style="background-color: #54aedb;">

        <center>
            <h1>Gioco del pari e dispari</h1>

            <hr style="border: 1px solid white; width: 50%; margin-bottom: 5%;">

            <label for="" >Nome Giocatore: <?php echo $_SESSION["nome"]; ?></label><br><br>
            <label for="">Scelta Giocatore: <?php echo $_SESSION["scelta"]; ?></label><br><br>
            <label for="">N. Turno: <?php turnoA(); ?></label><br><br>

            <form action="pagina2.php" method="GET">

            <label for="">Scegli quanto giocare: </label>
            <select name="numero">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select> <br><br>

            <button type="submit">GIOCA</button>

            </form>




        </center>


    </body>

</body>

</html>