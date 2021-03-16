<?php

require_once '../core/Database.php';

class NewsController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id');

        return $query->fetchAll();
    }

    public function allDesc()
    {
        $query = $this->db->pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id ORDER BY posts_id desc');

        return $query->fetchAll();
    }

    public function selectSpecific($id)
    {
        $query =('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id  WHERE posts_id = :id');
        $query = $this->db->pdo->prepare($query);
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function showGeneralNewsDescLimit3()
    {
        $query = $this->db->pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id WHERE category_name="general" AND show_hide_post = 1 ORDER BY posts_id desc LIMIT 3');

        return $query->fetchAll();
    }

    public function showTrensferNewsDescLimit2()
    {
        $query = $this->db->pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id WHERE category_name="transfers" AND show_hide_post = 1 ORDER BY posts_id desc LIMIT 2');

        return $query->fetchAll();
    }

    public function showGeneralNewsDescLimit20()
    {
        $query = $this->db->pdo->query('SELECT * FROM posts inner join news_category on news_category.category_id = posts.category_id WHERE category_name="general" AND show_hide_post = 1 ORDER BY posts_id desc LIMIT 20');

        return $query->fetchAll();
    }

    public function getCategories()
    {
        $query = $this->db->pdo->query('SELECT * FROM news_category');

        return $query->fetchAll();
    }

    public function store($request)
    {
        function test_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
          $title = test_input($request['title']);
          $body = test_input($request['body']);
          $highlight = test_input($request['highlight']);
      
          $kategoria = test_input($request['kategoria']);
          $post_author = test_input($request['post_author']);
          $image_file = time() . $_FILES['image']['name'];
              $temp = $_FILES['image']['tmp_name'];
      
              move_uploaded_file($temp, "../uploads/".$image_file);
              
        $query = $this->db->pdo->prepare('INSERT INTO posts (posts_title, posts_body, image, category_id, post_author, posts_highlights) VALUES(:title, :body, :image, :kategoria, :post_author, :highlight)');
        $query->bindParam('title', $title);
        $query->bindParam('body', $body);
        $query->bindParam('image',$image_file);
        $query->bindParam('kategoria', $kategoria);
        $query->bindParam('post_author', $post_author);
        $query->bindParam(':highlight', $highlight);
        $query->execute();

        return header('Location: ../views/dashboard.php');
        
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM posts WHERE posts_id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        $query = $this->db->pdo->prepare('UPDATE posts SET posts_title = :title, posts_body = :body, posts_highlights = :highlights WHERE posts_id = :id');
        $query -> execute([
            ':title'=> $request['title'],
            ':body'=> $request['body'],
            ':highlights'=> $request['highlights'],
            ':id'=> $id
        ]);

        return header('Location: show_news.php');
    }

    public function hidePost($id)
    {
        $query = $this->db->pdo->prepare('UPDATE posts SET show_hide_post = 0 WHERE posts_id= :id');
        $query -> execute(['id'=> $id]);

        return header('Location: show_news.php');
    }

    public function showPost($id)
    {
        $query = $this->db->pdo->prepare('UPDATE posts SET show_hide_post = 1 WHERE posts_id= :id');
        $query -> execute(['id'=> $id]);

        return header('Location: show_news.php');
    }

    public function delete($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM posts WHERE posts_id = :id');
        $query->execute([':id' => $id]);

        return header('Location: show_news.php');
    }
}