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
            Mechanics
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
        <h1 class="heading">Mechanics</h1>
        <div class="main">
        <?php 
          include 'dbcon.php';
          $sql = "SELECT * FROM `service` WHERE services='mechanics'";
          $result = mysqli_query($con, $sql);
          
          if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo ' <div class="card">
              <div class="cardimg">
                  <img src="./images/plumber2.png" alt="Avatar"  >
              </div>
               <div class="cardcontainer">
                 <h4>'.  $row["fname"] .'</h4>
                 <p>Mechanic</p>'. $row["phone"] .
              ' </div>
              <p>' .$row["aboutyou"]. '</p>
           </div>';
            }
          } else {
            echo "0 results";
          }          
          ?>             
           

        </div>
        <div id="footer"> </div>
            </body>
</html>