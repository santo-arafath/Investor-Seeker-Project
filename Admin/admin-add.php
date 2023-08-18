<?php 

session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:admin-login.php");
}

?>


<?php $title="Admin Add";?>


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


<form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">


    <input type="text" placeholder="name" name="name"><br>
    <input type="text" placeholder="username" name="username"><br>
    <input type="password" placeholder="password" name="password"><br>

    

    <select name="role">
      <option value="">Select admin role</option>
      <option value="admin">Admin</option>
      <option value="modarator">Modarator</option>
    </select>

    

    <input type="file" name="pic"><br>
    <input type="submit" value="Add" name="submit">




    <script>
      function validateForm() {
  const name = document.forms["myForm"]["name"].value;
  const username = document.forms["myForm"]["username"].value;
  const password = document.forms["myForm"]["password"].value;
  const role = document.forms["myForm"]["role"].value;
  const pic = document.forms["myForm"]["pic"].value;

  if (name === "") {
    alert("Name must be filled out");
    return false;
  }

  if (username === "") {
    alert("Username must be filled out");
    return false;
  }

  if (password === "") {
    alert("Password must be filled out");
    return false;
  }

  if (role === "") {
    alert("Admin role must be selected");
    return false;
  }

  if (pic === "") {
    alert("Picture must be uploaded");
    return false;
  }

  // If all the fields are valid
  return true;
}

    </script>

</form>





<?php 
    require "includes/configure.php";


    if(isset($_REQUEST['submit'])){ 
        $name=mysqli_real_escape_string($connnection,$_REQUEST['name']);
        $usnm=mysqli_real_escape_string($connnection,$_REQUEST['username']);
        $password=mysqli_real_escape_string($connnection,$_REQUEST['password']);
        $role=mysqli_real_escape_string($connnection,$_REQUEST['role']);


        

   $picture=$_FILES['pic'];
   $pname=$picture['name'];
   $tmp_name=$picture['tmp_name'];
   

     $name_changer=uniqid().".png";


     $queryy="SELECT username FROM `admin-table1` WHERE username='$usnm'";
     $res=mysqli_query($connnection,$queryy) or die("Query failed.");

     $cnt=mysqli_num_rows($res);

     if($cnt>0){
      echo "Username already exist";
     }else{

     
   
   if(!empty($pname)){
   
       $locat='admin-photo/';
   
       if(move_uploaded_file($tmp_name,$locat.$name_changer)){
   
   
       }else{
           echo 'upload failed';
           die("wait");
       }
       
     }else{
       echo 'file not found';
        }


     

        require "includes/configure.php";
            if(!$connnection){
        
         die("not connected".mysqli_error());
    }else{

    $sqlin= "INSERT INTO `admin-table1` (`photo`, `name`, `role`, `username`, `password`) VALUES ('$name_changer', '$name', '$role', '$usnm', '$password')";
    
    $result=mysqli_query($connnection,$sqlin);

   
    if($result){
       header("location:admin-show.php?inserted");
    }else{
        echo "not inserted";
    }
    
   }

     }

    }

?>












