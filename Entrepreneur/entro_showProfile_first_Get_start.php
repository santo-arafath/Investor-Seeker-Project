<?php session_start();



if(!isset($_SESSION['usrName']))
{
  header("location:../Home/loginForm.php");
}

       
       $profile_pic=$_SESSION['photo_show_entro'];
      //  echo $_SESSION['photo_show_entro'];


       

?>


<!DOCTYPE html>
<html>
    <html lang="en-us">
    <head>
       <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="all_css/entro_main_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>



    <body>
                   <!-- navbar strat -->
             
                   <div class="home-loged">

                   <div class="main">
                    <div class="topbar">
                      <div class="toog_btn">
                        <ion-icon class ="dot" name="menu-outline"></ion-icon>
                          
                      </div>

                      <div class="dropdown_menu">
                        <form name="test" action="" method="get">
                            <div class="dropsearch" >
                                <label>
                                    
                                    <input type="text" placeholder="Search here" name="searchitem">
                                    <a href="#" name="search-button">
                                    <ion-icon name="search-outline"></ion-icon>
                                    </a>
                                    
                                </label>
                            </div>
      
      
                            </form>
                        <li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notification</a></li>
                        <li><a href="entCard.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>Cards</a></li>
                        <li><a href="#"><ion-icon class="ic" name="server-outline"> </ion-icon>My posts</a></li>
                        
                        <li><button class="sign-out-button button">Sign out</button></li>
                     </div>
          
                      <div class="logo">
                      <h2>Investor<span>Seeker</span><h2>
                      </div>
                     
          
                      <!-- search -->
                       <form name="test" action="" method="get">
                      <div class="search" >
                          <label>
                              
                              <input type="text" placeholder="Search here" name="searchitem">
                              <a href="#" name="search-button">
                              <ion-icon name="search-outline"></ion-icon>
                              </a>
                              
                          </label>
                      </div>


                      </form>


                      


          
                      <!-- <script>
                document.onkeydown=function(evt){
                  var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
                  if(keyCode == 13)
                  {
                      //your function call here
                      document.test.submit();
                  }
                       }
                    </script> -->
          
            <div class="logos">            

          <ul class="list">

                        <li><a href="#"><ion-icon class="ic" name="notifications-outline"></ion-icon>Notification</a></li>
                        <li><a href="entCard.php"><ion-icon class="ic" name="logo-bitbucket"></ion-icon>Cards</a></li>
                        <li><a href="#"><ion-icon class="ic" name="server-outline"> </ion-icon>My posts</a></li>
            
        
           </ul>

            </div>
          
          
                         

                           
                           
                          <div class="user">
                               
                              <!-- <img  src="all_pictures/santo.jpg"> -->
                              <img width="50px"; src="../Home/entroProfile/<?php echo $profile_pic;?>">

          
                          </div>

                       <!-- drop down profile -->

                       <div class="dropdown_menu-profile">
                            <div class="submenu">

                        <div class="user-info">
                               
                        <img width="50px"; src="../Home/entroProfile/<?php echo $profile_pic;?>">

                            <h2><a href="profile_entro_details.php">Arafath Hossen Santo</a></h2>
        
                        </div>

                        <hr>

                <!-- <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#">Card</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        <li><a href="#">My post</a></li>
                        
                        <li><button class="sign-out-button button">Sign out</button></li>

                    </ul> -->
                    <div class="item">
    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="search-outline"></ion-icon></a>
        <a>Company Details</a>
        <a></a>
    </div>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="business-outline"></ion-icon></a>
        <a>Business Details</a>
        <a></a>
    </div>

    <hr>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="cash-outline"></ion-icon></a>
        <a>Reveneu</a>
    </div>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="calendar-outline"></ion-icon></a>
        <a>Fiscal year</a>
    </div>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="wallet-outline"></ion-icon></a>
        <a>Profit</a>
    </div>

    <hr>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="people-outline"></ion-icon></a>
        <a>Team Details</a>
    </div>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="document-outline"></ion-icon></a>
        <a>Proposals</a>
    </div>

    <div class="userdetails-in-profile sobclass">
        <a><ion-icon name="time-outline"></ion-icon></a>
        <a>Investment History</a>
    </div>

    <hr>

    <div class="userdetails-in-profile sobclass">
        <a href="signout_entro.php"><ion-icon name="log-out-outline"></ion-icon></a>
        <a href="signout_entro.php">Sign Out</a>
    </div>
</div>

                     </div>
                    </div>
          
                       <!-- drop down profile end-->
                         


                   </div>
                

                   <div class="main_body_f">
                    <div class="container1">
    
                     
                          
                            <div class="get-starts">
                                <h1>Apply to Get Investment</h1>
                                <input onclick="location.href='entro-get-investment-page1.php'" type="submit" class="get-starts-button" value="get started">
                           
                    </div>
                </div>
                  </div>

                <div class="secondpage1">
                    <div class="pagelayoutBox">
                        <div class="heading">
                              <h1>So many reason To start Investment</h1>
                        </div>

                        <div class="box">
                            <div class="box1">
                                <ion-icon name="bulb-outline"></ion-icon>
                                <h3>Share your idea</h3>
                                    <a>Get huge investments with amazing ideas</a>
                            </div>

                            <div class="box1">
                                <ion-icon name="logo-usd"></ion-icon>
                                <h3>Get the Money </h3>
                                    <a>we have thousend of investor those who invested over 500 startup</a>
                            </div>

                            <div class="box1">
                                <ion-icon name="trophy-outline"></ion-icon>
                                <h3>Get Rewards 
                                    </h3>
                                    <a>Get stunning rewards by visiting out website </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second page end -->

                <!-- 3rd -->

                <div class="third1">
                    <div class="trdbox">
                        <div class="part">
                        

                        <div class="boxes1">
                            <h1>57K</h1>
                            <h3>Investors</h3>
                        </div>

                        <div class="boxes1">
                            <h1>105K</h1>
                            <h3>Entrepreneur</h3>
                        </div>
                    </div>

                    <div class="part">
                        <div class="boxes1">
                            <h1>700K</h1>
                            <h3>Daily Visits</h3>
                        </div>

                        <div class="boxes1">
                            <h1>50K</h1>
                            <h3>Comments</h3>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- 3rd end-->





                <!-- 4th -->

                <section>
                  <header>
                    <h1 style="font-size: 40px;">How to Begin</h1>
                  </header>
                  <div class="steps-container">
                    <div class="step">
                      <h3>Provide Your Business Details</h3>
                      <p>Fill out our online form with your business 
                        information, including details about your products
                         or services, target market, and funding needs. 
                         This will help us understand your business and match you with the right investors.</p>
                    </div>
                    <div class="step">
                      <h3>Send the Request</h3>
                      <p>Once you've provided your business details,
                         we'll send your request to our network of investors.
                          We'll also provide you with a dashboard where you
                           can track your request and manage any offers that come in.</p>
                    </div>
                    <div class="step">
                      <h3>Get Investment</h3>
                      <p>After submitting your request, you'll start 
                        receiving offers from investors who are interested 
                        in funding your business. You'll have the opportunity 
                        to review each offer and communicate directly with the 
                        investors to negotiate terms. Once you've accepted an offer, 
                        the investor will transfer funds to your account, and you can 
                        begin using the funds to grow your business.</p>
                    </div>
                  </div>
                </section>
                
                <!-- 4th -->



                <!-- 5th -->

                <section class="fifthpage">
                  <div class="testimonial-container">
                    <img src="all_pictures/john.webp" alt="Entrepreneur photo">
                    <div class="testimonial-details">
                      <h3>John Doe</h3>
                      <p>"Investor Seeker was a game-changer for my business. With their help, I was able to connect with investors who believed in my vision and provided the funding I needed to take my company to the next level. Their platform made the process simple and straightforward, and I'm grateful for their support."</p>
                      <p>Before using Investor Seeker, I was struggling to find the funding I needed to grow my business. I spent countless hours searching for investors and pitching my ideas, but I wasn't making any progress. That's when I discovered Investor Seeker, and everything changed.</p>
                      <p>The platform was easy to use, and it helped me create a profile that showcased my business and my vision. I was able to provide all the information investors needed to understand my business and see its potential. Investor Seeker also provided tools to help me manage the process, including a dashboard where I could track my requests and manage offers.</p>
                      <p>Within a few weeks of submitting my request, I started receiving offers from investors who were interested in my business. I was able to review each offer and communicate directly with the investors to negotiate terms. Thanks to Investor Seeker, I was able to secure the funding I needed to take my business to the next level."</p>
                    </div>
                  </div>
                </section>
                
                <!-- 5th -->


                <!-- 6th -->

                <section class="six">
                  <h2>You Won't Have to Do It Again</h2>
                  <div class="image-container">
                    <img src="all_pictures/right.jpg"  calt="Left Image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur quam, nec semper arcu. Praesent sit amet velit at nulla maximus congue quis in tellus. Donec sed nulla ligula. Ut aliquet velit vel lorem tristique lacinia
                    Nullam vitae odio vitae magna aliquam laoreet eget vel eros. In sit amet risus et velit aliquam facilisis a sed est. Duis vitae quam vel arcu ultrices accumsan.</p>
                    <img src="all_pictures/right.jpg" alt="Right Image">
                  </div>
                  <a href="#">Learn More</a>
                </section>
                
                <!-- 6th -->


                <!-- 7th -->

                <section class="get-investment">
                  <div class="container">
                    <h2>Get Investment Today</h2>
                    <h3>Join with Some Talented Investors</h3>
                    <a href="#" class="button">Get Started</a>
                  </div>
                </section>
                
                <!-- 7th -->


                <!-- fotter st -->

                <!-- <footer>
                    <div class="container">


                      <div class="row">
                        <div class="col-lg-3 col-md-6">
                          <div class="footer-box aboutus">
                            <h4>About Us</h4>
                            <p>Investor Seeker is an online platform that connects startups 
                                and entrepreneurs with investors from all around the world. Our 
                                mission is to help startups and entrepreneurs turn their innovative
                                 ideas into successful businesses by providing them with the resources
                                  and guidance they need to thrive. </p>
                            <ul class="social-icons">
                              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="footer-box quicklink">
                            <h4>Quick Links</h4>
                            <ul>
                              <li><a href="#">Home</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Services</a></li>
                              <li><a href="#">Contact Us</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="footer-box contactus">
                            <h4>Contact Us</h4>
                            <ul>
                              <li><i class="fas fa-map-marker-alt"></i> 1234 Main Street, Suite 100</li>
                              <li><i class="fas fa-phone-alt"></i> (123) 456-7890</li>
                              <li><i class="fas fa-envelope"></i> info@investorseeker.com</li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                          <div class="footer-box newsletter">
                            <h4>Newsletter</h4>
                            <p>Subscribe to our newsletter to receive news, updates, and special offers.</p>
                            <form>
                              <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                              </div>
                            </form>
                          </div>
                        </div>

                      </div>  -->
                       <!-- row end -->


                    <!-- </div> -->
                     <!-- container end -->
                  <!-- </footer> -->



                  <?php require "footer.php";?>
                  
                <!-- footer st end-->
  
            </div>

        </div>





            <!--  main body friest page -->

            
            <!--  main body friest end -->
                   <!--  -->

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

    
    
   </script> 



                       


    </body>

        
</html>