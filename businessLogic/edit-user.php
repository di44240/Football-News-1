<?php
    require '../controllers/UserController.php';

    $user = new UserController;
    if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){

    if(isset($_GET['id'])) {
        $userId = $_GET['id'];
    }

    $currenUser = $user->edit($userId);

    if(isset($_POST['submitted'])) {
        $user->update($userId, $_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create User</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" value="<?php echo $currenUser['name']; ?>" name="fullName"><br><br>
        Email: <input type="text" value="<?php echo $currenUser['email']; ?>" name="email"><br><br>
        Admin: <input type="checkbox" <?php echo $currenUser['roli'] === '1' ? 'checked' : '' ?> name="roli"><br><br>
        <button type="submit" name="submitted">UPDATE</button>
    </form>
</body>
</html>

<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>