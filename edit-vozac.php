<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vozači - PHP domaći</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>

<body>

    <div>

        <h1 id="edit-vozac-naslov">Forma za izmenu vozača</h1>

        <div class="forma-add-vozac">

            <?php

            require('Vozac.php');

            $vozac = new Vozac();

            $vozacEdit = $vozac->getVozac($_GET['ID']);

            ?>

            <div class="element">
                <label>Ime i prezime:</label>
                <input type="text" class="form-control" id="imeprezime" value="<?php echo $vozacEdit['imeprezime']; ?>">
            </div>

            <div class="element">
                <label>Godine: </label>
                <input type="number" class="form-control" id="godine" value="<?php echo $vozacEdit['godine']; ?>">
            </div>

            <div class="element">
                <label>Država: </label>
                <input type="text" class="form-control" id="drzava" value="<?php echo $vozacEdit['drzava']; ?>">
            </div>

            <div class="element">
                <label>Titule: </label>
                <input type="number" class="form-control" id="titule" value="<?php echo $vozacEdit['titule']; ?>">
            </div>

            <div class="element">
                <label>Tim: </label>
                <select class="form-select" id="tim" value="<?php echo $vozacEdit['tim_id']; ?>">
                    <?php

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

            <button type="button" id="button-novi-vozac" class="btn btn-danger">Sačuvaj izmene</button>

        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
</body>

</html>