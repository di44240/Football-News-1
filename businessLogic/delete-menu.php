<?php
    require_once '../controllers/MenuController.php';

    $delete = new MenuController;

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $delete->delete($id);
    }
?>