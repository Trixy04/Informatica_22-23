<?php
session_start();
include("../PHP/config.php");

$nomeLista = $_POST["lista"];

$sql = "SELECT C.id_candidato, C.nome, C.cognome, L.nome_lista FROM candidati AS C\n"

    . "JOIN liste AS L ON C.id_lista = L.id_lista\n"

    . "WHERE L.id_lista = '$nomeLista';";

$result = $conn->query($sql);

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
        <h4 class="mt-5">Seleziona il nome del candidato</h4>
        <form action="riepilogo.php" method="POST" name="candidato" id="selectCandidato">
            <select name="candidato" class="form-select w-25 mt-3" aria-label="Default select example">
                <option selected>- - - - - - -</option>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo '<option name="candidato" value="' . $row["id_candidato"] . '">' . $row["cognome"] . " " . $row["nome"] . '</option>';
                }
                ?>

            </select>
            <button type="submit" class="btn btn-success mt-3" onClick="nascondiSelect(selectLista)" name="selectLista">Conferma candidato</button>

        </form>

    </center>
    <script src="JS/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>