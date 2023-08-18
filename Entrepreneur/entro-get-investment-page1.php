
<?php session_start();



if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="all_css/get_investment1.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <style>
              

              </style>

    </head>

    <body>

        <header>
            <div class="logo-container">
              <h1>Investor<span>Seeker</span></h1>
            </div>
            <div class="exit-container">
              <a href="investor_showProfile_first_Get_start.php">Exit</a>
            </div>
          </header>

          <div id="progress-container">
            <div id="progress-bar"></div>
          </div>

          
<br>

<script>
var i = 1;
var width=1;

function move(a) {
  var elem = document.getElementById("progress-bar");

    if(a==5){
      i++;
    }else if(a==2){
      i--;
    }

    width = i*33.33;
    elem.style.width = width + "%";


}
</script>


              
        <section id="get-investment">
            <div class="container">
              <h2>Get Investment Today</h2>
              <h3>Join with Some Talented Investors</h3>
              <form id="investment-form" method="post" enctype="multipart/form-data">
                <div class="step step-one">
                  <h4>Step 1: Basic Information</h4>
                  <label for="name">Entrepreneur Name</label>
                  <input type="text" id="name" name="name" required>
                  <label for="company-name">Company Name</label>
                  <input type="text" id="company-name" name="company-name" required>
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" required>
                  <label for="phone">Phone</label>
                  <input type="tel" id="phone" name="phone" required>
                  <button onclick="move(5)" type="button" class="next-button">Next</button>

                </div>
                <div class="step step-two">
                  <h4>Step 2: Business Details</h4>
                  <label for="industry">Industry</label>
                  <input type="text" id="industry" name="industry" required>
                  <label for="location">Location</label>
                  <input type="text" id="location" name="location" required>
                  <label for="revenue">Revenue</label>
                  <input type="text" id="revenue" name="revenue" required>

                  <label for="revenue">Last Month sell</label>
                  <input type="text" id="lmonthsell" name="lmonthsell" required>

                  <label for="revenue">Last year Sell</label>
                  <input type="text" id="lyear sell" name="lyearsell" required>


                  <label for="revenue">Total sell</label>
                  <input type="text" id="totalsell" name="totalsell" required>

                  

                  <button onclick="move(2)" type="button" class="prev-button">Previous</button>
                  <button onclick="move(5)" type="button" class="next-button">Next</button>

                </div>
                <div class="step step-three">
                  <h4>Step 3: Investment Requirements</h4>
                  <label for="investment-amount">Amount of Investment Required</label>
                  <input type="text" id="investment-amount" name="investment-amount" required>

                  <label for="investment-amount">Equity Offer</label>
                  <input type="text" id="Eoffer" name="Eoffer" required>


                  <label for="investment-amount">Amount of Investment Required</label>
                  <input type="text" id="investment-amount" name="investment-amount" required>


                  <label for="investment-purpose">Purpose of Investment</label>
                  <input type="text" id="investment-purpose" name="investment-purpose" required>
                  <div class="file">
                  <label for="pitch-deck">Pitch Deck</label>
                  <input type="file" id="pitch-deck" name="pitch-deck">
                  </div>
                  <button onclick="move(2)" type="button" class="prev-button">Previous</button>
                  <button type="submit" name="submit" class="submit-butn">Submit</button>
                </div>
              </form>
            </div>
          </section>
          <!-- <?php
//   if (isset($_POST['submit'])) {
//     // Check for empty fields
//     if (empty($_POST['name']) || empty($_POST['company-name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['industry']) || empty($_POST['location']) || empty($_POST['revenue']) || empty($_POST['lmonthsell']) || empty($_POST['lyearsell']) || empty($_POST['totalsell']) || empty($_POST['investment-amount']) || empty($_POST['Eoffer']) || empty($_POST['investment-purpose'])) {
//       echo "Please fill all the required fields!";
//     } else {
//       // Check if the email is valid
//       if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
//         echo "Invalid email format!";
//       } else {
//         // Check if the phone number is valid
//         if (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
//           echo "Invalid phone number format!";
//         } else {
//           // You can add additional validations here as per your requirements
//           // If all the fields are valid, do further processing here
//           // For example, you can send an email or store the form data in a database
//         }
//       }
//     }
//   }
// ?> -->


          <?php
          $connnection = mysqli_connect('localhost','root','','project_investor_seeker_db');

// Check connection
if (!$connnection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process form data
if(isset($_REQUEST['submit'])){
    $idea_companyName = mysqli_real_escape_string($connnection,$_REQUEST["company-name"]);
    $idea_email = mysqli_real_escape_string($connnection,$_REQUEST["email"]);
    $idea_location = mysqli_real_escape_string($connnection,$_REQUEST["location"]);
    $idea_revenue = mysqli_real_escape_string($connnection,$_REQUEST["revenue"]);
    $idea_lastMSell = mysqli_real_escape_string($connnection,$_REQUEST["lmonthsell"]);
    $idea_lastYSell = mysqli_real_escape_string($connnection,$_REQUEST["lyearsell"]);
    $idea_totalSell = mysqli_real_escape_string($connnection,$_REQUEST["totalsell"]);
    $idea_amountofInvestmentRequired = mysqli_real_escape_string($connnection,$_REQUEST["investment-amount"]);
    $entrepreneurName = mysqli_real_escape_string($connnection,$_REQUEST["name"]);
    
    // Insert data into the database
    $sql = "INSERT INTO `entcardinfo`(`companyName`, `email`, `location`, `revenue`, `lastMSell`, `lastYSell`, `totalSell`, `amountofInvestmentRequired`, `name`) 
    VALUES ('$idea_companyName','$idea_email','$idea_location','$idea_revenue','$idea_lastMSell','$idea_lastYSell','$idea_totalSell','$idea_amountofInvestmentRequired','$entrepreneurName')";
   $result=mysqli_query($connnection,$sql);
   if ($result){
    //header("location:entCard.php?inserted");
 }else{
     echo "not inserted";
 }
}

// Close the database connection
mysqli_close($connnection);
?>




          <script>
            const form = document.querySelector('#investment-form');
            const prevButtons = document.querySelectorAll('.prev-button');
            const nextButtons = document.querySelectorAll('.next-button');
            const steps = form.querySelectorAll('.step');

             let currentStep1 = 0;


function showStep(stepIndex) {
  steps[currentStep1].classList.remove('active');
  steps[stepIndex].classList.add('active');
  currentStep1 = stepIndex;
  updateButtons();
}


function updateButtons() {
  if (currentStep1 === 0) {
    prevButtons[0].disabled = true;
  } else {
    prevButtons[0].disabled = false;
  }

  if (currentStep1 === steps.length - 1) {
    nextButtons[0].style.display = 'none';
    form.querySelector('button[type="submit"]').style.display = 'inline-block';
  } else {
    nextButtons[0].style.display = 'inline-block';
    form.querySelector('button[type="submit"]').style.display = 'none';
  }
}


function nextStep() {
  showStep(currentStep1 + 1);
}


function prevStep() {
  showStep(currentStep1 - 1);
}


nextButtons.forEach(button => {
  button.addEventListener('click', nextStep);
});

prevButtons.forEach(button => {
  button.addEventListener('click', prevStep);
});


          showStep(0);
          updateButtons();

          </script>
          
          <script>
           
            </script>




          
          

    </body>
</html>