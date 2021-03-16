<?php

require_once '../core/Database.php';

class ContactController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM contact_form');

        return $query->fetchAll();
    }

    public function allDesc()
    {
        $query = $this->db->pdo->query('SELECT * FROM contact_form ORDER BY id desc');

        return $query->fetchAll();
    }

    public function store($request)
    {

        $query = $this->db->pdo->prepare('INSERT INTO contact_form (firstname, lastname, email, reason, mesazhi) VALUES (:firstname, :lastname, :email, :reason, :mesazhi)');
        $query->bindParam(':firstname', $request['firstname']);
        $query->bindParam(':lastname', $request['lastname']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':reason', $request['reason']);
        $query->bindParam(':mesazhi', $request['mesazhi']);
        $query->execute();

        return header('Location: ../views/index.php');
    }

    public function destroy($email)
    {
        $query = $this->db->pdo->prepare('DELETE FROM contact_form WHERE email = :email');
        $query->execute(['email' => $email]);

        return header('Location: ../views/dashboard.php');
    }
}
