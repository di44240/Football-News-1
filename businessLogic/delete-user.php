<?php
    require_once '../controllers/UserController.php';

    $user = new UserController;

    if(isset($_GET['id'])) {
        $userId = $_GET['id'];
    }

    $user->destroy($userId);
?>