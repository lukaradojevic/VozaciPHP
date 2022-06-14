<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vozaci - PHP domaći</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div>

        <h1 id="novi-vozac-naslov">Forma za dodavanje novog vozača</h1>

        <div class="forma-add-vozac">

            <div class="element">
                <label>Ime i prezime:</label>
                <input type="text" class="form-control" id="imeprezime">
            </div>

            <div class="element">
                <label>Godine: </label>
                <input type="number" class="form-control" id="godine">
            </div>

            <div class="element">
                <label>Država: </label>
                <input type="text" class="form-control" id="drzava">
            </div>

            <div class="element">
                <label>Titule: </label>
                <input type="number" class="form-control" id="titule">
            </div>

            <div class="element">
                <label>Tim: </label>
                <select class="form-select" id="tim">
                    <?php

                    require('DB.php');

                    $DB = new DB();

                    $SQL = "SELECT * FROM tim";
                    $DATA = $DB->connection->query($SQL);

                    while ($tim = mysqli_fetch_array($DATA)) {
                    ?>
                        <option value="<?php echo $tim['id']; ?>">
                            <?php echo $tim['naziv'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <button type="button" id="button-novi-vozac" class="btn btn-danger">Dodaj vozača</button>

        </div>


    </div>


</body>

</html>