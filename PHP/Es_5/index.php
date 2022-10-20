<?php
require("funzioni.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $x = $_POST['varA'];

    $y = $_POST['varB'];

    $risultato = somma($x, $y);

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

<body>
    <h1>Somma Numeri</h1>

    <form method="POST">
        <input type="number" name="varA" placeholder="Varibaile 1">
        <input type="number" name="varB" placeholder="Variabile 2">
        <button type="submit">Submit</button>
    </form>

    <p>Risultato della somma: <?php echo $x; ?> + <?php echo $y; ?> = <?php echo $risultato; ?></p>





</body>

</html>