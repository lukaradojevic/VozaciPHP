<?php


require('DB.php');

$id = $_POST['P_id'];
$imeprezime = $_POST['P_imeprezime'];
$godine = $_POST['P_godine'];
$drzava = $_POST['P_drzava'];
$titule = $_POST['P_titule'];
$tim = $_POST['P_tim'];

$DB = new DB();

$SQL = "UPDATE vozac set imeprezime='$imeprezime', godine='$godine', drzava='$drzava', titule='$titule', tim_id='$tim' where id=$id";

$DB->connection->query($SQL);
