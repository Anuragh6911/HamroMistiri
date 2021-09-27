<?php
session_start();
if(!isset($_SESSION['fullname'])){
  //   header ('location:loginregister.php');
 }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hamro Mistiri</title>
    <link rel="stylesheet" href="./css/home.css?v=<?php echo time(); ?>">
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script>
      $(function () {
        $("#header").load("./header.php");
        $("#footer").load("./footer.php");
      });
    </script>
  </head>
  <body>
    <!-- Header -->
    <div id="header"></div>

    <!-- Site Contents -->
    <section id="slider">
      <div class="slider-items">
        <div class="item active">

          <img src="images/final1.png" alt="" />

        </div>
        <div class="item">
          <img src="images/final2.png" alt="" />
        </div>
        <div class="item">
          <img src="images/final3.png" alt="" />
        </div>
      </div>
      <div class="left-slide"><</div>
      <div class="right-slide">></div>
    </section>

    <section id="services">
      <h1> Our Services </h1>
      <div class="content-box">
        <div class="card" onclick="window.location='/HamroMistiri/carpenter.php';"> 
          <i class="icons"> <img src="./icons/carpenter1.svg" height="35px">  </i>
          <h2> Carpenter </h2>
          <p> Carpenters construct, erect, install, and repair structures and fixtures made from wood and other materials.</p>
        </div> 

        <div class="card" onclick="window.location='/HamroMistiri/mechanics.php';"> 
          <i class="icons"> <img src="./icons/mechanics.svg" height="35px">  </i>
          <h2> Mechanics </h2>
          <p> An auto mechanic performs maintenance, repairs, and inspections vehicles. They work on engines, drive belts, transmissions, and electronic systems.</p>
        </div> 

        <div class="card" onclick="window.location='/HamroMistiri/plumber.php';"> 
          <i class="icons"> <img src="./icons/plumber.svg" height="35px">  </i>
          <h2> Plumber </h2>
          <p> A plumber is a person whose job is to connect and repair things such as water and drainage pipes, baths, and toilets</p>
        </div> 

        <div class="card" onclick="window.location='/HamroMistiri/engineer.php';"> 
          <i class="icons"> <img src="./icons/engineer.svg" height="35px">  </i>
          <h2> Engineer </h2>
          <p> Civil engineers ensure safe construction, operation and maintenance of your house.</p>
        </div> 

        <div class="card" onclick="window.location='/HamroMistiri/painter.php';"> 
          <i class="icons"> <img src="./icons/painter.svg" height="35px">  </i>
          <h2> Home Painter </h2>
          <p> Painting the interior of your home is an endeavor that requires a great deal of time</p>
        </div> 

        <div class="card" onclick="window.location='/HamroMistiri/technician.php';"> 
          <i class="icons"> <img src="./icons/technician.svg" height="35px">  </i>
          <h2> Technician </h2>
          <p> Professional technican will provide tech support and services such as computer repair, TV mounting and smart home setup</p>
        </div> 

      </div>
      
    </section>

    <section id="section3">
      <div class="MainForm">
        <div class="Form">
           <div class="registername">REGISTER HERE</div>
          <h1>Become A Professional</h1>
          <div>
            <form class="Login-Form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
              <label for="fname">FULL NAME</label>
              <label class="labelemail" for="email">EMAIL ADDRESS </label></br>
           <div class="Emailflex">
              <div>
              <input
                type="text"
                id="Fullname"
                name="fname"
                placeholder="Your Full Name"
             required />
              </div>
              <div class="Emailclass">
              <input
                type="email"
                id="Email"
                name="email_1"
                placeholder="Your Email"
                required  />
              </div>
          </div>
    

              <label for="phone">PHONE NUMBER</label>
              <input
                type="text"
                id="PhoneNumber"
                name="phone"
                placeholder="Enter Your Phone Number"
                required />
  
              <label for="PanNumber">PAN-NUMBER</label>
              <input
                type="text"
                id="PanNumber"
                name="pan"
                placeholder="Enter Your Pan-Number"
                required  />

              <label for="Services">SERVICES</label>
              <select id="Services" name="services">
                <option value="Plumber">Plumber</option>
                <option value="Painter">Painter</option>
                <option value="Mechanics">Mechanics</option>
                <option value="Technician">Technician</option>
                <option value="Engineer">Engineer</option>
                <option value="Carpenter">Carpenter</option>
              </select>

              <label for="image">Image:</label>
              <input value="Upload" type="file" name="panimage" id="panimage" required />

              <label for="PanNumber">ABOUT YOU</label>
              <textarea id="w3review" name="aboutyou" rows="4" cols="50">
              </textarea>
              <?php


              if(isset($_SESSION['fullname'])){

                echo '<input type="submit" value="SUBMIT"  name="submit2" />';
              }
              else
              {
                ;
                echo '<input type="submit" value="login first"  name="submit2"  />';

              }
            



                ?>
              
            </form>

          
          
          <?php


$server ="localhost";
$user ="root";
$password ="";
$db ="login_user";

$con = mysqli_connect($server,$user,$password,$db);


if ($con){
    ?>
    <script>
      //  alert("Connection Successful");
        </script>
    <?php
}else{
    ?>
    <script>
        alert("NO  connection");
        </script>
        <?php

}

?>
<?php
					
					//include 'dbcon.php';

					if(isset($_POST['submit2'])){
						$fname = mysqli_real_escape_string($con, $_POST['fname']);
						$email_1 = mysqli_real_escape_string($con, $_POST['email_1']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $pan = mysqli_real_escape_string($con, $_POST['pan']);
            $services = mysqli_real_escape_string($con, $_POST['services']);
            $panimage = mysqli_real_escape_string($con, $_POST['panimage']);
            $aboutyou = mysqli_real_escape_string($con, $_POST['aboutyou']);

           /* $emailquery = "SELECT * FROM `register` WHERE email_1 = '$email_1' ";
					$query = mysqli_query($con,$emailquery);
						
						$emailcount = mysqli_num_rows($query);

						if($emailcount>0){
						?>
								<script>
								alert("email exists");
								</script>
                <?php
							*/
                
    $sql3 = "INSERT INTO `service` (`fname`, `email_1`,`phone`,`pan`,`services`,`panimage`, `aboutyou`) VALUES ('$fname', '$email_1','$phone','$pan','$services','$panimage','$aboutyou' )"; 

if ($con->query($sql3) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql3 . "<br>" . $con->error;

            
}
            
 
$con->close();
          }
          
        
?>

            
          </div>
        </div>
        <div class="Yellow"><img src="./images/iphone.png" ></div>
      </div>
    </section>

     <section id="section4">
        <div class="container">
            <div class="body1"><img src="./images/hamro.png"></div>
            <div class="body2">
            <div class="registername">KNOW US MORE</div>
         <h1>About Us</h1>
             <P> The home services system is in high demand as it is incredibly useful for everybody in this busy schedule lifestyle. ​‘Hamro Mistiri’ is a web application that will let users search for home services online . The services include Plumber, Mechanics, Electrician, Technician, etc. ​
                It will provide freelancing opportunities for service providers. ​Home Service Providers and customers are only two users of our system. The home service providers are required to register to this website mentioning their roles. The users who are in need of services can browse the services provided and check the review of service providers. ​
                   This web application will be beneficial to the individual especially for the ones who are relocating from one area to a different area.</br>
                  </br>
                   In a world which is filled with technical and digital advancement, it is sad to see that we ​
                  people are still used to the old non-effective and traditional ways of finding the service ​providers. ​
                  Whenever we are in need of a service we contact the service providers that we already know and that limits us to the only option. The main problem is that we don’t have any other service providers besides them and we have no choices or ways to get to them.​
                  So to solve this very problem we are building a web application that allows the users to get a vast possible availability of those service providers through our web application. ​​
              </P>
          <h1>Why Hamro Mistiri ?</h1>
           
            <P>
            During this pandemic many lost their job and those who were working abroad were forced to return to their country, this created increase in unemployment Rate. We a team of three members called as 'Three Motivated Minds' dicide to help those people who have skills but no employemnt opportunities. We create this web applicataion so that people having some skills of plumbing, painting etc. can find a way to earn their leaving by marketing their skills in our website.We believe in bringing smile in face's of thoes people who weren't able to even think about it.
            </P>
 

            </div>
        </div>
      </section>



    <section id="subscribe">
      <div class="container">
        <div>
          <img src="./images/craftsmen.png" alt="" height="280px" />
        </div>
        <div>
          <h1>Subscribe to your newsletter</h1>
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo
            dicta, eligendi, ad veniam totam fuga repellendus provident ipsam
            sint harum ducimus corporis, architecto atque. Tempore beatae
            delectus perferendis magni totam?
          </p>
          <div class="input-sec4">
            <input type="email" placeholder="email@sabaikomistiri.com" />
            <button>Subscribe</button>
          </div>
        </div>
      </div>
    </section>
    <section id="contact">
      <div class="contact-info-wrapper">
        <h1 id="ch">Contact Us</h1>
        <div class="contact-info">
          <div>
            <div>
              <img src="icons/phone-2.svg" alt="" />
              <div>
                <span> Call us: </span>
                <span> (+971) 9860123456 </span>
              </div>
            </div>
            <div>
              <img src="icons/email.svg" alt="" />
              <div>
                <span> Email </span>
                <span> support@sabaikomistiri.com </span>
              </div>
            </div>
            <div>
              <img src="icons/clock-2.svg" alt="" />
              <div>
                <span> Working Hours: </span>
                <span> Sun-Fri (10:00am-5:00pm) </span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1765.6239209030643!2d85.33586380822238!3d27.740500619624463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19462d22bdff%3A0xf8bc1fa59ce305!2sNarayan%20Gopal%20Chowk%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1620307131480!5m2!1sen!2snp"
          width="100%"
          height="100%"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </section>

    <!-- footer  -->
    <div id="footer"></div>

    <script src="js/home.js"></script>
  </body>
</html>
