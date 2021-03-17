<?php
    require_once '../controllers/MenuController.php';

    $edit = new MenuController;
    if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){

    if(isset($_GET['id'])) {
        $menuId = $_GET['id'];
    }

    $currentedit = $edit->edit($menuId);

    if(isset($_POST['update'])) {
        $edit->update($menuId, $_POST);
    }
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News  | Menu</title>
    <link rel = "stylesheet" href="../views/d/style1.css">
</head>

<body>


    <div class="sidebar">
        <div class="sidebar-brand">
        <div class="logo">
                <a href="index.php"><h3>Football News</h3></a>
            </div>
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="../views/dashboard1.php"><span class="la-dashboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                   <a href="../views/dashboard_create.php"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="../views/dashboard_menu.php"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                    <a href="../views/dashboard_news.php" class="active"><span class="news"></span>
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
                    <img src="wall.jpg" width="40px" height="30px" alt="">
                <div>
                    <h4> <a href="dashboard_create.php"><?php echo $_SESSION['name']; ?> </h4>
                    <small><a href=Account.php>Log out</a></small>
                </div>
                </div>
            </header>

    <br><br><br><br><br>
    <form action="" method="POST">
        Menu Name: <input type="text" value="<?php echo $currentedit['menu_name']; ?>" name="edited_name"><br><br>
        <button type="submit" name="update">UPDATE</button>
    </form>
</body>
</html>

<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>