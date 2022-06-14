<?php

class DB
{
    public $host = "localhost";
    public $user = "root";
    public $pass = "";
    public $db = "vozaci";
    public $connection;

    function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
}
