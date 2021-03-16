<!DOCTYPE html>

<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>Football News | Tables</title>
            <link rel="icon" type="image/x-icon" href="table.images/logo1.png"/>
            <link rel="stylesheet" href="account.css">
        </head>

<body>
    <header>
	    <div class="navbar">
                <div class="logo">
                    <a href="#" id="TN"><h3>Football News</h3></a>
                </div>
                <div class="navbar_items">
                    <ul>
                        <li><a href="../index.html">News</a></li>
                        <li class="menuLines">|</li>
                        <li><a href="../aboutus - index.html">About Us</a></li>
                        <li class="menuLines">|</li>
                        <li><a href="../login.html">Your Account</a></li>
                        <li class="menuLines">|</li>				
                    </ul>
                </div>
            </div>
    </header>
    <div id="main">
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1>Create Account</h1>
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Sign in</h1>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <a href="#">Forgot your password?</a>
                    <button>Sign In</button>
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

<script src="account.js"></script>

</body>
</html>