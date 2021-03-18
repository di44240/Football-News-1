<?php
require_once '../controllers/NewsController.php';

$posts = new NewsController;
$newsdata = $posts->allDesc();
?>

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
                    <a href="../views/dashboard_menu.php"><span class="menu"></span>
                    <span>Menu</span></a>
                </li> 
                <li>
                <a href="" class="active"><span class="news"></span>
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
           <br>
<?php if(isset($_SESSION['name'])): ?>
</br></br><a style="border: 2px solid black;padding: 10px;background:green;color: white;text-decoration:none;" href="add_news.php"> Add news</a></br></br></br>
<div class="news">
<?php foreach($newsdata as $news):?>
<hr>
<div class="news-box">
<a href=""><h2>Titulli: <?php echo $news['posts_title']; ?></h2></a>
<p><?php echo $news['posts_highlights']; ?></p>
<img src="../uploads/<?php echo $news['image']; ?>" width="400" />
<h4>Post category:  <?php echo $news['category_name']; ?></h4>
</div>
<a href="single_news.php?posts_id=<?php echo $news['posts_id']; ?>">More</a></br></br>
</br><a href="delete_news.php?posts_id=<?php echo $news['posts_id']; ?>" style="border: 2px solid black;padding: 10px;background:red;color: white;text-decoration:none;">Delete this post</a></br></br></br></br>
<?php
if($news['show_hide_post']==1){
?>
<a href="hide_post.php?posts_id=<?php echo $news['posts_id']; ?>" style="border: 2px solid black;padding: 10px;background:blue;color: white;text-decoration:none;">Hide</a></br></br>
<?php
}
?>
<?php
if($news['show_hide_post']==0){
?>
<a href="unhide_post.php?posts_id=<?php echo $news['posts_id']; ?>" style="border: 2px solid black;padding: 10px;background:green;color: white;text-decoration:none;">Show</a></br></br>
<?php
}
?>
<?php endforeach; ?>
</div>

<?php else: ?>
        <li><a href="../views/Account.php">Login</a></li>
        <li><a href="../views/Account.php">Signup</a></li>
<?php endif; ?>

        </div>
</body>
 </html>