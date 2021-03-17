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
    <title>Football News | News</title>
    <link rel = "stylesheet" href="../css/dashboard_style2.css">
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
                <a href="dashboard.php"><span class="news"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="dashboard_create.php"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="dashboard_menu.php"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                <a href="" class="active"><span class="la-dashboard"></span>
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
           

<br><br><br><br><br>
<h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="../businessLogic/show_news.php"><b>Show all news...</b></a></h3>


        </div>
</body>
 </html>