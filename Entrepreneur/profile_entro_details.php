<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->


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
                     
                     <form action="" class="details showdetails">
                        <div class="item1">
                           <h2>Profile Setting</h2>
                           <lebel>All Details</lebel>
                        </div>
                           <hr>
                           
        <?php  

                            require "../Admin/includes/configure.php";
    
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
                                   $usnm=$row['username'];
                                   $password=$row['password'];
                                   $nid=$row['nid'];
                                   $email=$row['email'];
                                   $phone=$row['phone'];
                                   $date=$row['date_sign'];
                                   $fullname=$fname." ".$lname;
                                   $address="Dhaka 24/4 link road";
                                   $age="22";
        
           ?>


                 
                           

                          <div class="item">
                           <lebel>Name :</lebel>
                           <p><?php echo "$fullname"; ?></p>
                        </div>
                        <div class="item">
                           <lebel>Mobile :</lebel>
                           <p><?php echo "$phone"; ?></p>
                        </div>
                        <div class="item">
                           <lebel>Email :</lebel>
                           <p><?php echo "$email"; ?></p>
                           
                        </div>
                        <div class="item"> 
                           <lebel>Registered Date :</lebel>
                           <p><?php echo "$date"; ?></p>
                        </div>
                        <div class="item">
                           <lebel>Address :</lebel>
                           <p><?php echo "$address"; ?></p>
                        </div>
                        <div class="item">
                          
                           <lebel>Age :</lebel>
                           <p><?php echo "$fullname"; ?></p>
                           
                        </div>
                        <div class="item2"> 
                           <form method="post" action=""> 
                        <button type="submit" class="btn btn-primary" name="submit">Edit</button><br>
                         
                        </div>
                        
                     </form>
                    <?php }} 
                    
                    if(isset($_REQUEST['submit']))
                    {
                     header("location:profile_entro_update_real.php?yes");
                    }
                    
                    ?>
          </div>
          
        </div>  <!-- conatainer end -->
      

           


</div>  <!-- main end-->



</body>
</html>
