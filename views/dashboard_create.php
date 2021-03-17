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
    <title>Football News | Users</title>
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
                    <a href="dashboard_create.php" class="active"><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href="dashboard_menu.php"><span class="menu"></span>
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
                    <h4> <a href="dashboard_create.php"> <?php echo $_SESSION['name']; ?> </h4>
                    <small><a href=Account.php>Log out</a></small>
                </div>
                </div>
            </header>

<br>
<h1>Users</h1>
    <br><br>
    <a href="Account.php">Create User</a><br><br>
    <table style="border: 3px solid black;">
        <thead style="border: 3px solid black;">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th  colspan="2">Actions</th>
            </tr>
        </thead>
        
            <?php foreach($users as $user): ?>
                <tr>
                <div class="box">
                <td><h2><?php echo $user['users_id']; ?></h2></td>
                <td><h2><?php echo $user['name']; ?></h2></td>
                <td><h3><?php echo $user['email']; ?></h3></td>
                <td><a href="../businessLogic/edit-user.php?id=<?php echo $user['users_id']; ?>">Edit</a></td>
                <td><a href="../businessLogic/delete-user.php?id=<?php echo $user['users_id']; ?>">Delete</a></td>
                </div>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

        </div>
</body>
 </html>