<?php 

class SqlCo {

    private $host = 'localhost';
    private $login = 'root';
    private $pass = 'root';
    private $db = 'MonEcommerce';

    public function __contruct() {

    }

    public function connexion() {
        $options = array('PDO::MYSQL_ATTR_INIT_COMMAND' => 'SET NAMES utf8', PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connec = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';', $this->login, $this->pass, $options);
        return $connec;
    }
}