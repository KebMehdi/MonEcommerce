<?php

include('../database/Connection.php');

class User {
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $profil;
    private $age;

    private $bdd;

    public function __construct() {
        $this->bdd = new SqlCo;
        $this->bdd = $this->bdd->connexion();
    }

    public function add ($nom, $prenom, $email, $password, $profil, $age) {
        $query = "INSERT INTO Users (*) VALUES ('$nom','$prenom','$email','$password','$profil','$age')";
        $req = $this->bdd->prepare($query);
        $req->execute();
    }
}