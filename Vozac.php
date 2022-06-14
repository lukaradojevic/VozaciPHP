<?php

class Vozac
{
    public $id;
    public $imeprezime;
    public $godine;
    public $drzava;
    public $titule;
    public $tim_id;


    public function getVozac($idVozac)
    {
        require('DB.php');
        $DB = new DB();

        $SQL = "SELECT * FROM vozac WHERE id=" . $idVozac;

        $DATA = $DB->connection->query($SQL);
        $VOZAC = mysqli_fetch_array($DATA);

        return $VOZAC;
    }
}
