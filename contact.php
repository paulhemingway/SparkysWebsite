 <?php

    if(!session_start()) {
		header("Location: error.php");
		exit;
	}
// Created by Professor Wergeles for CS2830 at the University of Missouri
	// A user has to have logged in order to have this 'username' cookie 
	
	// If the cookie isn't there, send them back to the login
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if (!$loggedIn) {
		header("Location: login.php");
		exit;
	}
?> 
<!DOCTYPE html>
<!-- 
    Name: Paul Hemingway
    Pawprint: pshfmg
    Date: 4/15/2021
    Project: Final Project
--> 
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6e70cdda57.js"></script>
    <script src="navbar-footer.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="colorVariables.css">
    <link rel="stylesheet" type="text/css" href="navBarFinalS21.css">
     <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    
</head>
    
<body>
    <h2 class="subheader">Contact</h2>
    
    <div id="contactForm">
        
        <p id="contactHeader">Questions? Email us!</p>
        <form action="email.php" method="POST">
            <input type="text" name="name" id="name" placeholder="Name" required>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="text" id="subject" placeholder="Subject" required>
            <textarea id="message" name="message" rows="4" cols="40" placeholder="Message" maxlength="200" required></textarea>
            <input type="submit" name="submit" value="Send">
            <?php  
            
                if($success){
                    print("<p>$success</p>");
                }
            
            ?>
        </form>
    </div>
    <div id="contactSocials">
        <a href="https://twitter.com/sparkyshomemade" target="_blank"><span><i class="social fa fa-twitter"></i>Tweet us!</span></a>
        <a href="https://www.facebook.com/sparkyshomemade" target="_blank"><span><i class="social fa fa-facebook"></i>Facebook us!</span></a>
        <a href="https://www.instagram.com/sparkyshomemade/" target="_blank"><span><i class="social fa fa-instagram"></i>Instagram us!</span></a>
        
        <!-- https://www.elegantthemes.com/blog/wordpress/call-link-html-phone-number -->
        <a href="tel:573-443-7400"><span><i class="social fa fa-phone"></i>(573) 443-7400</span></a>
    </div>

</body>
    
</html>