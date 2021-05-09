<?php
// Most of this code was Created by Professor Wergeles for CS2830 at the University of Missouri for Database with PHP lectures
 
	if(!session_start()){
        header("Location: index.php");
        exit;
    }


    $loggedIn = empty($_SESSION['loggedin']) ? false : $_SESSION['loggedin'];
	// If the user is logged in, redirect them home
	if ($loggedIn) {
		header("Location: home.php");
		exit;
	}
	
	
	// Pull out any "action" from $_POST
	$action = empty($_POST['action']) ? '' : $_POST['action'];
	


	if ($action == 'do_login') {
		// If the action is "do_login", then the form was submitted
		handle_login();
	} else {
		// Else, the form wasn't submitted, so present the login
		login_form();
	}
		   
  
	function handle_login() {
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
	  
        require_once 'db.conf';
     
        $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        if ($mysqli->connect_error) {
            $error = 'Error: ' . $mysqli->connect_errno . ' ' . $mysqli->connect_error;
			require "index.php";
            exit;
        }
        // http://php.net/manual/en/mysqli.real-escape-string.php
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

        // first query: check if the username exists
        $userQuery = "SELECT id FROM sparkysUsers WHERE username = '$username'";
       
        
       $mysqliUserResult = $mysqli->query($userQuery);
		
        // If there was a result...
        if ($mysqliUserResult) {
            // How many records were returned?
            $userMatch = $mysqliUserResult->num_rows;

            // Close the results
            $mysqliUserResult->close();
           
            // If there was a match for the username, now make a query that checks both username and password
  		    if ($userMatch == 1) {
                
                // create query for both variables
                $passQuery = "SELECT id FROM sparkysUsers WHERE username = '$username' AND userPassword = sha1('$password')";
                
                // get result 
                $mysqliPassResult = $mysqli->query($passQuery);
                
                // if the result exists
                if ($mysqliPassResult){
                    
                    // get the number of rows it returned (should only return 1 if credentials valid)
                    $passMatch = $mysqliPassResult->num_rows;
                    
                    //close result and connection
                    $mysqliPassResult->close();
                    $mysqli->close();
                    
                    // if it returns 1 row, redirect to the home page.
                    if($passMatch == 1){
                        $_SESSION['loggedin'] = $username;
                        header("Location: home.php");
                        exit;
                    } else {
                        $error = 'Error: Invalid password!';
                        require "index.php";
                        
                    }
                }
            }else {
                $error = 'Error: Username not found!';
                require "index.php";
                 // close the connection
                $mysqli->close();
                exit;
            }
        }
        // Else, there was no result
        else {
          $error = 'Login Error: Please contact the system administrator.';
          require "index.php";
            // close the connection
            $mysqli->close();
          exit;
        }   
	}
	
	function login_form() {
		$username = "";
		$error = "";
		require "index.php";
	}
	
    $mysqliUserResult->close();
	$mysqliPassResult->close();
    $mysqli->close();
    exit;
?>