

<head>
            <meta charset="UTF-8"/>
              <!-- <link rel="stylesheet" href="stylehome1.css"/>  -->
            <link rel="stylesheet" href="header_css.css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    /* .saction-for-nav-page {
  background-color: var(--primary-color);
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
  height: 10vh;
  width: 100%;
  background-image: url(home_picture/top_cover4.j);
  background: blue;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  animation: change 5s infinite;
  transition: 1s; 
  
} */

    </style>
</head>


<body>


<section class="saction-for-nav-page">

<div class="navigartion sticky">
       
       
      <div class="logo">
 <a href="#">Investor<span class="logo-span">Seeker</span></a>
           </div>

          
       <ul class="links">
            <li><a href="home.php">Home</a></li>
            <li><a href="AboutUs.php">About</a></li>
            <li><a href="ContactUS.php">Contact</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="team.php">Team</a></li>
       </ul>
    

       
       <div class="toog_btn">

    <button onclick="location.href='loginForm.php'" class="sign-up-button">Sign In</button>
      
    
       <i class="fa-solid fa-bars"></i>
    </div>


  </div>
    <div class="dropdown_menu">

            <li><a href="home.php">Home</a></li>
            <li><a href="AboutUs.php">About</a></li>
            <li><a href="ContactUS.php">Contact</a></li>
            <li><a href="service.php">Services</a></li>
            <li><a href="team.php">Team</a></li>
     <li><button class="sign-up-button button">Sign In</button></li>

  </div>

  

 
  <!-- <main>
     <section id="hero">
         <h1>Welcome to The</h1>
         <p>The Investor seeker</p>
     </section>
   </main> -->

</section> 

</body>
</html>

<script>
 const toggleBtn=document.querySelector('.toog_btn');
 const toggleIcn=document.querySelector('.toog_btn i');
 const dropdownMenu=document.querySelector('.dropdown_menu');

 toggleBtn.onclick = function()
 {
     dropdownMenu.classList.toggle('open')
     const isOpen=dropdownMenu.classList.contains('open')
     toggleIcn.classList=isOpen
     ?'fa-solid fa-xmark'
     :'fa-solid fa-bars'

     
 }
 
</script>

<script>
window.addEventListener("scroll", function() {
    var navigation = document.querySelector("navigartion"); // Use "nav" instead of "navigartion"
    navigation.classList.toggle("sticky", window.scrollY > 0);
});
</script>