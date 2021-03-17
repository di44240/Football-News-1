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

<form action="" method="post">
<h4>Ky eshte titulli i lajmit: </h4><input type="text" name="title" value="<?php echo $edit['posts_title']; ?>" style="width: 400px;"/><br><br>
<h4>Kjo eshte permbajtja i lajmit: </h4><textarea rows="14" cols="100" name="body"><?php echo $edit['posts_body']; ?></textarea><br><br>
<h4>Keto jane pikat kryesore te lajmit(highlights): </h4><input type="text" name="highlights" value="<?php echo $edit['posts_highlights']; ?>" style="width: 500px;"/><br><br>
<input type="submit" name="submitted" value="Submit">
</form>

<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>