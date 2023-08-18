<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>
<?php $title="entro Add";?>

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


<form action="" method="post" enctype="multipart/form-data">

    <input type="text" placeholder="name" name="name"><br>
    <input type="text" placeholder="nid" name="nid"><br>
    <input type="text" placeholder="email" name="email"><br>
    <input type="text" placeholder="username" name="username"><br>
    <input type="password" placeholder="password" name="password"><br>

    

      

    

    <input type="file" name="pictur"><br>
    <input type="submit" value="Add" name="submit">

</form>



<?php 



        // $connnection = mysqli_connect('localhost','root','','investor-seeker-db');

        require "includes/configure.php";

        if(isset($_REQUEST['submit'])){ 
        $fname=mysqli_real_escape_string($connnection,$_REQUEST['firstname']);
        $lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
        $eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
        // $password=mysqli_real_escape_string($connnection,md5($_REQUEST['password']));
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);
        

        $today = date('y:m:d');


        $fullname=$fname.$lname;
       


        

   $picture=$_FILES['pictur'];
   $pname=$picture['name'];
   $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     $queryy="SELECT username FROM `entrepreneur-reg-table1` WHERE username='$usnm'";
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

    $sqlin= "INSERT INTO `entrepreneur-reg-table1` (`profile_photo`, `name`, `username`, `nid`, `email`, `password`, `date_sign`) VALUES ('$name_changer', '$fullname', '$usnm', '$nid', '$eml', '$password', '$today')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:admin-entrepreneur.php?inserted");

    


    }else{
        echo "not inserted";

        header("location:signUpCheak.php?notinserted");
    }
    
   }

     }

    }

    ?>

