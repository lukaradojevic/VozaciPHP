 <?php

    require('DB.php');

    $imeprezime = $_POST['P_imeprezime'];
    $godine = $_POST['P_godine'];
    $drzava = $_POST['P_drzava'];
    $titule = $_POST['P_titule'];
    $tim = $_POST['P_tim'];

    $SQL = "INSERT INTO vozac (imeprezime, godine, drzava, titule, tim_id) 
    VALUES ('$imeprezime', '$godine', '$drzava', '$titule', '$tim')";

    $DB = new DB();
    $DB->connection->query($SQL);

    ?>