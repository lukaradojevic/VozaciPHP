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

        <h2 id="naslov-vozaci">Vozači - Timovi</h2>

        <div class="tabela-div">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Ime i prezime</th>
                        <th>Godine</th>
                        <th>Država</th>
                        <th>Titule</th>
                        <th>Tim</th>
                        <th>Sajt</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    require('DB.php');

                    $DB = new DB();
                    $SQL = "SELECT vozac.id, vozac.imeprezime, vozac.godine, vozac.drzava, vozac.titule, tim.naziv, tim.sajt FROM vozac JOIN tim ON vozac.tim_id=tim.id";
                    $DATA = $DB->connection->query($SQL);

                    while ($VOZAC = mysqli_fetch_array($DATA)) {
                    ?>
                        <tr>
                            <td><?php echo $VOZAC['imeprezime'] ?></td>
                            <td><?php echo $VOZAC['godine'] ?></td>
                            <td><?php echo $VOZAC['drzava'] ?></td>
                            <td><?php echo $VOZAC['titule'] ?></td>
                            <td><?php echo $VOZAC['naziv'] ?></td>
                            <td><?php echo $VOZAC['sajt'] ?></td>
                            <td><button type="button" class="btn btn-danger" id="dugme-brisanje" value="<?php echo $VOZAC['id']; ?>">Obriši</button></td>
                            <td><a href="edit-vozac.php?ID=<?php echo $VOZAC['id']; ?>"><button type="button" class="btn btn-info" id="dugme-izmena">Izmena</button></a></td>

                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>





    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
</body>

</html>