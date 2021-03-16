<?php

require_once '../core/Database.php';

class UserController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM users');

        return $query->fetchAll();
    }

    public function store($request)
    {
        isset($request['roli']) ? $roli = 1 : $roli = 0;
        $password = password_hash($request['password'], PASSWORD_DEFAULT);

        $query = $this->db->pdo->prepare('INSERT INTO users (name, email, password, roli) VALUES (:name, :email, :password, :roli)');
        $query->bindParam(':name', $request['name']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':password', $password);
        $query->bindParam(':roli', $roli);
        $query->execute();

        return header('Location: ../views/index.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM users WHERE users_id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        isset($request['roli']) ? $roli = 1 : $roli = 0;

        $query = $this->db->pdo->prepare('UPDATE users SET name = :name, email = :email, roli = :roli WHERE users_id = :id');
        $query->execute([
            'name' => $request['fullName'],
            'email' => $request['email'],
            'roli' => $roli,
            'id' => $id
        ]);

        return header('Location: ../views/dashboard.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM users WHERE users_id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../views/dashboard.php');
    }
}