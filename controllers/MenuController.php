<?php

require_once '../core/Database.php';

class MenuController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM menu');

        return $query->fetchAll();
    }

    public function store($request)
    {
        $query = $this->db->pdo->prepare('INSERT INTO menu (menu_name) VALUES (:name)');
        $query->bindParam(':name', $request['name']);
        $query->execute();

        return header('Location: ./show-menu.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM menu WHERE menu_id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE menu SET menu_name = :name WHERE menu_id = :id');
        $query->execute([
            ':name' => $request['edited_name'],
            ':id' => $id
        ]);

        return header('Location: ./show-menu.php');
    }

    public function delete($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM menu WHERE menu_id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ../views/dashboard.php');
    }
}