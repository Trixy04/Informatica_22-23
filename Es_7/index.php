<?php
session_start();


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
    <title>HOME</title>
</head>

<body style="background-color: #54aedb;">

    <center>
        <h1>Gioco del pari e dispari</h1>

        <hr style="border: 1px solid white; width: 50%;">

        <form action="pagina2.php" method="GET">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>

            <select name="scelta">
                <option value="PARI">PARI</option>
                <option value="DISPRI">DISPARI</option>
            </select>

            <button type="submit">GIOCA</button>

        </form>
    </center>


</body>

</html>