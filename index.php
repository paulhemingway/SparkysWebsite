<?php
    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	if ($loggedIn) {
		header("Location: home.php");
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
        1) Professor Wergeles' User authentication lecture code
-->

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
    
<body>
        <a id="createUserLink" href="createUser_form.php">Create Account</a>
        <h1 id="sparkys">SPARKY'S</h1>
            <div id="loginWidget" class="ui-widget">
                <h1 class="ui-widget-header">User Login</h1>     

               <?php
                    if ($error) {
                        print "<div class=\"ui-state-error\">$error</div>\n";
                    }
                ?> 

                <form action="login.php" method="POST">

                    <input type="hidden" name="action" value="do_login">
                    <div id="loginElements">
                        <div class="stack">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" value="<?php echo $username; ?>" autofocus required>
                        </div>

                        <div class="stack">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>

                        <div class="stack">
                            <input type="submit" value="Login">

                        </div>
                    </div>
                </form>

            </div>
    <div id="layer1" class="design"></div>
    <div id="layer2" class="design"></div>
     <script src="login.js"></script>
</body>
    
</html>