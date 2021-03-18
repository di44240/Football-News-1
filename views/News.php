<?php require_once '../controllers/NewsController.php';
$posts = new NewsController;
$news = $posts->showGeneralNewsDescLimit20();
?>

<?php
$activePage = basename($_SERVER['PHP_SELF']);
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
<body>

        <?php include "../includes/header.php" ?>

    <main>
        <div id="news_box">
                <div class="main_box_header_news">
                    <div class="header_side_line_news"></div>
                    <div  class="header_middle_content_news">
                        <h2 class="main_box_header_heading_news">Latest News</h2>
                        <div class="main_box_header_news_line"></div>
                    </div>
                    <div class="header_side_line_news"></div>
                </div>
                <div class="main_box_content">
                    <?php foreach($news as $new): ?>
                        <a  href="index_single_news.php?posts_id=<?php echo $new['posts_id'];?>">
                            <div class="news_box_content_news_a">
                                <img src="../uploads/<?php echo $new['image']; ?>" alt="images"/>
                                <h3 class="box_text_heading"><?php echo $new['posts_title']; ?></h3>
                                <p><?php echo $new['posts_highlights']; ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
        </div>
    </main>

    <footer>
        <a href="#">© 2021 Football News</a>
    </footer>
	
</body>
</html>