
<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?><?php $title="Investor Add";?>

<!DOCTYPE html>
<html>
<style>
    *{
        font-size:30px;
        
    }
input[type=text], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 95%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 95%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

</head>
</html>


<form action="#" method="post" enctype="multipart/form-data">

    <input type="text" placeholder="first name" name="fname"><br>
    <input type="text" placeholder="last lname" name="lname"><br>
    <input type="text" placeholder="nid" name="nid"><br>
    <input type="text" placeholder="email" name="email"><br>
    <input type="text" placeholder="phone" name="phone"><br>
    <input type="text" placeholder="username" name="username"><br>
    <input type="password" placeholder="password" name="password"><br>

    

      

    

    <input type="file" name="pics"><br>
    <input type="submit" value="Add" name="submit">

</form>



<?php 



        // $connnection = mysqli_connect('localhost','root','','investor-seeker-db');

        require "includes/configure.php";

        if(isset($_REQUEST['submit'])){ 
        $fname=mysqli_real_escape_string($connnection,$_REQUEST['fname']);
        $lname=mysqli_real_escape_string($connnection,$_REQUEST['lname']);
        //$lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
        $eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
        $phone_number=mysqli_real_escape_string($connnection,$_REQUEST['phone']);
        // $password=mysqli_real_escape_string($connnection,md5($_REQUEST['password']));
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);

        $fullname=$fname." ".$lname;
        

        $today = date('y:m:d');


        //$fullname=$fname.$lname;
       


        

   $picture=$_FILES['pics'];
   $pname=$picture['name'];
   $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     $queryy="SELECT username FROM `investor_reg_table1` WHERE username='$usnm'";
      $res=mysqli_query($connnection,$queryy) or die("Query faild.");

     $cnt=mysqli_num_rows($res);

     if($cnt>0){
      echo "Username already exist";
     }else{

     
   
   if(!empty($pname)){
   
       $locat='../Home/entroProfile/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
       }
       
     }else{
       echo 'file not found';
        }


     

        require "includes/configure.php";

        // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');
            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `investor_reg_table1` (`investor_profile`, `first-name`, `last-name`, `name`, `username`, `nid`, `email`, `phone`, `password`, `date_sign`) VALUES ('$name_changer', '$fname', '$lname', '$fullname', '$usnm', '$nid', '$eml', '$phone_number', '$password', '$today')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:admin-investor.php?inserted");

    


    }else{
        echo "not inserted";

        header("location:investor_add.php?notinserted");
    }
    
   }

     }

    }

    ?>

