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
    <title>Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6e70cdda57.js"></script>
    <script src="navbar-footer.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="navBarFinalS21.css">
    <link rel="stylesheet" type="text/css" href="colorVariables.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src="menu.js"></script>
</head>
    
<body>
    <div id="randomItemWrapper">
        
        <!-- this is a random menu item feature for if the user wants to generate something to get -->
        <h3>Can't decide? Let us choose!</h3>
        <button onclick="getMenu()">Item Randomizer</button>
        <h4>Click for a random item off the menu!</h4>
        <p id="randomItemResponse"></p>
    </div>  
    <img id="menuImg" src="images/menu.png" alt="menu">
</body>
    
</html>