
<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

 $sender=$_SESSION['id'];
 $receiver=$_SESSION['receiver'];


 if(isset($_REQUEST['chat_button']))
 {
  
     echo $sender;
     echo $receiver;
    
    }
 
 
 
 
  
  
$connection=mysqli_connect('localhost','root','','project_investor_seeker_db');
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
        <div class="heading">
        <div class="left_side">
            <a href=""> < Back </a>
        </div>

        <div class="image">
            <h2>Arafath hossen santo</h2>
            <img src="website.jpg">
        </div>

        
            
        </div>
        <div class="chat-box" id="chatBox">

        

        <?php 

          
        
          
   if($connection){

           $sql = "SELECT * FROM `chat_history_and_relational_table` WHERE entrepreneur_id='$sender' and  investor_id='$receiver'";

          
               
            $result=mysqli_query($connection, $sql);

            $count=-1;

            while($rows = mysqli_fetch_assoc($result)){
                  
                   $count++;
                         $_message_rcv=$rows['message'];
                         $_sender_rcv=$rows['sender_id'];
                         $_receiver_rcv=$rows['receiver_id'];
                         $_date_rcv=$rows['send_date'];
                         $_time_rcv=$rows['send_time'];
                         

                    
                         if($_sender_rcv==$sender)
                         {
                                    
                                    
                                    ?>



                            <div class="myconversation old">
                            <h6><?php echo $_date_rcv.$_time_rcv ?> </h6>
                                     <h3 onmouseover="showdate(<?php echo $count; ?>)" onmouseout="hidedate(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     <img src="#">
                                     
                            </div>

                          <?php 
                          
                              }else{

                          ?>


                            <div class="myconversation history">
                            <img src="#">
                                     <h3 onmouseover="showdate(<?php echo $count; ?>)" onmouseout="hidedate(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     <h6><?php echo $_date_rcv.$_time_rcv ?> </h6>
                                    
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
            <input type="text" name="message" id="messageInput" placeholder="Type your message" Required>
            <input type="submit" name="sendmessage" class="send">
            </form>
        </div>
    </div>
    
    <!-- <script src="all_js/script.js"></script> -->
</body>
</html>





<?php






?>

<script src="entre_all_js/show_date.js"></script>
