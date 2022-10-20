<?php 

$scrutinio = array();
$alunniIns = 0;
$contaMaterie = 0;
$tabella = "";

array_push($scrutinio, $tabella);
        echo "<pre>";
        print_r($scrutinio);
        echo "</pre>";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>

<body>

<?php
function inserisci(){
    $mat1 = "";
    $mat2 = "";
    $mat3 = "";
    $mat4 = "";
    $mat5 = "";
    global $alunniIns;
    global $contaMaterie;
    global $tabella;
    global $scrutinio;
    

        $cognome = $_POST["cognome"];
        $nome = $_POST["nome"];
        $genere = $_POST ['gender'];
        $alunniIns++;
    
        if(!empty($_POST["mat11"])){
            $mat1 = $_POST ['mat11'];
            $contaMaterie++;
        }
    
        if(!empty($_POST["mat22"])){
            $mat2 = $_POST ['mat22'];
            $contaMaterie++;
        }
    
        if(!empty($_POST["mat33"])){
            $mat3 = $_POST ['mat33'];
            $contaMaterie++;
        }
    
        if(!empty($_POST["mat44"])){
            $mat4 = $_POST ['mat44'];
            $contaMaterie++;
        }
    
        if(!empty($_POST["mat55"])){
            $mat5 = $_POST ['mat55'];
            $contaMaterie++;
        }
    
        $tabella.= "<tr>
        <td>$cognome</td>
        <td>$nome</td>
        <td>$genere</td>
        <td>$contaMaterie</td>
        </tr>";
    
        array_push($scrutinio, $tabella);
        echo "<pre>";
        print_r($scrutinio);
        echo "</pre>";
    
    
}

function printt(){
    echo "Ciao";
}

?>


    <center>
        <h1>Benvenuto nella pagina degli scrutini</h1>
        <h6 class="mt-5">Tot. alunni inseriti: <?php echo $alunniIns; ?></h6>
    </center>


    <center>
        <button type="button" class="btn btn-primary btn-lg mt-5" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Inserisci risultati alunno</button>
        <button type="button" class="btn btn-success btn-lg mt-5">Termina scrutinio</button>
    </center>

    <center>
    <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th scope="col">Cognome</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Num.</th>
                </tr>
            </thead>
            <tbody>
                <?php echo $tabella; ?>
            </tbody>
        </table>
    </center>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserisci risultati alunno</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="printt()" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Cognome</label>
                            <input type="text" class="form-control" name="cognome" id="formGroupExampleInput"
                                placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Nome</label>
                            <input type="text" class="form-control" name="nome" id="formGroupExampleInput"
                                placeholder="" required>
                        </div>
                        <div class="mb-0">
                            <p>Genere</p>
                        </div>
                        <div class="form-check" style="margin-left: 4%;">
                            <input class="form-check-input" type="radio" name="gender" value="Femmina" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Femmina
                            </label>
                        </div>
                        <div class="form-check" style="margin-left: 4%;">
                            <input class="form-check-input" type="radio" name="gender" value="Maschio" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Maschio
                            </label>
                        </div>
                        <div class="mt-4">
                            <p>Debiti</p>
                        </div>
                        <div class="form-check form-check-inline" style="margin-left: 4%;">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="mat11" value="Italiano">
                            <label class="form-check-label" for="inlineCheckbox1">ITA</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mat22" value="Storia">
                            <label class="form-check-label" for="inlineCheckbox2">STO</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mat33" value="Inglese">
                            <label class="form-check-label" for="inlineCheckbox2">ING</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="mat44" value="Informatica">
                            <label class="form-check-label" for="inlineCheckbox2">INF</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="mat55" value="Telecomunicazioni">
                            <label class="form-check-label" for="inlineCheckbox2">TEL</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annulla</button>
                        <button type="submit" class="btn btn-success" onclick="">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>

