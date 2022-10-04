<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>HOME</title>
</head>

<body>

    <center>
        <h1>Inserisci l'unita espressa in km per convertirla in miglia</h1>
        <form method="post" action="converti.php">
            <div class="row g-3 align-items-center mt-5 m-auto">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Inserisci valore:</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="val" class="form-control">
                </div>
                <div class="col-auto">
                    <span id="passwordHelpInline" class="form-text">
                        Esprimi il valore in km
                    </span>
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-success" name="invia">
                </div>
            </div>
        </form>
    </center>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>