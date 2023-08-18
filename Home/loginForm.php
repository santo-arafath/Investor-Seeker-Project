<?php

$nameErr = $passwordErr = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {


  if (empty($_REQUEST["username"])) {
    $nameErr = "Username is required";
  } else {
    $name = test_input($_REQUEST["username"]);
    
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  
  if (empty($_REQUEST["password"])) {
    $emailErr = "Password is required";
  } else {
    $email = test_input($_REQUEST["password"]); 

  }

}
    
  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
.error {color: #FF0000;}
</style>
</head>



<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">



        <!-- action="../Entrepreneur/investor_showProfile_first_Get_start.php" -->
        <form name="loginForm" action="logincheak.php" method="get" enctype="multipart/form-data" onsubmit="return validateloginForm()">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		    <div class="input-div one">
                        <div class="i">
                             <i class="fas fa-user"></i>
                       </div>
                    <div class="div">

                            <h5>Username</h5>
                            <input type="text" class="input" name="username" value="">
                              
                   </div>
                </div>



           		<div class="input-div pass">
                      <div class="i"> 
                          <i class="fas fa-lock"></i>
                      </div>
                   <div class="div">
                         <h5>Password</h5>
                         <input type="password" class="input" name="password" value="">
                               
       
                    </div>
                </div>


            	<a href="#">Forgot Password?</a><br>
              <a href="signupForm.php">Sign Up?</a>
            	  <input type="submit" name="submit" class="btn" value="Login">
            </form>
            
        </div>
    </div>



    <script type="text/javascript" src="js/main.js"></script>


</body>
</html>
