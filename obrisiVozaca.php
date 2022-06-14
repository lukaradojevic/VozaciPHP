 <?php

    require('DB.php');

    $SQL = "DELETE FROM vozac WHERE id=" . $_POST['P_id'];

    $DB = new DB();
    $DB->connection->query($SQL);

    ?>