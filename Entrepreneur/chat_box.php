
<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Page</title>
    <link rel="stylesheet" href="all_css/chatbox_style.css">
</head>
<body>
   

    <div class="container">
        <div class="chat-box" id="chatBox">

        <?php 
        
           $connection=mysqli_connect('localhost','root','','project_investor_seeker_db');

           $sql=$result = "SELECT * FROM `chat_history_and_relational_table` WHERE username='$session_name'";

           if($connection){


           }
        
        ?>
        
        </div>
        <div class="input-box">
            <form action="" method="get">
            <input type="text" id="messageInput" placeholder="Type your message">
            <input type="submit" name="send" class="send">
            </form>
        </div>
    </div>
    
    <!-- <script src="all_js/script.js"></script> -->
</body>
</html>





<?php

if(isset($_REQUEST['chat_button']))
{
 
    echo $_SESSION['sender'];}


    


  

?>

