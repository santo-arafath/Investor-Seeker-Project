
<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

 $sender=$_SESSION['id'];
 $receiver=$_SESSION['receiver'];
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

           $sql=$result = "SELECT * FROM `chat_history_and_relational_table` WHERE entrepreneur_id='$sender'";

           if($connection){
               
            $result=mysqli_query($connection,$sql);

            while($row = mysqli_fetch_assoc($result)){

                if($rows_of_message= mysqli_fetch_assoc($result))
                    {
                        
                         $_message_rcv=$rows_of_message['message'];
                         $_sender_rcv=$rows_of_message['sender_id'];
                         $_receiver_rcv=$rows_of_message['receiver_id'];
                         
                    }

                    if($_sender_rcv==$sender)
                    {

                    ?>



                            <div class="myconversation">
                                     <h3><?php echo $_message_rcv;?></h3>
                            </div>

                    <?php

                    }else{

                    

                    ?>

                        <div class="history">
                        <h3><?php echo $_message_rcv;?></h3>

                         </div>

                    <?php
                    }
           
       
       
            }     
    
    
    
    }else{

            echo "not connected";
           }
        
        ?>
        
        </div>
        <div class="input-box">
            <form action="send_message.php" method="get">
            <input type="text" name="message" id="messageInput" placeholder="Type your message">
            <input type="submit" name="sendmessage" class="send">
            </form>
        </div>
    </div>
    
    <!-- <script src="all_js/script.js"></script> -->
</body>
</html>





<?php






if(isset($_REQUEST['chat_button']))
{
 
    echo $_SESSION['receiver'];}


?>

