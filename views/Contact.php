<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Football News | Contact</title>
        <link rel="icon" type="image/x-icon" href="../images/logo1.png"/>
        <link rel="stylesheet" type="text/css" href="../css/contact.css"/>
</head>

<body>

	
	<?php include "../includes/header.php" ?>

	<div class="banner_image">
		<div id="content">
            <div id="contactForm">
                <div id="contactFormHeader">
                    <h3>Contact</h3>
                </div>
                <div id="contactFormContainer">
                    <form onsubmit="return fullNameValidation()">
                        <p>Fields marked with * are required.</p>
                        <p>First Name *</p>
                        <input type="text" size="40" id="inputFirstName" required placeholder="First Name">
                        <div id="invalidFirstName" style="color:red; visibility:hidden;">Please write your first name correctly!</div>
                        <p>Last Name *</p>
                        <input type="text" size="40" id="inputLastName" required placeholder="Last Name">
                        <div id="invalidLastName" style="color:red; visibility:hidden;">Please write your last name correctly!</div>
                        <p>Email Adress *</p>
                        <input type="email" size="40" id="inputEmail" required>
                        <p>Reason</p>
                        <select>
                            <option>Other</option>
                            <option>Advertising</option>
                            <option>Partnership</option>
                            <option>To make a suggestion</option>
                            <option>Report a site problem</option>
                            <option>Write for us</option>
                        </select>
                        <p>Message *</p>
                        <textarea cols="40" rows="15" placeholder="Type your message here..."></textarea>
                        <button type="submit" id="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
	</div>

	<script src="../js/contact.js"></script>
            


</body>
</html>
