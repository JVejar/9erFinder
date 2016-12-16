<?php include 'conn.php';

if(isset($_REQUEST['name'])) {
	$name=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	$password=$_REQUEST['password'];
	$c_password=$_REQUEST['cpassword'];
	
	if($password==$c_password){
	$retval = $con->query("insert into register(name,email,phone,password,cpassword) values('$name','$email','$phone','$password','$c_password')");
    if (!$retval) {
        echo $con->error;
        die("\n Could not insert record ");
    }else{
        header('Location: login.php');
    }
	}
	else{
		echo '<script>alert("Password Mismatch !! ")</script>';
	}
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
	<form  action="register.php" method="POST" autocomplete="on">
        <div class="container">
            
            <section style="margin-top:6%">				
                <div id="container_demo" >
                    <div id="wrapper">
                        <div id="login" class="animate form">
                             
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="username" class="username" data-icon="u">Name</label>
                                    <input id="username" name="name" required="required" type="text" placeholder="username" />
                                </p>
                                <p> 
                                    <label for="email" class="youmail" data-icon="e" > Email</label>
                                    <input id="email" name="email" required="required" type="email" placeholder="abc@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="phone" class="phone" data-icon="#" > Phone</label>
                                    <input id="phone" name="phone" required="required" type="phone" placeholder="+123456789"/> 
                                </p>
								<p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Confirm password </label>
                                    <input id="cpassword" name="cpassword" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="login.php" class="to_register"> Go and log in </a>
								</p>
                            
                </div>
        </div>
		
		</form>
    </body>
</html>