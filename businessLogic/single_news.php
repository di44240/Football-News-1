<?php
require_once '../controllers/NewsController.php';

if(isset($_GET['posts_id'])){
    $id = $_GET['posts_id'];
}
$posts = new NewsController;
$newsdata = $posts->selectSpecific($id);

if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
?>

</br><h2 style="text-align: center;"><?php echo $newsdata['posts_title'];?></h2></br></br></br>
<img src="../uploads/<?php echo $newsdata['image'];?>" width="400px" style="padding-left: 10vw;"/>
<p style="padding-left: 10vw;padding-right: 10vw;"><?php echo $newsdata['posts_body'];?></p></br></br></br><hr>
<p style="padding-left: 10vw;padding-right: 10vw;"><b>-This is the highlight content of this post:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><?php echo $newsdata['posts_highlights'];?></h3></br></br></br>
<h3 style="padding-left: 10vw;padding-right: 10vw;"><b>-Posted by:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><?php echo $newsdata['post_author'];?></p></br></br></br>
<a href="edit_news.php?posts_id=<?php echo $newsdata['posts_id']; ?>" style="border: 2px solid black;margin-left:10vw;padding: 10px;background:green;color: white;text-decoration:none;">Edit this post</a></br></br></br></br>

<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>