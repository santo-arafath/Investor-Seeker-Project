<?php 
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}


require "include/profile_sidebar.php";?>
<div class="settingside-allform">
                    <div class="headingprofile">
                        
                    </div>
                     
                     <form action="" class="details">
                           <h2>Profile Setting</h2>
                           <lebel>First Name</lebel>
                           <input type="text" name="fname">
                           <lebel>Last Name</lebel>
                           <input type="text" name="lname"><br>
                           <lebel>Mobile</lebel>
                           <input type="number" name="mobile"><br>
                           <lebel>Email</lebel>
                           <input type="email" name="emial"><br>
                           <lebel>Registered Date</lebel>
                           <input type="text" name="date"><br>
                           <lebel>Address</lebel>
                           <input type="text" name="name"><br>
                           <lebel>First Name</lebel>
                           <input type="text" name="name"><br>
                           
                           <input type="button" value="update"><br>
                        
                     </form>
                    
          </div>
          
        </div>  <!-- conatainer end -->
     
           

                


    </div>  <!-- main end-->



    </body>
</html>