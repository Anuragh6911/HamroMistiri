<?php
session_start();

if(!isset($_SESSION['fullname'])){
 //   header ('location:loginregister.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link rel="stylesheet" href="./css/services.css"> 
        <title>
            Engineers
        </title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
          $(function() {
            $('#header').load('./header.php');
            $('#footer').load('./footer.php');
          })
      </script> 
    </head>
    <body>
      <div id="header"> </div>
        <h1 class="heading">Technicians</h1>
        <div class="main">
            <div class="card">
                <div class="cardimg">
                    <img src="./images/electrician1.png" alt="Avatar"  >
                </div>
                 
                 <div class="cardcontainer">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
            </div>

              <div class="card1">
                <div class="cardimg1">
                    <img src="./images/electrician2.png" alt="Avatar">
                </div>
                
                 <div class="cardcontainer1">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
                 
              </div>

              <div class="card">
                <div class="cardimg">
                    <img src="./images/electrician1.png" alt="Avatar">
                </div>
                 
                 <div class="cardcontainer">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
              </div>

              <div class="card1">
                <div class="cardimg1">
                <img src="./images/electrician2.png" alt="Avatar">
            </div>
                 <div class="cardcontainer1">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
                 
              </div>


              <div class="card">
                <div class="cardimg">
                    <img src="./images/electrician1.png" alt="Avatar">
                </div>
                 
                 <div class="cardcontainer">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
              </div>

              <div class="card1">
                <div class="cardimg1">
                <img src="./images/electrician2.png" alt="Avatar">
            </div>
                 <div class="cardcontainer1">
                   <h4><b>Anurag Baskota</b></h4>
                   <p>Software Engineer</p>
                 </div>
                 
              </div>
              
    
          

        </div>
        <div id="footer"> </div>
            </body>
</html>