<?php
    require_once '../controllers/UserController.php';

    $user = new UserController;
    $users = $user->all();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
        <h2>Welcome, <a href="#"><?php echo $_SESSION['name']; ?></a></h2><br>
        <li><a href="index.php">Go to Home page</a></li><br>
        <li><a href="../businessLogic/logout.php">Log out</a></li>
    </br></br><hr><br><br>
    <h1>Users</h1>
    <a href="../views/Account.php">Create User</a><br><br>
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
    </br></br><hr>
    <h1>News</h1>
    <h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="../businessLogic/show_news.php"><b>Show all news...</b></a></h3>
    </br></br><hr>
    <h1>Contacts</h1>
    <h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="../businessLogic/show_contacts.php"><b>Show all contacts...</b></a></h3>
    </br></br><hr>
    <h1>Menu</h1>
    <h3><a style="border: 2px solid black;padding: 7px;color: green;text-decoration:none;" href="../businessLogic/show-menu.php"><b>Show menu list...</b></a></h3>
    </br></br>
</body>
</html>




<?php else: ?>
        <li><a href="Account.php">Login</a></li>
        <li><a href="Account.php">Signup</a></li>
    <?php endif; ?>