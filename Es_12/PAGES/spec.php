<?php
session_start();
include("../PHP/config.php");

if (!isset($_SESSION["nominativo"])) {
    header("Location: ../index.php");
}

if (isset($_GET["name"])) {
    deleteSession();
}

$film = $_GET["film"];
$sql = "SELECT * FROM `Video` WHERE titolo = '$film'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $url = '../IMAGES/' . $row["url_img"] . '.jpeg';
    $regista = $row["regista"];
    $trama = $row["trama"];
    $titolo = $row["titolo"];
    $anno = $row["anno"];
}


function deleteSession()
{
    session_start();
    session_destroy();
    header("Location: ../index.php");
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
    <title><?php echo $titolo ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg mb-5 w-100">
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
        <i>
            <h2 class="mb-5 "><?php echo $titolo ?></h2>
        </i>
        <hr class="w-50">
    </center>


    <div class="container mt-5 ">
        <div class="row">
            <div class="col">
                <h5>TITOLO FILM: </h5>
                <p><?php echo $titolo ?></p>
                <h5 class="mt-3">REGISTA:</h5>
                <p><?php echo $regista ?></p>
                <h5 class="mt-3">ANNO: </h5>
                <p><?php echo $anno ?></p>
                <h5 class="mt-3">DURATA: </h5>
                <p><?php echo $titolo ?></p>
                <h5 class="mt-3">TRAMA: </h5>
                <p class="w-75"><?php echo $trama ?></p>
                <a href='riepilogoNoleggio.php?film=<?php echo $titolo ?>' class='btn btn-primary mt-3'>Noleggia
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-cart-plus-fill' viewBox='0 0 16 16'>
                        <path d='M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z' />
                    </svg></a>

                <a href='#' class="btn btn-danger mt-3">Aggiungi ai preferiti</a>
                <br>
                <p class="mt-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <a href="noleggio.php" class="text-decoration-none ">Torna indietro</a></p>


            </div>

            <div class="col">
                <img src=<?php echo $url ?>>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>