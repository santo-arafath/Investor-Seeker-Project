<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="profile_setting_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    </head>
    <body>


    <?php         require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
       }else{

         $usnm=$_SESSION['usrName'];

         $query="SELECT * FROM `entrepreneur-reg-table1` WHERE username = '$usnm'";

$result=mysqli_query($connnection,$query);



   $count=mysqli_num_rows($result);

       if($count>0){

         $row=mysqli_fetch_assoc($result);
           
                 $id=$row['id'];
                 $profile_pic=$row['profile_photo'];
                 $fname=$row['first-name'];
                 $lname=$row['last-name'];
                 $email=$row['email'];
                 $fullname=$fname." ".$lname;





                 ?>

<div class="mainpage">
             
    <div class="container">


          <div class="sidebarfor">
              <div class="profilebigone">
                   <img src="../Home/entroProfile/<?php echo $profile_pic;?>">
                   
                   

              </div>

    

              <div class="name">
                   <h1><?php echo $fullname;?></h1>
                   <h4><?php echo $email;?></h4>
                   <input type="file" value="Change-photo">
                   <input type="button" value="Change-photo">
              </div>

              
              <ul class="list">
                <li><a href="profile_entro_details.php"><i class="fas fa-user"></i> Account</a></li>
                <li><a href="profile_entro_update_real.php"><i class="fas fa-shield-alt"></i> Update</a></li>
                <li><a href="profile_entro_password_change_real.php"><i class="fas fa-lock"></i> Password</a></li>
                <li><a href="#"><i class="fas fa-bell"></i> Notification</a></li>
                <li><a href="entro_showProfile_first_Get_start.php"><i class="fas fa-arrow-left"></i> Back</a></li>
            </ul>
              
          </div> <!--sidebarfor end-->
     


       <?php }
    
             }
             
             ?>




          