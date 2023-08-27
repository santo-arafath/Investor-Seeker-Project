<?php
session_start();
if(!isset($_SESSION['useRname']))
{
  header("location:../Home/loginForm.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="all_css/business_details_Style.css">
  <link rel="stylesheet" href="all_css/investor_home_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Investment Opportunity</title>
</head>
<body>
<?php require "include/inv_header.php";

require "../Admin/includes/configure.php";
    
    if(!$connnection){
         die("not connected".mysqli_error());
    }else{
           

          if(isset($_REQUEST['id'])){
            $rcv_id=$_REQUEST['id'];
            $query = "SELECT * FROM `card_information_all` WHERE `id` = '$rcv_id'";

        $result=mysqli_query($connnection,$query);



        $count=mysqli_num_rows($result);

        if($count>0){

           
                   
                   $row=mysqli_fetch_assoc($result);
                  
                        $id=$row['id'];
                        $card_photoo=$row['card-photo'];
                        $company_name=$row['company-name'];
                        $investment_purpose=$row['investment-purpose'];




    // $entrepreneurName = $row["name"];
    // $entrepreneurPost = $row["Entrepreneur-post"]);
    // $entrepreneurEducation =$row["education"]);
    // $idea_email = $row["email"]);
    // $idea_phone = $row["phone"]);
    // $idea_Business_type = $row["Business-type"]);
    // $idea_companyName = $row["company-name"]);
    // $idea_location = mysqli_real_escape_string($connnection,$_REQUEST["location"]);
    // $idea_descrioption = mysqli_real_escape_string($connnection,$_REQUEST["product-description"]);
    // $idea_Product_usecase_1 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-1"]);
    // $idea_Product_usecase_2 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-2"]);
    // $idea_Product_usecase_3 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-3"]);
    // $idea_Product_usecase_4 = mysqli_real_escape_string($connnection,$_REQUEST["product-usecase-4"]);
    // $idea_revenue = mysqli_real_escape_string($connnection,$_REQUEST["revenue"]);
    // $idea_lastMSell = mysqli_real_escape_string($connnection,$_REQUEST["lmonthsell"]);
    // $idea_lastYSell = mysqli_real_escape_string($connnection,$_REQUEST["lyearsell"]);
    // $idea_totalSell = mysqli_real_escape_string($connnection,$_REQUEST["totalsell"]);
    // $idea_amountofInvestmentRequired = mysqli_real_escape_string($connnection,$_REQUEST["investment-amount"]);
    // $idea_Equity_offer = mysqli_real_escape_string($connnection,$_REQUEST["Eoffer"]);
    // $idea_Investment_purpose = mysqli_real_escape_string($connnection,$_REQUEST["investment-purpose"]);
    // $idea_Goal = mysqli_real_escape_string($connnection,$_REQUEST["goal"]);

    $cardHtml = 

       '<h1>Your Busines details</h1>
       <div class="container-main">
                       <div class="fullpage">
        
                               <div class="investment-page">
                                    <div class="ideaimg">


                                           <img src="../Entrepreneur/all_pictures/card-cover-photo/' . $row['cover-photo'] . '">
                                   </div>
      
                              <div class="entrepreneur-section">
                                 <div class="entrepreneur-photo">
                                      <img src="../Home/entroProfile/'. $row['entro-photo'] .'" alt="Entrepreneur Photo">
                                 </div>
                                      <div class="entrepreneur-bio">
                                           <h2>' . $row['name'] . '</h2>
                                            <h3>' . $row['education'] . '</h3>
                                             <h3>' . $row['email'] . '</h3>
                                             <h3>' . $row['phone'] . '</h3>

                 <p>' . $row['entrepreneur-post'] . '.</p>
           </div>
        <div class="company-logo">
            <img src="../Entrepreneur/all_pictures/company_logo/'.$row['company-logo'].'" alt="Company Logo">
          </div>
      </div>

                                 <div class="business-details">
                                 <h2>Business Details</h2>
                                         <h4>BusinessType: ' . $row['business-type'] . '</h4>
                                         <h4>Company name : ' . $row['company-name'] . '</h4>
                                          <h4>Location : ' . $row['location'] . '</h4>


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
    </div>';
                        
                   }}} 
     echo $cardHtml;             ?>
         
            
            


    <div class="fullpage">
        
    <div class="investment-page">
        <div class="ideaimg">


        <img src="photo/idea.png">
           </div>
      
      <div class="entrepreneur-section">
        <div class="entrepreneur-photo">
          <img src="photo/pic.jpeg" alt="Entrepreneur Photo">
        </div>
        <div class="entrepreneur-bio">
          <h2>John Doe</h2>
          <p>Serial entrepreneur with a track record of successful ventures in tech and finance.</p>
        </div>
        <div class="company-logo">
            <img src="photo/logo.jpg" alt="Company Logo">
          </div>
      </div>
      <div class="business-details">
        <h2>Business Details</h2>
        <p>We are launching an innovative AI-powered financial management platform that will revolutionize personal finance. Our platform will offer users:</p>
        <ul>
          <li>Smart budgeting and expense tracking using machine learning algorithms.</li>
          <li>Personalized investment recommendations based on individual financial goals.</li>
          <li>Real-time portfolio analysis and risk assessment.</li>
          <li>Automated savings strategies to help users achieve their financial milestones.</li>
        </ul>
        <p>This platform has the potential to disrupt the traditional financial advisory industry and empower individuals to take control of their financial futures.</p>
        <p>Amount of Investment Required: $2,000,000</p>
        <button class="invest-button">Invest Now</button>
        <button class="Not-inteerested invest-button">Not Intarested</button>
      </div>
    </div>
</div>

</div>
</div>
  </body>
  </html>


  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
            <script>
             const toggleBtn=document.querySelector('.toog_btn');
             const toggleIcn=document.querySelector('.dott');
             const dropdownMenu=document.querySelector('.dropdown_menu');

             toggleBtn.onclick = function()
             {
               
                 dropdownMenu.classList.toggle('open')
                 const isOpen=dropdownMenu.classList.contains('open')
                 toggleIcn.classList=isOpen
                 ?'cross-outline'
                 :'menu-outline'

                 
             }
             
            </script> 


<script>
const toggleBtn_pro=document.querySelector('.user');

const dropdownMenu_pro=document.querySelector('.dropdown_menu-profile');

toggleBtn_pro.onclick = function()
{
 dropdownMenu_pro.classList.toggle('onhoise')

}