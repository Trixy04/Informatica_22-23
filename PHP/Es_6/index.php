<?php
session_start();
$_SESSION["colori"] = array();


function clickSpunta(){
echo "ciao";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <center>
        <h1>Benvenuto al gioco del "Master Mind"</h1>
        <button id="bottone" onclick="avviaGioco()" class="mt-5 btn btn-success">Gioca</button>

        <table border="1px" id="table" style="display: none;" class="mt-5">
            <tr>
                <td id="td1"  onclick="cellaUno()">
                    <h3 id="inter1" class="p-3">?</h3>
                    <img id="rosso1" style="display: none;" src="Images/rosso.gif">
                    <img id="verde1" style="display: none;" src="Images/verde.gif">
                    <img id="giallo1" style="display: none;" src="Images/giallo.gif">
                    <img id="blu1" style="display: none;" src="Images/blu.gif">
                </td>
                <td id="td2"  onclick="cellaDue()">
                    <h3 id="inter2" class="p-3">?</h3>
                    <img id="rosso2" style="display: none;" src="Images/rosso.gif">
                    <img id="verde2" style="display: none;" src="Images/verde.gif">
                    <img id="giallo2" style="display: none;" src="Images/giallo.gif">
                    <img id="blu2" style="display: none;" src="Images/blu.gif">
                </td>
                <td id="td3"  onclick="cellaTre()">
                    <h3 id="inter3" class="p-3">?</h3>
                    <img id="rosso3" style="display: none;" src="Images/rosso.gif">
                    <img id="verde3" style="display: none;" src="Images/verde.gif">
                    <img id="giallo3" style="display: none;" src="Images/giallo.gif">
                    <img id="blu3" style="display: none;" src="Images/blu.gif">
                </td>
                <td id="td4"  onclick="cellaQuattro()">
                    <h3 id="inter4" class="p-3">?</h3>
                    <img id="rosso4" style="display: none;" src="Images/rosso.gif">
                    <img id="verde4" style="display: none;" src="Images/verde.gif">
                    <img id="giallo4" style="display: none;" src="Images/giallo.gif">
                    <img id="blu4" style="display: none;" src="Images/blu.gif">
                </td>
                <td>
                    <button type="submit" name="sub"><img src="Images/spunta.gif"></button>
                </td>
            </tr>
        </table>
    </center>

    <table border="1px" id="table-scelta" class="mt-5" style="display: none">
        <tr onclick="clickRosso()">
            <td>
                <img id="rosso" src="Images/rosso.gif">
            </td>
        </tr>
        <tr onclick="clickBlu()">
            <td>
                <img id="blu" src="Images/blu.gif">
            </td>
        </tr>
        <tr onclick="clickGiallo()">
            <td>
            <img id="giallo" src="Images/giallo.gif">
            </td>
        </tr>
        <tr onclick="clickVerde()">
            <td>
            <img id="verde" src="Images/verde.gif">
            </td>
        </tr>
    </table>



    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
</body>

</html>