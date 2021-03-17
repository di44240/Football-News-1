<?php
require '../controllers/ContactController.php';

$query = new ContactController;
$contacts = $query->allDesc();
if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News</title>
    <link rel = "stylesheet" href="../css/dashboard_style1.css">
</head>

<body>


    <div class="sidebar">
        <div class="sidebar-brand">
        <div class="logo">
                <a href="#"><h3>Football News</h3></a>
            </div>
        </div>
    
        <div class="sidebar-menu">
            <ul>
                <li>
                <a href=""><span class="dashboard"></span>
                    <span>Dashboard</span></a>
                </li>
                <li>
                   
                    <a href=""><span class="users"></span>
                    <span>Users</span></a>
                </li>
                <li>
                    <a href=""><span class="feedback"></span>
                    <span>News</span></a>
                </li> 
                <li>
                    <a href="" class="active"><span class="la-news"></span>
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

<br><br><br><br><br>

<style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
</style>
<div class="contact">
<table style="border: 3px solid black;">
        <thead style="border: 3px solid black;">
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Reason</th>
                <th>Mesazhi</th>
                <th>Actions</th>
            </tr>
        </thead>
        
            <?php foreach($contacts as $contact): ?>
                <tr>
                <div class="box">
                <td><h2><?php echo $contact['id']; ?></h2></td>
                <td><b><?php echo $contact['firstname']; ?></b></td>
                <td><b><?php echo $contact['lastname']; ?></b></td>
                <td><b><?php echo $contact['email']; ?></b></td>
                <td><h3><?php echo $contact['reason']; ?></h3></td>
                <td><h3><?php echo $contact['mesazhi']; ?></h3></td>
                <td><a href="delete_contact.php?id=<?php echo $contact['id']; ?>">Delete</a></td>
                </div>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br><br>
    <div class="tablet">
    <br></br><a style="border: 2px solid black;padding: 10px;background:aqua;color: black;text-decoration:none;" href="../views/dashboard.php">Back</a></br></br></br>
    </div>
<br><br><br>
</div>
<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>

        </div>
</body>
 </html>