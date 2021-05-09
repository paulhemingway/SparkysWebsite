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
    <title>Create User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
   
    <link rel="stylesheet" type="text/css" href="createUser_form.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        $(function(){
            $("input[type=submit]").button();			
            
            
            // compare passwords and see if they match, if not it doesn't let you submit the form
            $("#password, #confirmPass").keyup(function(){
                var password = $("#password").val();
                var confirmPassword = $("#confirmPass").val();
                console.log(password);
                console.log(confirmPassword);
                if (password.localeCompare(confirmPassword) != 0){
//                    $("#outputDiv").html("Passwords don't match!");
                    document.getElementById("confirmPass").setCustomValidity("Passwords don't match!");
                } else {
                    document.getElementById("confirmPass").setCustomValidity("");
                }
            });
            
            
            
        });
        
        function checkBirthday() {
            var dateInput = new Date($("#birthday").val());
            
            var now = new Date();
            
            if (now < dateInput){
                document.getElementById("birthday").setCustomValidity("Birthday must not be a future date!");
            }else {
                document.getElementById("birthday").setCustomValidity("");
            }
            
        }
        
    </script>
</head>
    
<body>
    <div id="pageWrapper">
        <h1 id="sparkys">SPARKY'S</h1>
            <div id="loginWidget" class="ui-widget">
                <h1 class="ui-widget-header">Create New User</h1>     

                <?php
                    if ($error) {
                        print "<div class=\"ui-state-error\">$error</div>\n";
                    }
                ?>
                <form name="createUserForm" action="createUser.php" method="POST">

                    <input type="hidden" name="action" value="do_create">

                <div class="stack">
                    <label for="firstName">First name</label>
                    <input type="text" id="firstName" name="firstName" class="ui-widget-content ui-corner-all" autofocus required>
                </div>

                <div class="stack">
                    <label for="lastName">Last name</label>
                    <input type="text" id="lastName" name="lastName" class="ui-widget-content ui-corner-all" required>
                </div>

                <div class="stack">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="ui-widget-content ui-corner-all" required>
                </div>

                <div class="stack">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="ui-widget-content ui-corner-all" required>
                </div>

                <div class="stack">
                    <label for="confirmPass">Confirm Password</label>
                    <input type="password" id="confirmPass" name="confirmPass" class="ui-widget-content ui-corner-all" required>
                </div>

                 <div class="stack">
                    <label for="birthday">Birthday</label>
                    <input type="date" id="birthday" name="birthday" class="ui-widget-content ui-corner-all" onchange="checkBirthday()" required>
                </div>

                <div class="stack">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="ui-widget-content ui-corner-all" required>
                </div>


                <div class="stack">
                    <input type="submit" value="Create User">
                </div>
                </form>

            </div>
        </div>
    <div id="layer1" class="design"></div>
    <div id="layer2" class="design"></div>
</body>
    
</html>