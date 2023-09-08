
<?php
session_start();

if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

 $sender=$_SESSION['id'];
 
//  $receiver=$_SESSION['receiver'];'
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
        <div class="chat-box" id="chatBox">

        <?php 

          
        
          
   if($connection){

           $sql = "SELECT * FROM `chat_history_and_relational_table` WHERE entrepreneur_id='$sender'";

          
               
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



                            <div class="myconversation">
                            <h6><?php echo $_date_rcv.$_time_rcv ?> </h6>
                                     <h3 onmouseover="showdate(<?php echo $count; ?>)" onmouseout="hidedate(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     
                            </div>

                          <?php 
                          
                              }else{

                          ?>


                            <div class="history">
                                     <h3 onmouseover="showdateHistory(<?php echo $count; ?>)" onmouseout="hidedateHistory(<?php echo $count; ?>)"><?php echo $_message_rcv;?></h3><br>
                                     <h6><?php echo $_date_rcv."-".$_time_rcv ?> </h6>
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

<script src="entre_all_js/show_date.js"></script>
