<?php
class Database
{

    public $pdo;

    public function __construct()
    {
        try{
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $link = new PDO('mysql:host=localhost;dbname=bazafinale', 'root', '');
            $this->pdo = $link;
        }catch(PDOException $e) {
            die('DIE'. $e->getMessage());
        }
    }
} 