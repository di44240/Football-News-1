<?php
    require '../controllers/AuthController.php';

    $user = new AuthController;

    if(isset($_POST['login-submit'])) {
        $user->login($_POST);
    }
?> 