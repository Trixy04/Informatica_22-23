<?php
include("../PHP/config.php");

if (isset($_GET["gen"])) {
    $gen = $_GET["genere"];
    $sql = "SELECT * FROM `Video` WHERE genere = $gen";
    $result = $conn->query($sql);

    $tabella = "";

    while ($row = $result->fetch_assoc()) {
        $tabella .= "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["titolo"] . "</td>
    <td>" . $row["regista"] . "</td>
    <td> " . $row["anno"] . "</td>
    <td> " . $row["tipo"] . "</td>
    <td> " . $row["genere"] . "</td>
    </tr>";
    }
}else{
    $sql = "SELECT * FROM `Video`";
    $result = $conn->query($sql);
    $tabella = "";

    while ($row = $result->fetch_assoc()) {
        $tabella .= "<tr>
    <td>" . $row["id"] . "</td>
    <td>" . $row["titolo"] . "</td>
    <td>" . $row["regista"] . "</td>
    <td> " . $row["anno"] . "</td>
    <td> " . $row["tipo"] . "</td>
    <td> " . $row["genere"] . "</td>
    </tr>";
    }
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
    <link rel="stylesheet" href="../CSS/style.css" type="text/css">
    <title>Title</title>
</head>

<body>


    <a href="../index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
        </svg>
    </a>
    <center>
        <h1 class="mt-5">Lista video</h1>
        <p>Clicca sul genere per visualizzare la tabella con i film</p>
        <form action="" method="GET">
        <select class="form-select text-black w-25" aria-label="Default select example" name="genere">
            <option value="">Tutti</option>
            <?php
            $sql = "SELECT descrizione FROM `Genere`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $tip = $row["descrizione"];
                    echo '<option name="genere" value="' . $tip . '">' . $tip . '</option>';
                }
            }
            $conn = null;
            ?>
            
        </select>
        <button type="submit" class="btn btn-primary mt-3" name="gen">Filtra</button>

        </form>

        <table class="table table-striped mt-5 w-75">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Regista</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Genere</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tabella; ?>
            </tbody>
        </table>



    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>