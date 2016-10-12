<?php include "conn.php";

if(isset($_REQUEST['email'])) {
    $email = $_REQUEST['email'];
    $password=$_REQUEST['password'];
    $sql = "SELECT email FROM register WHERE email='$email' AND password='$password'";

    if ($result = mysqli_query($con, $sql)) {

        while ($row = mysqli_fetch_row($result)) {
            

                 header('Location: Dashboard.php');
        }

        mysqli_free_result($result);
    }

    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
        <title>Login and Registration</title>
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
	
	<form  action="login.php" method="POST" autocomplete="on"> 
        <div class="container">
            
            <section style="margin-top:6%">				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email</label>
                                    <input id="username" name="email" required="required" type="text" placeholder="abc@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
								<div class="logmod__alter">
							  <div class="logmod__alter-container">
								<a href="#" class="connect facebook">
								  <div class="connect__icon">
									<i class="fa fa-facebook"></i>
								  </div>
								  <div class="connect__context">
									<span>Sign in with <strong>Facebook</strong></span>
								  </div>
								</a>
							  </div>
							</div>
                                <p class="change_link">
									Not a member yet ?
									<a href="register.php" class="to_register">Join us</a>
								</p>
								
                            
                </div>
        </div>
		</form>
    </body>
</html>