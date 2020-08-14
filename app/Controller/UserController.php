<?php
include('../Model/User.php');
echo 'testtest';
class UserController {
    
    public function registerUser() {
        $required = array('nom', 'prenom', 'email', 'password', 'profil', 'age');
        $error = false;
        echo 'test';
        foreach($required as $field) {
            if(!empty($_POST[$field])) {
                $error = true;
                $userRegister = new User;
                $userRegister->add($_POST[$field]);
                echo 'test';
            } else {
                echo 'Chaque champs et obligatoire';
            }
        }
        
    }
}

$test = new UserController;
$test->registerUser();
