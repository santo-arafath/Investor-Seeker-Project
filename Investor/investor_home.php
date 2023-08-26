<?php 

session_start();

if(!isset($_SESSION['useRname']))
{
  header("location:../Home/loginForm.php");
}

?>


<!DOCTYPE html>
<html>
    <html lang="en-us">
    <head>
       <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="all_css/investor_home_style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    </head>



    <body>
      
       
    <?php require "include/inv_header.php";?>

    <!-- main body start --------------------------------------------------------------------------- -->
               

                   <div class="main_body_f">
                    <div class="container1">
    
                     
                          
                            <div class="get-starts">
                                <h1>Apply to Get Investment</h1>
                                <input onclick="location.href='entro-get-investment-page1.php'" type="submit" class="get-starts-button" value="Get Start">

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


                <!-- --------------------------------------------------------------------------------------- -->

                       <!-- 1st page 1 start -->

 <div class="First_page_investor_mian">
    <h2>Unlock Investment Opportunities</h2>
    <p>Discover a diverse range of investment opportunities on our platform. Explore startups, businesses, and ventures seeking investment partners.</p>
    <div class="boxmian">
        <h3>Grow Your Portfolio with Promising Ventures</h3>
        <p>Explore a variety of investment options and diversify your portfolio with startups and ventures across different industries. Invest in innovative projects that have the potential for substantial returns.</p>
        
        <div class="swiper-container container">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide">
                    <div class="card">
                        <img src="photo/bus4.jpg" alt="Image 1">
                        <div class="bottom">
                            <h2>Daraz</h2>
                            <p class="par">We Are looking for the best deal for our startup</p>
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
                <!-- Repeat this swiper-slide for each card -->
                <div class="swiper-slide">
                  <div class="card">
                      <img src="photo/bus4.jpg" alt="Image 1">
                      <div class="bottom">
                          <h2>Daraz</h2>
                          <p class="par">We Are looking for the best deal for our startup</p>
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
                
                <!-- Repeat this swiper-slide for each card -->
                <div class="swiper-slide">
                  <div class="card">
                      <img src="photo/bus4.jpg" alt="Image 1">
                      <div class="bottom">
                          <h2>Daraz</h2>
                          <p class="par">We Are looking for the best deal for our startup</p>
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
                <!-- Repeat this swiper-slide for each card -->
                <div class="swiper-slide">
                  <div class="card">
                      <img src="photo/bus4.jpg" alt="Image 1">
                      <div class="bottom">
                          <h2>Daraz</h2>
                          <p class="par">We Are looking for the best deal for our startup</p>
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
                <!-- Repeat this swiper-slide for each card -->
                <div class="swiper-slide">
                  <div class="card">
                      <img src="photo/bus4.jpg" alt="Image 1">
                      <div class="bottom">
                          <h2>Daraz</h2>
                          <p class="par">We Are looking for the best deal for our startup</p>
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
                <!-- Repeat this swiper-slide for each card -->
                <div class="swiper-slide">
                  <div class="card">
                      <img src="photo/bus4.jpg" alt="Image 1">
                      <div class="bottom">
                          <h2>Daraz</h2>
                          <p class="par">We Are looking for the best deal for our startup</p>
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
                <!-- Repeat this swiper-slide for each card -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
        <!-- Card End -->
    </div>
</div>
<!-- 1st page 1 end-->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 2nd page start  -->

<div class="anotherSecondpage">

    <h2>How learners like you are achieving their goals</h2>
         <div class="boxes">
          <div class="box1">
            <h3>"@"</h3>
             <p>
              I am proud to say that after a few months of taking this course...I
               passed my exam and am now an AWS Certified Cloud Practitioner! This 
               content was exactly what the CCP exam covered.</p>
               <p> (AF) asif fuad</p>
               <div class="fott">
                <a href="#">freshen up on my product manager skills and land a job at</a>
               </div>
          </div>

          <div class="box1">
            <h3>"@"</h3>
             <p>
              I am proud to say that after a few months of taking this course...I
               passed my exam and am now an AWS Certified Cloud Practitioner! This 
               content was exactly what the CCP exam covered.</p>
               <p> (AF) asif fuad</p>
               <div class="fott">
                <a href="#">freshen up on my product manager skills and land a job at</a>
               </div>
          </div>

          <div class="box1">
            <h3>"@"</h3>
             <p>
              I am proud to say that after a few months of taking this course...I
               passed my exam and am now an AWS Certified Cloud Practitioner! This 
               content was exactly what the CCP exam covered.</p>
               <p> (AF) asif fuad</p>
               <div class="fott">
                <a href="#">freshen up on my product manager skills and land a job at</a>
               </div>
          </div>
        </div>

      

    </div>
<!-- 2nd page  end -->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->
           <!-- 3rd vies page start  -->
 <div class="third_3rd_page_new">

    <h2>Investor are investing</h2>
    <div class="boxes2">

      <div class="swiper-container container">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="card">
                    <img src="photo/bus4.jpg" alt="Image 1">
                    <div class="bottom">
                        <h2>Daraz</h2>
                        <p class="par">We Are looking for the best deal for our startup</p>
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
            <!-- Repeat this swiper-slide for each card -->
            <div class="swiper-slide">
              <div class="card">
                  <img src="photo/bus4.jpg" alt="Image 1">
                  <div class="bottom">
                      <h2>Daraz</h2>
                      <p class="par">We Are looking for the best deal for our startup</p>
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
            
            <!-- Repeat this swiper-slide for each card -->
            <div class="swiper-slide">
              <div class="card">
                  <img src="photo/bus4.jpg" alt="Image 1">
                  <div class="bottom">
                      <h2>Daraz</h2>
                      <p class="par">We Are looking for the best deal for our startup</p>
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
            <!-- Repeat this swiper-slide for each card -->
            <div class="swiper-slide">
              <div class="card">
                  <img src="photo/bus4.jpg" alt="Image 1">
                  <div class="bottom">
                      <h2>Daraz</h2>
                      <p class="par">We Are looking for the best deal for our startup</p>
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
            <!-- Repeat this swiper-slide for each card -->
            <div class="swiper-slide">
              <div class="card">
                  <img src="photo/bus4.jpg" alt="Image 1">
                  <div class="bottom">
                      <h2>Daraz</h2>
                      <p class="par">We Are looking for the best deal for our startup</p>
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
            <!-- Repeat this swiper-slide for each card -->
            <div class="swiper-slide">
              <div class="card">
                  <img src="photo/bus4.jpg" alt="Image 1">
                  <div class="bottom">
                      <h2>Daraz</h2>
                      <p class="par">We Are looking for the best deal for our startup</p>
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


           
    </div> <!-- swiper-container end -->
   


      
</div><!-- swiper-wrapper end -->


</div>
</div>
<!-- 3rd vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 5th vies page start   -->

<div class="fifth_5th_page_new_container">
    <div class="mianBox">
        <div class="text_side_right">
            <h1><span>Investor</span> Seeker</h1>
            <h3>Upskill your team with Udemy Business</h3>
            <h2>Unlock access to a world of investment opportunities:</h2>
            <ul>
                <li>Explore a diverse range of potential investments</li>
                <li>Gain insights into emerging markets</li>
                <li>Access expert analysis and recommendations</li>
                <li>Stay updated on financial trends and opportunities</li>
            </ul>
            <div class="buttonn">
                <input type="button" value="Get Started">
                <input type="button" value="Learn More">
            </div>
        </div>
        <div class="image_side_left">
            <img src="photo/nus9.jpg" alt="Investor Seeker">
        </div>
    </div>
</div>

  <!-- 5th vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->
    <!-- --------------------------------------------------------------------------------------- -->

    <!-- 4rd vies page start  -->
<div class="fourth_4rd_page_new">
    <h2 class="min">Top categories</h2>
<div class="boxesss">
<div class="boxesspart1">
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-laptop"></i>
        </div>
        <h2>Tech & Software</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <h2>E-Commerce</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-heartbeat"></i>
        </div>
        <h2>Healthcare</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-chart-line"></i>
        </div>
        <h2>Finance</h2>
    </div>
</div>
<div class="boxesspart1">
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-leaf"></i>
        </div>
        <h2>Energy & Sustainability</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-film"></i>
        </div>
        <h2>Entertainment & Media</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-utensils"></i>
        </div>
        <h2>Food & Beverage</h2>
    </div>
    <div class="businesscatagories">
        <div class="logo">
            <i class="fas fa-building"></i>
        </div>
        <h2>Real Estate</h2>
    </div>
</div>
</div>
</div>
<!-- 4rd vies page end  -->
    <!-- --------------------------------------------------------------------------------------- -->

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
                    <img src="../Entrepreneur/all_pictures/john.webp" alt="Entrepreneur photo">
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
                    <img src="../Entrepreneur/all_pictures/right.jpg"  calt="Left Image">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed efficitur quam, nec semper arcu. Praesent sit amet velit at nulla maximus congue quis in tellus. Donec sed nulla ligula. Ut aliquet velit vel lorem tristique lacinia
                    Nullam vitae odio vitae magna aliquam laoreet eget vel eros. In sit amet risus et velit aliquam facilisis a sed est. Duis vitae quam vel arcu ultrices accumsan.</p>
                    <img src="../Entrepreneur/all_pictures/right.jpg" alt="Right Image">
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


                <?php require "../Entrepreneur/footer.php";?>
        <!-- ---------------------------------------------------------------------------------------- -->

            </div>  <!-- header mian  end -->
        
              
        </div> <!-- header home-loged  end -->
        
        
        


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



</script> 

<script>
    var num=3;
  var swiper = new Swiper('.swiper-container', {
      loop: true,
      slidesPerView: num, 
      spaceBetween: 20, 
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      pagination: {
          el: '.swiper-pagination',
          clickable: true,
      },
  });
</script>