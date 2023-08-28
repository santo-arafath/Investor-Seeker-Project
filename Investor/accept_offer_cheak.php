
<?php
$rcv=$_REQUEST['idtorcv'];
// echo $rcv;

if(isset($_REQUEST['accept-offer']))
{
    // echo "accept";

    

   require "../Admin/includes/configure.php";
   if(!$connnection)
   {
    echo "santo";  
    die("not connected".mysqli_error());
       
   }
   else{
    $_message="Accepted";

    

    $query="UPDATE `card_information_all` SET `status-of-request`  = '$_message' WHERE `card_information_all`.`id` = $rcv";
    $resultt=mysqli_query($connnection,$query);
    if($resultt){
       
       header("location:investor_card_details_show_page.php?id=$rcv");
    echo "accepted4";
                           }else{
                     echo "not Updated";
                                 }
      
                               }
  
               } 
 

?>