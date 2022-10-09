<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num = $_POST['val'];

    if (empty($num)) {
      echo "Il campo è vuoto";
    } else {
        if($num == $valore){
            echo "HAI VINTO";
        }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME - Indovina Numero</title>
</head>

<body>

    <center>
        <h1 class="">Benvenuto nel gioco del "Indovina Numero"</h1>
    </center>
    <center>
        <p class="w-50"><span style="font-weight: bold;">Regole del gioco:</span> Si deve indovinare nel minor numero di tentativi un numero compreso tra 0 e 99
            estratto casualmente dal sistema.</p>
    </center>
    <center>
        <form method="POST">
            <div class="mb-3 w-50">
                <label for="exampleInputEmail1" class="form-label">Inserisci un numero</label>
                <input type="number" name= "val" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Vediamo se sei così fortunato come pensi.</div>
                <?php echo $valore = rand(0, 99); ?>
            </div>
            <button type="submit" class="btn btn-success">Tenta</button>
        </form>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>