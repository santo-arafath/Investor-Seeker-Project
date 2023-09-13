

<head>
            <meta charset="UTF-8"/>
              <!-- <link rel="stylesheet" href="css/practice_style.css"/>  -->
            <!-- <link rel="stylesheet" href="header_css.css"/> -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    
}
 html, body{
   height: 100%;
   width: 100%;
}

.nav{
background-color:black;
color:white;
height: 100px;
width: 100%;
display: flex;
justify-content: space-between;
align-items: center;
padding: 0px 20px;

position: fixed;
z-index: 99;
}
.item ul{

display: flex;
justify-content: space-between;
align-items: center;
list-style: none;
gap:5vw;
}

input[type=submit]
{
background-color: orange;
border: none;
height: 40px;
width: 80px;
border-radius: 10px;
}
input[type=submit]:hover{
scale: 1.08;
background-color: rgb(202, 135, 10);

}

.nav h2{
font-size: 2vmax;
}

.nav .item a{
  list-style: none;
  text-decoration: none;
}

.nav li a{
font-size: 1.3vmax;
color:white;
}
.nav .item a:hover, .nav .item li:hover ,.nav h2:hover,.nav i:hover{
scale: 1.08;
color: orange;
}

.nav i{

  font-size: 20px;
  display:none;
}
.dropdown_menu{
  display: none;
  position: fixed;
  left: 2rem;
  top: 100px;
  height: 0px;
  width: 300px;
  background: rgba(222, 12, 12, 0.3);
  backdrop-filter: blur(15px);
  border-radius: 10px;
  overflow: hidden;
  transition: height 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  z-index: 120;
 }

 .open{
       
    height: 290px;
       
 } 

 .dropdown_menu li{
         padding: 0.7rem;
         display: flex;
         align-items: center;
         justify-content: center;
         color: white;
 }


 .dropdown_menu a{
 color:white;
  list-style: none;
  text-decoration: none;
 }

 .dropdown_menu a:hover{
  scale:1.08;
  color:orange;
 }
 .dropdown_menu button:hover{
   scale:1.08;
 }
 

 

 button{
  background-color: orange;
  width: 200px;
  color: #fff;
  padding: 0.5rem 1rem;
  border: none;
  outline: none;
  border-radius: 20px;
  font-size: 0.8rem;
  font-weight: bold;
  cursor: pointer;
  transition: scale .2 ease;
  
} 

@media(max-width: 992px)
{
  
  
  
  .navigartion .toog_btn{
    display: block;
  }
  .dropdown_menu{
    display: block;
  }
  .nav h2{
      font-size: 25px;

    }
  
    .nav .item li,
    .nav .item input{
      display: none;
    }
  
    .nav i{
      display: block;
    }
    .dropdown_menu{
      display: block;
    }
    .page2 .page2_text_side_left .email-submit{
      flex-direction: column;
    }

    .page2 .page2_text_side_left .Submit-top,
  .Submit-top{

    float: none;
    margin-top: 15px;
  }

}
.nav .span{
    color: orange;
}
    </style>
</head>


<body>
  


<div class="nav">
      <h2 onclick="location.href='home.php'">Investor<span class="span">Seeker</span></h2>
        <div class="item">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="ContactUS.php">Contact</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="team.php">Team</a></li>
                <input onclick="location.href='loginForm.php'" type="submit" name="sign_in" value="Sign In">
                <div class="toog_btn">
                <i class="fa-solid fa-bars"></i>
                </div>
            </ul>
           
        </div>
    </div>

    <div class="dropdown_menu ">
       <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="AboutUs.php">About</a></li>
                <li><a href="ContactUS.php">Contact</a></li>
                <li><a href="service.php">Services</a></li>
                <li><a href="team.php">Team</a></li>
       <li><button onclick="location.href='loginForm.php'" class="sign-up-button button">Sign In</button></li>
       </ul>
      </div>



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
 

 window.addEventListener("scroll", function() {
  
    var navigation = document.querySelector(".navvigartion");
    if (navigation) {
        navigation.classList.toggle("sticky", window.scrollY > 0);
    }
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" integrity="sha512-16esztaSRplJROstbIIdwX3N97V1+pZvV33ABoG1H2OyTttBxEGkTsoIVsiP1iaTtM8b3+hu2kB6pQ4Clr5yug==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" integrity="sha512-Ic9xkERjyZ1xgJ5svx3y0u3xrvfT/uPkV99LBwe68xjy/mGtO+4eURHZBW2xW4SZbFrF1Tf090XqB+EVgXnVjw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <script src="js/practice_script.js"></script>   

</body>
</html>
