<?php 

class CreateDB {
    
    private $host = 'localhost';
    private $login = 'root';
    private $pass = 'root';

    public function create() {
        try {
            $db = new PDO('mysql:host=' . $this->host . ';', $this->login, $this->pass);

            $db->exec("CREATE DATABASE MonEcommerce");
        } catch (PDOException $e) {
            die('DB ERROR :' . $e->getMessage());
        }
    }
}
// $test = new CreateDB;
// $test->create();