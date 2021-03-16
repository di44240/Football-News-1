<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Football News</title>
	<link rel="icon" type="image/x-icon" href="../images/logo1.png"/>
	<link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header>
        <?php include "../includes/header.php" ?>
        
        <div id="middleHeader">
            <img src="../images/stadiumPic5.jpg" alt="headerImage"/>
            <div id="headerImageFilter"></div>
            <div id="headerImageText">
                <h2>Get informed about the best sport in the world!</h2>
            </div>
        </div>
    </header>

    <main>
        <div id="news_box">
            <a href="">
                <div class="main_box_header">
                    <h2 class="main_box_header_heading">Latest News</h2>
                    <div class="main_box_header_line"></div>
                </div>
                <div class="main_box_content">
                    <div class="news_box_content_news">
                        <img src="../images/serginoDest.jpg" alt="images"/>
                        <h3 class="box_text_heading">Barcelona's US star Sergiño Dest says it's an 'honor' to play with Lionel Messi</h3>
                        <p>Barcelona's US star Sergiño Dest says it's an 'honor' to play with Lionel Messi...</p>
                    </div>
                    <div class="news_box_content_news">
                        <img src="../images/coutinho.jpg" alt="images"/>
                        <h3 class="box_text_heading">Coutinho could face several months out as Barcelona confirm meniscus surgery</h3>
                        <p>Barcelona's playmaker Philipe Coutinho will undergo arthroscopic surgery to determine the severity of an injury to his left knee. The Brazilian...</p>
                    </div>
                    <div class="news_box_content_news">
                        <img src="../images/serginoDest.jpg" alt="images"/>
                        <h3 class="box_text_heading">Barcelona's US star Sergiño Dest says it's an 'honor' to play with Lionel Messi</h3>
                        <p>Barcelona's US star Sergiño Dest says it's an 'honor' to play with Lionel Messi...</p>
                    </div>
                </div>
            </a>
        </div>
        <div id="transfers_box">
            <a href="">
                <div class="main_box_header">
                    <h2 class="main_box_header_heading">Transfers</h2>
                    <div class="main_box_header_line"></div>
                </div>
                <div class="main_box_content">
                    <div class="news_box_content_news2">
                        <img src="../images/transferWindow.jpg" alt="images"/>
                        <h3 class="box_text_heading2">January 2021 Transfer Window: The Biggest Names to Watch and the Free Agents to be</h3>
                        <p>The new year means the opening of a new transfer window across Europe, and clubs, playes and agents alike are bracing for yet another...</p>
                    </div>
                    <div class="news_box_content_news2">
                        <img src="../images/ErlingHaaland.jpg" alt="images"/>
                        <h3 class="box_text_heading2">Real Madrid prepare a shocking galactico swap deal offer for Erling Haaland</h3>
                        <p>Real Madrid have reportedly come up with a plan to sign Erling Haaland of Borussia Dortmund. Los Blancos ready to offer the Germans an...</p>
                    </div>
                </div>
            </a>
        </div>
        <div id="contactBox">
            <h3>Have some questions?</h3>
            <a href="" class="Contact.php">Contact US</a>
        </div>
        <div id="slideshow">
            <div id="slideshow_header">
                <h2 class="slideshow_header_text">Latest Photos</h2>
                <div class="slideshow_header_line"></div>
            </div>
            <div id="slideshow_content">
                <button class="left">&lt;</button>
                <div class="slideshow_images">
                    <img id="foto1Slideshow" src="../images/slideshow1.jpg" alt=""/>
                </div>
                <div class="slideshow_images">
                    <img  id="foto2Slideshow" src="../images/slideshow2.jpg" alt=""/>
                </div>
                <div class="slideshow_images">
                    <img id="foto3Slideshow" src="../images/slideshow3.jpg" alt=""/>
                </div>
                <button class="right">&gt;</button>
            </div>
        </div>
    </main>

    <footer>
        <a href="#">© 2021 Football News</a>
    </footer>

    <script src="../js/indexJS.js"></script>

</body>
</html> 
