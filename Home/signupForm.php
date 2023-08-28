


<!DOCTYPE html>
<html>
<head>
    <title>Animated Signup Form</title>
    <link rel="stylesheet" type="text/css" href="css/style1signup.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/register.svg">
        </div>
        <div class="login-content">





        <form action="signUpCheak.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">

                
                <h2 class="title">Signup</h2>
               <h3 style="color:red;"> <?php 
                if(isset($_REQUEST['msg']))
                {
                echo $_REQUEST['msg'];}?></h3>
                <div class="input-div one">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Firstname</h5>
                        <input type="text" class="input" name="firstname" value="">
                   </div>
                </div>


                <div class="input-div two">
                   <div class="i">
                        <i class="fas fa-user"></i>
                   </div>
                   <div class="div">
                        <h5>Lastname</h5>
                        <input type="text" class="input" name="lastname" value="">
                   </div>
                </div>



                





                <div class="input-div three">
                <div class="i">
                  <i class="fas fa-user"></i>
                  </div>
                <div class="div">
                <h5>Username</h5>
                <input type="text" class="input" name="username" value="">
            </div>
                 </div>




               

             <div class="input-div four">
              <div class="i">
                <i class="fas fa-id-card"></i>
              </div>


            <div class="div">
                <h5>NID</h5>
                <input type="text" class="input" name="nid" value="">
            </div>
      </div>


          







           <div class="input-div">
               <div class="i">
                    <i class="fas fa-envelope"></i>
               </div>
               <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="email" value="">
               </div>
            </div>

            <div class="input-div">
               <div class="i">
                    <i class="fas fa-phone"></i>
               </div>
               <div class="div">
                    <h5>Phone</h5>
                    <input type="text" class="input" name="phone" value="">
               </div>
            </div>
            

            <div class="input-div">
               <div class="i">
                    <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" name="password">
               </div>
            </div>
            

            <div class="input-div">
               <div class="i">
                    <i class="fas fa-lock"></i>
               </div>
               <div class="div">
                    <h5>Confirm Password</h5>
                    <input type="password" class="input" name="confirm_password">
               </div>
            </div>
           

            <div class="input-div">
               <div class="i">
               <i class="fas fa-image"></i>
               </div>
               <div class="div">
                    <h5>Profile Picture</h5>
                     <input class="profil" type="file" name="profile-pic">
               </div>
            </div>
            

            <input type="submit" name="submit" class="btn" value="Signup as Entrepreneur">
            <input type="submit" name="submit2" class="btn" value="Signup as Investor">
        </form>



    </div>
</div>
