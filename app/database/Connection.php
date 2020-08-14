<?php 

class SqlCo {

    private $host = 'localhost';
    private $login = 'root';
    private $pass = 'root';
    private $db = 'MonEcommerce';

    public function __contruct() {

    }

    public function connexion() {
        $connec = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';', $this->login, $this->pass, $pdoOptions);
        return $connec;
    }
}