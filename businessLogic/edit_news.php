<?php
require '../controllers/NewsController.php';
session_start();
if(isset($_GET['posts_id'])){
    $id = $_GET['posts_id'];
}

$query = new NewsController;
$edit = $query->edit($id);
if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){

if(isset($_POST['submitted'])){
    $query = new NewsController;
    $update = $query->update($id,$_POST);
}

?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset = "UTF-8">
    <title>Football News | News</title>
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
                    <a href="../views/dashboard.php"><span class="la-dashboard"></span>
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

<form action="" method="post">
<h4>Ky eshte titulli i lajmit: </h4><input type="text" name="title" value="<?php echo $edit['posts_title']; ?>" style="width: 400px;"/><br><br>
<h4>Kjo eshte permbajtja i lajmit: </h4><textarea rows="14" cols="100" name="body"><?php echo $edit['posts_body']; ?></textarea><br><br>
<h4>Keto jane pikat kryesore te lajmit(highlights): </h4><input type="text" name="highlights" value="<?php echo $edit['posts_highlights']; ?>" style="width: 500px;"/><br><br>
<input type="submit" name="submitted" value="Submit">
</form>

        </div>
</body>
 </html>


<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>