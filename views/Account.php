<?php
    require '../controllers/UserController.php';
if(isset($_POST['register-submit'])) {
      $data = [
          'name' => trim($_POST['name']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'nameError' => '',
          'emailError' => '',
          'passwordError' => ''
      ];

    $nameValidation = "/^[a-zA-Z]*$/";
    $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

    //Validate first name on letters
    if (empty($data['name'])) {
        $data['nameError'] = 'Please enter your first name.';
    } elseif (!preg_match($nameValidation, $data['name'])) {
        $data['nameError'] = 'First name can only contain letters.';
    }
    // Validate password on length, numeric values,
    if(empty($data['password'])){
        $data['passwordError'] = 'Please enter password.';
      } elseif(strlen($data['password']) < 6){
        $data['passwordError'] = 'Password must be at least 8 characters';
      } elseif (preg_match($passwordValidation, $data['password'])) {
        $data['passwordError'] = 'Password must be have at least one letter.';
      }

    //Validate email
    if (empty($data['email'])) {
        $data['emailError'] = 'Please enter your email.';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $data['emailError'] = 'Please enter the correct format.';
    }
  }
    // Make sure that errors are empty
    if (empty($data['nameError']) && empty($data['emailError']) && empty($data['passwordError'])) {
  

        $user = new UserController;

        if(isset($_POST['register-submit'])) {
            $user->store($_POST);
        }
    }
    
?>
<!DOCTYPE html>

<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Football News | Tables</title>
            <link rel="icon" type="image/x-icon" href="../table.images/logo1.png"/>
            <link rel="stylesheet" href="../css/account.css">
        </head>

<body>
    <header>
	    <div class="navbar">
                <div class="logo">
                    <a href="#" id="TN"><h3>Football News</h3></a>
                </div>
                <div class="navbar_items">
                    <ul>
                        <li><a href="index.php">News</a></li>
                        <li class="menuLines">|</li>
                        <li><a href="(DI)aboutus - index.php">About Us</a></li>
                        <li class="menuLines">|</li>
                        <li><a href="account.php">Your Account</a></li>
                        <li class="menuLines">|</li>
                        <?php
                        if(isset($_SESSION['name']) && $_SESSION['roli']==1){
                            ?>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li class="menuLines">|</li>
                        <?php
                            }
                        ?>		
                        <?php
                        if(isset($_SESSION['name'])){
                            ?>
                        <li><a href="../businessLogic/logout.php">Sign out</a></li>
                        <li class="menuLines">|</li>	
                        <?php
                            }
                        ?>			
                    </ul>
                </div>
            </div>
    </header>
    <div id="main">
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="post">
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Name"  name="name"/>
                    <?php if(isset($data['nameError'])){?>
                        <p style="color:red; margin-bottom: 0px; margin-top: 0px;"><?php echo $data['nameError'];?></p>
                        <?php } ?>
                    <input type="email" placeholder="Email"  name="email"/>
                    <?php if(isset($data['emailError'])){?>
                        <p style="color:red; margin-bottom: 0px; margin-top: 0px;"><?php echo $data['emailError'];?></p>
                        <?php } ?>
                    <input type="password" placeholder="Password"  name="password"/>
                    <?php if(isset($data['passwordError'])){?>
                        <p style="color:red; margin-bottom: 0px; margin-top: 0px;"><?php echo $data['passwordError'];?></p>
                        <?php } ?>
                    <button name="register-submit">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="../businessLogic/login.php" method="post">
                    <h1>Sign in</h1>
                    <input type="email" placeholder="Email" required name="email"/>
                    <input type="password" placeholder="Password" required name="password"/>
                    <a href="#">Forgot your password?</a>
                    <button name="login-submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back!</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello, Friend!</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>


        <video autoplay muted loop>
            <source src="../Table.prova/table.images/football.mp4">
        </video>
        </div>

<script src="../js/account.js"></script>

</body>
</html>