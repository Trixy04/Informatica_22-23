<?php
$tabella = "";
$num = 100;
$media;
$somma = 0;
$imax = 0;

for ($i = 0; $i < $num; $i++) {

  if ($i % 3 == 0) {
    $tabella .= "<tr><td>$i</td></tr>";
    $somma = $somma + $i;
    $imax++;
  }
}

$media = $somma / $imax;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>HOME</title>
</head>

<body>

  <center>
    <h1>Tabella dei numeri da 0 a 100 divisibili per 3</h1>


    <div class="container">
      <div class="row align-items-start m-auto">
        <div class="col-6">
          <center>
            <table class="table table-success table-striped text-center mt-5">
              <thead>
                <tr>
                  <th scope="col">Numero divisibile per 3</th>
                </tr>
              </thead>
              <tbody>
                <?php echo $tabella; ?>
              </tbody>
            </table>
          </center>
        </div>
        <div class="col-6 mt-5">
          <div class="bg-primary">
            <h5 class="text-warning">Media dei numeri - - ></h5>
            <span class="bg-warning"><?php echo $media; ?></span>
          </div>
          <div class="bg-primary mt-5">
            <h5 class="text-warning">I numeri in totale sono - - ></h5>
            <span class="bg-warning"><?php echo $imax; ?></span>
          </div>
        </div>
      </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>