<?php
require_once '../controllers/NewsController.php';

if(isset($_GET['posts_id'])){
    $id = $_GET['posts_id'];
}
$posts = new NewsController;
$newsdata = $posts->selectSpecific($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Football News | News</title>
	<link rel="icon" type="image/x-icon" href="../images/logo1.png"/>
	<link rel="stylesheet" href="../css/style.css">
	
</head>
<body style = "background:#181733; color: black; font-family: arial;">

        <?php include "../includes/header.php" ?>

    <div class = 'content' style = "padding-left: 5vw; padding-right: 5vw; background: white; width: 70%; margin-left: 10%;">
        </br></br></br></br><h2 id="index_single_news_title" style="text-align: center;"><?php echo $newsdata['posts_title'];?></h2></br></br></br>
        <img src="../uploads/<?php echo $newsdata['image'];?>" id="index_single_news_img" width="400px"/>
        <p id="index_single_news_body"><?php echo $newsdata['posts_body'];?></p></br></br></br><hr>
        <h3><b>- Posted by:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><?php echo $newsdata['post_author'];?></p></br></br></br>
    </div>

    <footer>
        <a href="#">© 2021 Football News</a>
    </footer>
	
</body>
</html>