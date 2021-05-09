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
    <title>Hours and Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6e70cdda57.js"></script>
    <script src="navbar-footer.js"></script>
    <script src="hours.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-kAkz4BMtRf_eckj5NAhnXdmbdw8HR2M&callback=initMap&libraries=&v=weekly" async></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="navBarFinalS21.css">
    <link rel="stylesheet" type="text/css" href="hours.css">
    <link rel="stylesheet" type="text/css" href="colorVariables.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
</head>
    
<body>
    <div id="mainWrapper">
        <div id="left" class="column">
            <div class="content">
                <h1 id="city">Columbia, MO</h1>
                <img id="shopPic" src="images/shopview.jpg" alt="shop">
                <div id="textBelowImage">
                    <p id="address">21 S 9th St, Columbia, MO 65201</p>
                   
                    <!-- placeholder for dynamic open/close sign -->
                    <div id="openStatus">
                    
                    </div>
                        
                </div>
                
                <p id="storeHours">Store Hours</p>
                <div id="hours">
                    
                    <div id="days">
                        <ul>
                            <li>Sunday</li>
                            <li>Monday</li>
                            <li>Tuesday</li>
                            <li>Wednesday</li>
                            <li>Thusday</li>
                            <li>Friday</li>
                            <li>Saturday</li>
                        </ul>
                    </div>
                    <div id="times">
                        <ul>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                            <li>11:30AM - 11:00PM</li>
                        </ul>
                    </div>
                </div>
                <p id="hoursVary">Holiday hours may vary.</p>
            </div>
        </div>
        
        <!-- placeholder for google map -->
        <div id="right" class="column">
            <div id="map"></div>
        </div>
        
    </div>
</body>
    
</html>