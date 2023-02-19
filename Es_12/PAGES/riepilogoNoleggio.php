<?php
session_start();
include("../PHP/config.php");

if (!isset($_SESSION["nominativo"])) {
    header("Location: ../index.php");
}

if (isset($_GET["name"])) {
    deleteSession();
}

$obj = new DateTime();
$obj->setTimezone(new DateTimeZone('Europe/Rome'));
$data = $obj->format("d-m-Y");

$film = $_GET["film"];
$id = $_SESSION["id_nominativo"];

$sql = "SELECT id, nome, cognome, email, telefono FROM `userData` WHERE id = '$id' ";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $email = $row["email"];
    $nome = $row["nome"];
    $cognome = $row["cognome"];
    $telefono = '+39' . ' ' . $row["telefono"];
}

$sql = "SELECT * FROM `tariffa`";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $tariffa = $row["price_day"];
}


$conn = null;

function deleteSession()
{
    session_start();
    session_destroy();
    header("Location: ../index.php");
}

function calcDay()
{
    echo "ciao";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <title>RIEPILOGO NOLEGGIO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="../IMAGES/Logo_Blockbuster.png" alt="Bootstrap" width="30" height="24">
            </a>
            <a class="navbar-brand" href="home.php">Blockbuster</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="dropdown-center">
                        <a class="dropdown-toggle nav-link" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION["nominativo"] ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Gestisci profilo</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item text-danger" href="home.php?name=true">Logout</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>

    <center>
        <h4 class="mt-5">Riepilogo dati noleggio</h4>
    </center>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h5 class="mt-3">COGNOME: </h5>
                <p class="w-75"><?php echo $cognome ?></p>
                <h5 class="mt-3">NOME: </h5>
                <p class="w-75"><?php echo $nome ?></p>
                <h5 class="mt-3">EMAIL: </h5>
                <p class="w-75"><?php echo $email ?></p>
                <h5 class="mt-3">CELL: </h5>
                <p class="w-75"><?php echo $telefono ?></p>
                <h5 class="mt-3">TITOLO FILM: </h5>
                <p class="w-75"><?php echo $film ?></p>
                <h5 class="mt-3">GIORNI NOLEGGIO: </h5>

                <div class="mb-3">
                    <form action="">
                        <input type="number" class="form-control w-25" id="day" aria-describedby="emailHelp" placeholder="day" required>
                        <button onclick="recallFunction()" type="" class="btn btn-primary mt-2">Calcola</button>
                    </form>
                </div>

                <script>
                    function recallFunction() {
                        var day = document.getElementById('day').value;
                        var result ="<?php calcDay(); ?>"
                </script>

            </div>
            <div class="col">
                <div class="price w-65 m-auto">
                    <center>
                        <h6 class="mb-3">RIEPILOGO</h6>
                    </center>
                    <i>
                        <p class="">Data inizio noleggio:
                    </i> <?php echo $data ?></p>
                    <i>
                        <p>Data restituzione noleggio:
                    </i> <span id="scadenza"></span></p>
                    <i>
                        <p>Prezzo per giorno:
                    </i> <?php echo $tariffa . ' ' . '€' ?></p>
                    <hr>
                    <i>
                        <p>TOTALE:
                    </i> <span id="totale"></span></p>
                </div>

                <center>
                    <button type="button" class="btn btn-success mt-5">Conferma noleggio</button>
                </center>
            </div>
        </div>
    </div>

    <script src="../JS/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>