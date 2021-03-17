<?php
require '../controllers/NewsController.php';

if(isset($_GET['posts_id'])){
    $id = $_GET['posts_id'];
}

$query = new NewsController;
$delete = $query->delete($id);
?>