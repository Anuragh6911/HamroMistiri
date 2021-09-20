<?php
session_start();

if(!isset($_SESSION['fullname'])){
 //   header ('location:loginregister.php');
}
?>
<div class="main">
    <header class="topbar">
        <div class="container">
            <div class="icons">
                <a href="#"> <img src="./icons/facebook.svg" alt=""> </a>
                <a href="#"> <img src="./icons/instagram.svg" alt=""> </a>
                <a href="#"> <img src="./icons/twitter.svg" alt=""> </a>
                <a href="#"> <img src="./icons/google.svg" alt=""> </a>
            </div>
            <?php
               if(isset($_SESSION['fullname'])){
                
                echo ' <div class="auth"> <img src="icons/user-icon.svg" alt=""> &nbsp';

                     echo $_SESSION['fullname'];
                   
            }   
            
            else{
                echo ' 
           
                <div>
                    <img src="icons/user-icon.svg" alt="">
                    <a href="loginregister.php"> Log In/ Register</a>
                   ';
                   
            }
            ?>
             <!-- <img src="icons/edit.svg" alt="">
                    <a href="./loginregister.html"> Register Now </a> -->

                </div>
            </div>
        </div>
    </header>

    <nav id="myNav">
        <div class="logo"> Hamro Mistiri </div>
        <ul>
            <li> <a class="active" href="./index.php"> Home </a> </li>
            <li> <a href="./index.php#services"> Services </a> </li>
            <li> <a href="./index.php#section3"> Become a Professional </a> </li>
            <li> <a href="./index.php#about"> About </a> </li>
            <li> <a href="./index.php#subscribe"> Subscribe  </a> </li>
            <li> <a href="./index.php#contact"> Contact </a> </li>
        </ul>
    </nav>
</div>  

<style>
    /* Resets default margin and padding */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.container {
  width: 100%;
  padding: 0 25px;
  margin: 0 auto;
}
/* yo garesi sabai content center ma huncha */

@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}

@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}

@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}

@media (min-width: 1200px) {
  .container {
    max-width: 1152x;
  }
}

header.topbar {
  /* background: #232b38  ; */
  background: #363a40;
  color: #fefefe;
  padding: 0.75rem 0;
}

header.topbar .icons a {
  margin-right: 0.6rem;
}

header.topbar .auth > div a {
  color: #fefefe;
  text-decoration: none;
}

header.topbar .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

header.topbar .container .auth {
  display: flex;
}

.header.topbar .auth .divider {
  padding: 0 1rem;
}

header.topbar .auth > div img {
  margin-right: 0.35rem;
}

/* navigation */
nav {
  height: 80px;
  background:#3d414a;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0px 50px 0px 100px;
  /* top right bottom left */
  position: sticky;
  top: 0;
}
nav .logo {
  background: linear-gradient(255deg, #3d414a 25%, #fea72b 25%);
  margin-left: -98px;
  padding-left:50px;
  padding-right:100px;
  padding-top: 25px;
  padding-bottom: 24px;
  background-color: ;
  font-size: 26px;
  color: #3d3f53;
  font-weight: 600;
}
nav ul {
  display: flex;
  list-style: none;
}
nav ul li a {
  color: #fafafa;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  padding: 30px 10px;
  border-radius: 0px;
  transition: all 0.3s ease;
}
nav ul li {
  margin: 0px 5px;
}
nav ul li a:hover {
  color: #fea72b;
  /* background-color: #ee9a25; */
}
nav ul li a.active {
  /* background-color: #ee9a25; */
  /* color: #3a3b39; */
}
/* top left-right */

/* The sticky class is added to the navbar with JS when it reaches its scroll position */
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

</style>


<script>
    //Sticky Nav
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the navbar
var nav = document.getElementById("myNav");

// Get the offset position of the navbar
var sticky = nav.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    nav.classList.add("sticky")
  } else {
    nav.classList.remove("sticky");
  }
}
</script>