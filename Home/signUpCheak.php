


<?php 



        // $connnection = mysqli_connect('localhost','root','','investor-seeker-db');

        require "../Admin/includes/configure.php";

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
       


        

   $picture=$_FILES['profile-pic'];
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
   
       $locat='entroProfile/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
           die("wait");
       }
       
     }else{
       echo 'file not found';
        }


     

        require "../Admin/includes/configure.php";

        // $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');
            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `entrepreneur-reg-table1` (`profile_photo`, `name`, `username`, `nid`, `email`, `password`, `date_sign`) VALUES ('$name_changer', '$fullname', '$usnm', '$nid', '$eml', '$password', '$today')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:loginForm.php?inserted");

    


    }else{
        echo "not inserted";

        header("location:signUpCheak.php?notinserted");
    }
    
   }

     }

    }

    ?>



    


<?php 



// $connnection = mysqli_connect('localhost','root','','investor-seeker-db');

require "../Admin/includes/configure.php";

if(isset($_REQUEST['submit2'])){ 
$fname=mysqli_real_escape_string($connnection,$_REQUEST['firstname']);
$lname=mysqli_real_escape_string($connnection,$_REQUEST['lastname']);
$usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
$nid=mysqli_real_escape_string($connnection,$_REQUEST['nid']);
$eml=mysqli_real_escape_string($connnection,$_REQUEST['email']);
// $password=mysqli_real_escape_string($connnection,md5($_REQUEST['password']));
$password=mysqli_real_escape_string($connnection,$_REQUEST['password']);


$today = date('y:m:d');


$fullname=$fname.$lname;





$picture=$_FILES['profile_picture'];
$pname=$picture['name'];
$tmp_name=$picture['tmp_name'];


$name_changer=uniqid().".png";


$queryy="SELECT username FROM `investor_reg_table1` WHERE username='$usnm'";
$res=mysqli_query($connnection,$queryy) or die("Query faild.");

$cnt=mysqli_num_rows($res);

if($cnt>0){
echo "Username already exist";
}else{



if(!empty($name)){

$locat='en_profile/';

if(move_uploaded_file($tmp_name,$locat.$name_changer)){


}else{
   echo 'upload failed';
}

}else{
echo 'file not found';
}




require "../Admin/includes/configure.php";

// $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');
    if(!$connnection){

 die("not connected".mysqli_error());
}else{

$sqlin= "INSERT INTO `investor_reg_table1` (`investor_profile`, `name`, `username`, `nid`, `email`, `password`, `date_sign`) VALUES ('$name_changer', '$fullname', '$usnm', '$nid', '$eml', '$password', '$today')";

$result=mysqli_query($connnection,$sqlin);


if($result){
header("location:loginForm.php?inserted");




}else{
echo "not inserted";

header("location:signUpCheak.php?notinserted");
}

}

}

}

?>