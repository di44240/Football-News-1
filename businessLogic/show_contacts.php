<?php
require '../controllers/ContactController.php';

$query = new ContactController;
$contacts = $query->allDesc();
if(isset($_SESSION['roli']) && $_SESSION['roli'] == 1){
?>
<style>
        table, th, td {
            border: 2px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
</style>
</br></br><a style="border: 2px solid black;padding: 10px;background:aqua;color: black;text-decoration:none;" href="../views/Dashboard.php">Back to Dashboard</a></br></br></br>
<br><br><br>
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
</div>
<?php } else{ ?>
  <li><a href="../views/Account.php">Log in</a></li>
  <li><a href="../views/Account.php">Sign up</a></li>
<?php } ?>