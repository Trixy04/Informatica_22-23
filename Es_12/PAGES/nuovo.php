<?php
include("../PHP/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>NUOVO VIDEO</title>
</head>

<body>

    <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
        </svg>
    </a>

    <center>

    <h6 class="text-success"><?php echo $esito; ?></h6>

        <h2 class="mt-5">Inserimento nuovo video</h2>
        <form class="div-form w-50" method="POST" action="../PHP/inserimento.php">


            <div class="input-group mb-3 mt-5 ">
                <span class="input-group-text" id="basic-addon1">Titolo</span>
                <input name="titolo" type="text" class="form-control" placeholder="Titolo video" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Regista</span>
                <input name="regista" type="text" class="form-control" placeholder="Nome regista" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Anno</span>
                <input name="anno" type="text" class="form-control" placeholder="Anno registrazione" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tipologia</span>
                <select class="form-select text-black" aria-label="Default select example" name="tipologia" required>
                    <option selected>- - - - - - -</option>
                    <?php
                    $sql = "SELECT tipologia FROM `Tipologia`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $tip = $row["tipologia"];
                            echo '<option name="tipologia" value="' . $tip . '">' . $tip . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Genere</span>
                <select class="form-select" aria-label="Default select example" name="genere" required>
                    <option selected>- - - - - - -</option>
                    <?php
                    $sql = "SELECT descrizione FROM `Genere`";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $gen = $row["descrizione"];
                            echo '<option name="genere" value="' . $gen . '">' . $gen . '</option>';
                        }
                    }
                    
                    $conn = null;
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Inserisci</button>

        </form>
    </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>