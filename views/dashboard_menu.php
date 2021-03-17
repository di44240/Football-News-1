<?php
    require_once '../controllers/UserController.php';

    $user = new UserController;
    $users = $user->all();
?>
<!DOCTYPE html>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News | Menu</title>
    <link rel = "stylesheet" href="../css/dashboard_style1.css">
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
                    <a href="dashboard.php"><span class="la-dashboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="dashboard_create.php"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="dashboard_menu.php" class="active"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                    <a href="dashboard_news.php"><span class="news"></span>
                    <span>News</span></a>
                </li> 
                <li>
                    <a href="dashboard_contact.php"><span class="feedback"></span>
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
<br>
 <h1>Menu</h1>
 <br><br><br>
    <h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="../businessLogic/show-menu.php"><b>Show menu list...</b></a></h3>
    </br></br>

        </div>
</body>
 </html>