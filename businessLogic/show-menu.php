<?php
    require_once '../controllers/MenuController.php';

    $menu = new MenuController;
    $menus = $menu->all();
?>
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
                   <a href="../views/dashboard_create.php"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="../views/dashboard_menu.php" class="active"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                    <a href="../views/dashboard_news.php" ><span class="news"></span>
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
    <style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 7px;
        }
    </style>
</head>
<body>
    <?php if(isset($_SESSION['name'])): ?>
 
        <br>
    <h1>Menu List</h1>
    <br><br><br><br>
    <table style="border: 3px solid black;">
        <thead style="border: 3px solid black;">
            <tr>
                <th>ID</th>
                <th>Menu Name</th>
                <th  colspan="2">Actions</th>
            </tr>
        </thead>
        
            <?php foreach($menus as $menu): ?>
                <tr>
                <div class="box">
                <td><h2><?php echo $menu['menu_id']; ?></h2></td>
                <td><h2><?php echo $menu['menu_name']; ?></h2></td>
                <td><a href="edit-menu.php?id=<?php echo $menu['menu_id']; ?>">Edit</a></td>
                <td><a href="delete-menu.php?id=<?php echo $menu['menu_id']; ?>">Delete</a></td>
                </div>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </br></br>
    <h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="add_menu.php"><b>Add a menu</b></a></h3>
    </br></br>
</body>
</html>

<?php else: ?>
        <li><a href="../views/Account.php">Login</a></li>
        <li><a href="../views/Account.php">Signup</a></li>
    <?php endif; ?>