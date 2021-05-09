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
<!--
    References:
        1) Nav bar active class tutorial: https://www.youtube.com/watch?v=BI3kNsTruWo
        2) https://www.visitcolumbiamo.com/directory/sparkys-homemade-ice-cream/
        3) https://www.w3schools.com/tags/tag_iframe.asp

-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6e70cdda57.js"></script>
    <script src="navbar-footer.js"></script>
    <script src ="home.js"></script>
    
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="colorVariables.css">
    <link rel="stylesheet" type="text/css" href="navBarFinalS21.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
</head>
    
<body>
    <div id="cover">
        <img id="mainPic" src="images/homepage.jpg" alt="homepagePic">
        <div id="slogan">
            <p>College town</p>
            <p id="iceCreamText">ice cream</p>
            <p>done right</p>
        </div>
    </div>
    <h3 class="subheader">Gallery</h3>

    <div id="galleryDiv">
        <div class="row">
            <img class="galleryImage" src="images/gallery/gallery1.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery4.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery7.jpg" alt="image">
        </div>
        <div class="row">
            <img class="galleryImage" src="images/gallery/gallery2.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery5.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery8.jpg" alt="image">
        </div>
        <div class="row">
            <img class="galleryImage" src="images/gallery/gallery3.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery6.jpg" alt="image">
            <img class="galleryImage" src="images/gallery/gallery9.jpg" alt="image">
        </div>
    </div>
    
    <h3 class="subheader">About us</h3>
    <div id="about">
        <div id="leftAbout" class="aboutColumn">
            <!-- Got some of this description from https://www.visitcolumbiamo.com/directory/sparkys-homemade-ice-cream/ -->
            <p>Sparky's Homemade Ice Cream, named after the owner's bulldog, was originally intended to be an art gallery when it first opened. However, after success from a homemade ice cream machine, Sparky's has been serving unique, homemade flavors of ice cream for the past 18 years.</p>
            <p>With pink floors, chartreuse and lavendar walls filled with various works of art, Red Bull shakes, Guinness floats, and crocheted monstrosities, Sparky's has become the most popular ice cream shop in Downtown Columbia, Missouri.</p>
        </div>
        <div id="rightAbout" class="aboutColumn">
            <div id="videoWrapper">    
                <!-- https://www.w3schools.com/tags/tag_iframe.asp -->
                <iframe src="https://www.youtube.com/embed/RYo045abffA"></iframe>
            </div>
        </div>
    </div>
    
    

    
    
    
    
    
</body>
    
</html>