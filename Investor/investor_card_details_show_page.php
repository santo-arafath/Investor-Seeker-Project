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
<?php require "include/inv_header.php";?>

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