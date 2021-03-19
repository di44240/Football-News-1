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
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News | Users</title>
    <link rel = "stylesheet" href="../css/dashboard_style1.css">
</head>

<body>


    <div class="sidebar">
        <div class="sidebar-brand">
        <div class="logo">
                <a href="../views/index.php"><h3>Football News</h3></a>
            </div>
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../views/dashboard.php"><span class="la-dashboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                   <a href="../views/dashboard_create.php" class="active"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="../views/dashboard_menu.php"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                    <a href="../views/dashboard_news.php"><span class="news"></span>
                    <span>News</span></a>
                </li> 
                <li>
                    <a href="../views/dashboard_contact.php"><span class="feedback"></span>
                    <span>Feedback</span></a>
                </li>
            </ul>
        </div>
    </div>

        <div class="main-content">
            <header>
                <h2>
                    <label for="">
                        <span class="las-la-bars"></span>
                    </label>
                    
                </h2>

                <div class="user-wrapper">
                    <img src="../images/wall.jpg" width="40px" height="30px" alt="">
                <div>
                    <h4> <a href="dashboard_create.php"><?php echo $_SESSION['name']; ?> </h4>
                    <small><a href=Account.php>Log out</a></small>
                </div>
                </div>
            </header>
<body>
    <br><br><br><br><br>
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