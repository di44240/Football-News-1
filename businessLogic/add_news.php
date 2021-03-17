<script>
function validateForm(){
  var x = document.forms["myForm"]["body"].value;
  var y = document.forms["myForm"]["highlight"].value;
  var z = document.forms["myForm"]["title"].value;
  if(x == ""){
    alert("Duhet ta plotesoni permbajtjen!");
    return false;
  }
  if(y == ""){
    alert("Patjeter duhet te plotesohet pjesa e highlight!");
    return false;
  }
  if(z == ""){
    alert("Patjeter duhet te plotesohet pjesa e titullit!");
    return false;
  }
}

</script>

<?php 
session_start();

if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
  require '../controllers/NewsController.php';

  $query = new NewsController;
  $categoryinfo = $query->getCategories();
?>

<?php

  $titleERR = "";

  if(isset($_POST['submit']) && !function_exists("validateForm")){
    if(empty($_POST['title'])){
      $titleERR = "Titulli nuk ben te jete i zbrazet";
    }
    else{
      $query = new NewsController;
      $store = $query->store($_POST);
    }
  }
?>

<h4><a href="../views/Dashboard.php">Back to Dashboard</a></h4><br><br>
<div id="newsadd">
<form name="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()" method="POST" enctype="multipart/form-data">
<input type="text" name="title" placeholder="Titulli..."></br>
<span style="color:red;"><?php echo $titleERR;?> </span><br></br>
<textarea name="body" rows="4" cols="50" placeholder="Permbajtja e lajmit...."></textarea></br></br>
<textarea name="highlight" rows="4" cols="50" placeholder="Highlight i lajmit...."></textarea></br></br>
<input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png"></br></br>
<select name="kategoria">
<?php foreach($categoryinfo as $category): ?>
<option name="" value="<?php echo $category['category_id']; ?> " > <?php echo $category['category_name'] ; ?> </option>
<?php endforeach; ?></br></br>
</select>
<input type="hidden" name="post_author" value="<?php echo $_SESSION['name']; ?>"></br></br></br></br>
<input style="background: aqua; font-weight: bold;" type="submit" name="submit" value="Shto lajmin">

</form>

</div>

<?php } else{ ?>
  <li><a href="../views/Account.php">Login</a></li>
  <li><a href="../views/Account.php">Signup</a></li>
<?php } ?>