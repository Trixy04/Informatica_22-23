<?php
session_start();
include("../PHP/config.php");
$nomeLista = "";
$nomeCandidato = "";

$idCandidato = $_POST["candidato"];

$sql = "SELECT C.id_candidato, C.nome, C.cognome, L.nome_lista FROM candidati AS C\n"

    . "JOIN liste AS L ON C.id_lista = L.id_lista\n"

    . "WHERE C.id_candidato = '$idCandidato';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $nomeLista = $row["nome_lista"];
      $nomeCandidato = $row["cognome"] . " " . $row["nome"];
    }
  } else {
    echo "0 results";
  }



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Voto elettronico</a>
            <span class="navbar-text">
                Navbar text with an inline element
            </span>
        </div>
    </nav>

    <center>
        <h1 class="mt-5">Pagina del voto elettronico</h1>
        <div class="text-exp mt-5">
            <p class="w-25">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro perspiciatis impedit minima labore debitis rerum blanditiis voluptate, ipsum repellendus, corporis dolores suscipit? Molestias itaque corporis mollitia hic tempore deleniti nobis!</p>
        </div>
    </center>

    <center>
        <h4>Riepilogo delle caselle selezionate</h4>

        <h6 class="text-danger mt-4">Nome lista: <?php echo $nomeLista ?></h6>
        <h6 class="text-danger">Nome candidato: <?php echo $nomeCandidato ?></h6>

        <button type="button" class="btn btn-primary mt-4">Conferma</button>
        <a href="../index.php"><button type="button" class="btn btn-secondary mt-4">Annulla</button></a>



    </center>
    <script src="JS/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>