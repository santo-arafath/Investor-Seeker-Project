<?php
session_start();?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="all_css/business_details_Style.css">
            <link rel="stylesheet" href="all_css/entro_main_style.css">
            <link rel="stylesheet" href="all_css/cardStyle.css">
            
           <style>
              

              </style>

    </head>

    <body>
    <?php require "include/Header_entro_home.php";?>



<?php

$session_name=$_SESSION['usrName'];
$profile_photo=$_SESSION['photo_show_entro'];




$connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

$result = mysqli_query($connnection, "SELECT * FROM `card_information_all` WHERE username='$session_name'");

$cardHtml = '';

while($row = mysqli_fetch_assoc($result)){


       $cardHtml .= 

       '<h1>Your Busines details</h1>
       <div class="container-main">
                       <div class="fullpage">
        
                               <div class="investment-page">
                                    <div class="ideaimg">


                                           <img src="all_pictures/card-photo/' . $row['card-photo'] . '">
                                   </div>
      
                              <div class="entrepreneur-section">
                                 <div class="entrepreneur-photo">
                                      <img src="../Home/entroProfile/'.$profile_photo.'" alt="Entrepreneur Photo">
                                 </div>
                                      <div class="entrepreneur-bio">
                                           <h2>' . $row['name'] . '</h2>
                                            <h3>' . $row['education'] . '</h3>
                                             <h3>' . $row['email'] . '</h3>
                                             <h3>' . $row['phone'] . '</h3>

                 <p>' . $row['entrepreneur-post'] . '.</p>
           </div>
        <div class="company-logo">
            <img src="logo.jpg" alt="Company Logo">
          </div>
      </div>

                                 <div class="business-details">
                                 <h2>Business Details</h2>
                                         <h3>BusinessType: ' . $row['business-type'] . '</h3>
                                         <h3>Company name : ' . $row['company-name'] . '</h3>
                                          <h3>Location : ' . $row['location'] . '</h3>


                 <p>' . $row['product-description'] . ':</p>
        <ul>
          <li>' . $row['product-usecase-1'] . '.</li>
          <li>' . $row['product-usecase-2'] . '.</li>
          <li>' . $row['product-usecase-3'] . '.</li>
          <li>' . $row['product-usecase-4'] . '.</li>
        </ul>
        <p>' . $row['investment-purpose'] . '.</p>
        <p>Revenue: ' . $row['revenue'] . ' Tk</p>
        <p>Last month sell: ' . $row['last-month-sell'] . ' Tk</p>
        <p>Last year sell: ' . $row['last-year-sell'] . ' Tk</p>
        <p>Last year sell: ' . $row['total-sell'] . ' Tk</p>
        <p>Total sell: ' . $row['total-sell'] . ' Tk</p>
        <p>Amount of Investment Required: ' . $row['investment-amount'] . ' Tk</p>
        <p>Equrty offer: ' . $row['equity-offer'] . ' Tk</p>
        <p>Comapny Goal: ' . $row['goal'] . '</p>
        <p>Request date: ' . $row['date-of-post'] . '</p>
        <button class="invest-button">' . $row['status-of-post'] . '</button>
        <button class="Not-inteerested invest-button">' . $row['status-of-request'] . '</button>
      </div>
    </div>



<br><br>


<h1>Your card :</h1>

<div class="container">
                <div class="slidecontainer">
                    <div class="card">
                        <img src="../Home/entroProfile/'.$profile_photo.'" alt="Image 1">
                        <div class="bottom">
                            <h2>' . $row['company-name'] . '</h2>
                            <p class="par">' . $row['investment-purpose'] . '</p>
                            <div class="rating">
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                                <span class="star">&#9733;</span>
                            </div>
                            <p>Rated: 4.9 out of 5 stars</p>
                            <button class="learn-more-button">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
            </div>';










    

             


              
               
                }//last

                '</div>'
?>
 
    <?php echo $cardHtml; ?>
    <?php require "footer.php";?> 
</body>
</html>
