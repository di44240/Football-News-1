<?php

include '../core/Database.php';

class AuthController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function login($request)
    {
        $query = $this->db->pdo->prepare('SELECT users_id,name,email,password,roli FROM users WHERE email = :email');
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();

        if(count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['users_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['roli'] = $user['roli'];
            if($user['roli']==0){
                header("Location: ../views/index.php");
            }
            else if($user['roli']==1){
                header("Location: ../views/dashboard.php");
            }
        }
        else{
            echo "Te dhenat e shenuara jane gabim!";
        }
    }
} 