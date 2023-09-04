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
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="admin_css/add_admin_style.css">



</head>
<body>

<div class="container">
<form action="" method="post" enctype="multipart/form-data" onsubmit="return validate()" name="form">


       <h1>Add Admin </h1>
           <div class="form_control">
               <lebel>Name</lebel>
               <input type="text" placeholder="Name" id="username" name="name">
         
                  <i class="fa fa-check-circle"></i>
                  <i class="fa fa-exclamation-circle"></i>
                      <small> Error message</small>
              </div>

          


    <!-- <input type="text" placeholder="name" name="name"><br> -->

    <div class="form_control">
            <lebel>Username</lebel>
            <input type="text" placeholder="username" id="username" name="username">
         
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>

    <!-- <input type="text" placeholder="username" name="username"><br> -->

    <div class="form_control">
            <lebel>Password</lebel>
            <input type="password" placeholder="password" id="password">
         
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>


         <div class="form_control">
            <lebel>Confirm password</lebel>
            <input type="password" placeholder="password cheak" id="password2">
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
        </div>


    <!-- <input type="password" placeholder="password" name="password"><br> -->

    
    <div class="form_control">
    <select name="role">
      <option value="">Select admin role</option>
      <option value="admin">Admin</option>
      <option value="modarator">Modarator</option>
    </select>
         <i class="fa fa-check-circle"></i>
         <i class="fa fa-exclamation-circle"></i>
         <small> Error message</small>
    </div>




    <div class="form_control">

    <input type="file" name="pic"><br>

    <i class="fa fa-check-circle"></i>
    <i class="fa fa-exclamation-circle"></i>
    <small> Error message</small>
    </div>
    <input type="submit" value="Add" name="submit">

      </div>





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







<script type="text/javascript">

const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const password = document.getElementById('password');
const confirmPassword = document.getElementById('password2');



form.addEventListener('submit', (event) => {
   event.preventDefault();
    validate();
   
 });


 


 function successMessage()
 {
   let formCount= document.getElementsByClassName('form_control');
   let count =0;
   let countTotalForm = formCount.length;

   


     

   for(let i=0; i<formCount.length ;i++)
   {
      if(formCount[i].className === "form_control success"){
         count++;   
      }
   }

   
   

   
   if(count === countTotalForm){
      return true ;
   }else{
      return false
   }
 }



 function isEmail(emailValue) {

    let atSymbol = emailValue.indexOf('@');
    if (atSymbol <= 1) {
        return false;
    }

    let dotPosition = emailValue.lastIndexOf('.');

    if (dotPosition <= atSymbol + 3) {
        return false;
    }

    if (dotPosition === emailValue.length - 1) {
        return false;
    }

    return true;
}

function isStrong(passwordValue) {
    let countChar = 0;
    let countNumber = 0;

    for (let i = 0; i < passwordValue.length; i++) {
        const charCode = passwordValue.charCodeAt(i);

        if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
            countChar++;
        }
        if (charCode >= 48 && charCode <= 57) {
            countNumber++;
        }
    }

  
    if (countChar > 0 && countNumber > 0 && countChar + countNumber === passwordValue.length) {
        

        return true;
    } else {
        return false;
    }
}



function validate()
{
   
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const phoneValue = phone.value.trim();
    const passwordValue = password.value.trim();
    const confirmPassworValue = confirmPassword.value.trim();

    // username

    if(usernameValue === ""){
        setErrormsg(username, 'Username cannot be blank');
    }
    else if(usernameValue.length <= 3){
        setErrormsg(username, 'Username mush be minimum 4 charecter');
    }else{
         setSuccess(username);
    }



   //  email 

    if(emailValue === ""){
      
        setErrormsg(email, 'Email cannot be blank');
    }
    else if(!isEmail(emailValue)){
        setErrormsg(email, 'Email is not valid');
    }else{
        setSuccess(email);
    }

    //  phone 

    if(phoneValue === ""){
      
      setErrormsg(phone, 'Phone number cannot be blank');
  }
  else if(phoneValue.length != 11){
      setErrormsg(phone, 'Phone number is not valid');
  }else{
      setSuccess(phone);
  }



  //  password 

  if(passwordValue === ""){
      
      setErrormsg(password, 'password cannot be blank');
  }
  else if(passwordValue.length <8){
      setErrormsg(password, 'Password must be minimum of 8 charecter');
  }else if(!isStrong(passwordValue)){
      setErrormsg(password, 'Must Contain Number and Charecter');
  }else{
      setSuccess(password);
  }


  //  confirm password 

  if(confirmPassworValue === ""){
         setErrormsg(confirmPassword, 'Confirm password cannot be blank');
  }
  else if(confirmPassworValue.length <8){
      setErrormsg(confirmPassword, '*Confirm Password and password are not same');
  }else if(!isStrong(confirmPassworValue)){
      setErrormsg(confirmPassword, '**Confirm Password and password are not same');
  }
  else if(passwordValue != confirmPassworValue){
      setErrormsg(confirmPassword, 'Confirm Password and password are not same');
  }else{
      setSuccess(confirmPassword);
  }

   if(successMessage()){
        //  alert("registration successfull");
         swal("Good job!", "You clicked the button!", "success");
   }

}


function setErrormsg(input ,errorMsg)

  {
      const form_control = input.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "form_control error";
      small.innerText = errorMsg;

  }

  function setSuccess(input)

  {
      const form_control = input.parentElement;
      const small = form_control.querySelector('small');
      form_control.className= "form_control success";
      
  }
</script>

</body>
  </html>











