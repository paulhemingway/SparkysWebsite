$(document).ready(function(){
   
    $("body").prepend('<header><nav><input type="checkbox" id="check"><label for="check" class="checkButton"><i class="fas fa-bars"></i></label><label class="logo">SPARKY\'S</label><ul class="nav_links" id="navLinks"><li><a class="link" href="home.php">Home</a></li><li><a class="link" href="hours.php">Hours & Location</a></li><li><a class="link" href="menu.php">Menu</a></li><li><a class="link" href="contact.php">Contact</a></li><li><a class="link" href="logout.php">Logout</a></li></ul></nav></header>');
    
    // active class or navbar
	const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++){
        if (menuItem[i].href === currentLocation){
            menuItem[i].className = "active";
        }
    }
    
    $("body").append('<footer><div class="footer-top"><div class="footer-left footer-sides"><div class="title-picture"><img src="images/logo.jpg" alt="Sparky\'s Logo"><div id="footerName"><div><h3>SPARKY\'S</h3><p id="titleSub">Homemade Ice Cream</p></div><ul class="socials"><li><a href="https://twitter.com/sparkyshomemade" target="_blank"><i class="social fa fa-twitter"></i></a></li><li><a href="https://www.facebook.com/sparkyshomemade" target="_blank"><i class="social fa fa-facebook"></i></a></li><li><a href="https://www.instagram.com/sparkyshomemade/" target="_blank"><i class="social fa fa-instagram"></i></a></li><li><a href="tel:573-443-7400" target="_blank"><i class="social fa fa-phone"></i></a></li></ul></div></div></div><div class="footer-right footer-sides"><ul class="navLinks"><li><a href="home.php">Home</a></li><li><a href="hours.php">Hours & Location</a></li><li><a href="menu.php">Menu</a></li><li><a href="contact.php">Contact</a></li><li><a href="logout.php">Logout</a></li></ul></div></div><div class="footer-bottom"><p>Designed by Paul Hemingway</p></div></footer>')
});
