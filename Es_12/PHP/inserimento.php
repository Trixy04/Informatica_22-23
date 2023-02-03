<?php
include("config.php");
$esito = "";

$titolo = $_POST["titolo"];
$regista = $_POST["regista"];
$anno = $_POST["anno"];
$genere = $_POST["genere"];
$tipologia = $_POST["tipologia"];

$sql = "INSERT INTO Video (anno, genere, regista, tipo, titolo)
VALUES ('$anno', '$genere', '$regista', '$tipologia', '$titolo')";

if (mysqli_query($conn, $sql)) {
    $esito = "Inserimento avvenuto con successo";
    header("Location: ../PAGES/nuovo.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  $conn = null;
?>