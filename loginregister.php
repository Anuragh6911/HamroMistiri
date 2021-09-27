<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>service finder</title>
	<link rel="stylesheet" type="text/css" href="./css/loginregister.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width", initial-scale="1">
</head>
<body>
<?php
 
include 'dbcon.php';



if(isset($_POST['submit1'])){
    $email1 = $_POST['email1'];
    $pass1 = $_POST['pass1'];

    $email_serach =" SELECT * from register where email= '$email1' ";
    $query1 =mysqli_query($con,$email_serach);

    $email_count1 =mysqli_num_rows($query1);

    if($email_count1){
        $email_pass = mysqli_fetch_assoc($query1);

        $db_pass = $email_pass['pass'];
        
        $_SESSION['fullname']= $email_pass['fullname'];

        $pass_decode = password_verify($pass1, $db_pass);

        if($pass_decode){
           // echo"login successful";
            ?>
            <script>
                location.replace("index.php");
            </script>

            <?php
        }else{
            ?>
            <script>
                alert("Password wrong");
                </script>
            <?php
        }
        }else{
            ?>
            <script>
                alert("invalid mail ");
                </script>
            <?php
        }

    
}


?>


	<button class="btnhome"> <a href="./index.php"> <i class="fa fa-home" href=""></i> Home </a></button>
	<div class="parent"> 
		        <div class="child">
					<div class="child2">
						<div>
							<img src="./images/avatar.svg" class="img">
						</div>
				          <div class="child3">
                            <form class="Login-Form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
								<h2 class="title">Login</h2>

								 <div class="email"> 
                                     
									<input type="email" class="input" placeholder="Email" size="30" name="email1" required>
								 </div>
								 <div class="password">
                                   
									<input type="password" class="input" placeholder="Password" size="30" name="pass1" required>  
								 </div>
								 
								<div class="ff">
									<a href="#" class="forget"></a><br>
								</div>	
								
								 <div class="btnn">
									<input type="submit" name="submit1" class="btn" value="Login">		
								 </div>
                                 <div class="message"> Not Register?
                                    <a href="#" onclick="showHide()">Register</a>
                                </div>
                                 	
                            </form>        
                          </div>                      
					</div>
                    <?php
					
					//include 'dbcon.php';
					if(isset($_POST['submit'])){
						$fullname = mysqli_real_escape_string($con, $_POST['fullname']);
						$email = mysqli_real_escape_string($con, $_POST['email']);
						$contact = mysqli_real_escape_string($con, $_POST['contact']);
						$pass = mysqli_real_escape_string($con, $_POST['pass']);
						$repass = mysqli_real_escape_string($con, $_POST['repass']);

						$password = password_hash($pass, PASSWORD_BCRYPT);
						$repassword = password_hash($repass, PASSWORD_BCRYPT);
					
						$emailquery = "SELECT * FROM `register` WHERE email = '$email' ";
						$query = mysqli_query($con,$emailquery);
						
						$emailcount = mysqli_num_rows($query);

						if($emailcount>0){
							?>
								<script>
								alert("email exists");
								</script>
								<?php
							

						}else{
							if($pass===$repass){
								$insertquery ="INSERT INTO `register`(`fullname`, `email`, `contact`, `pass`, `repass`) values ('$fullname','$email','$contact','$password','$repassword')";
							
							$iquery = mysqli_query($con, $insertquery);

							if($iquery){
								?>
								<script>
								alert("inserted");
								</script>
								<?php
							}else{
								?>
								<script>
								alert("not inserted");
								</script>
								<?php
							}
	
							}else{
								?>
								<script>
								alert("password does not match");
								</script>
								<?php
								
							}
						}
						}


					
					
					?>
                    
                   
				          <div class="child3">
                            <form class="Register-Form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<h2 class="title">Register</h2>

								 <div class="user"> 
                                     
									<input type="text" class="input" placeholder="Full Name" size="30" name="fullname" required>
								 </div>
                                 <div class="email"> 
                                     
									<input type="email" class="input" placeholder="Email" size="30" name="email" required>
								 </div>
								 <div class="repassword">
									<input type="text" class="input" placeholder="Contact-Number" size="30" name= "contact" required>  
								 </div>
								 <div class="password">
                                   
									<input type="password" class="input" placeholder="Password" size="30" name="pass" required>  
								 </div>
                                 <div class="repassword">
									<input type="password" class="input" placeholder="ReEnter-Password" size="30" name= "repass" required>  
								 </div>
								 
								 
								 <div class="btnn">
									<input type="submit" name="submit" class="btn1"  value="Register">		
								 </div>
									
                                 <div class="message"> Already Register?
                                    <a href="#" onclick="showHide()"> Login</a>
                                </div>
                               
                            </form>        
                            </div>  
                                   
		        </div>
				
     </div> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js "></script>

    <script>
         $('.message a').click(function(){
     $('form').animate({height:"toggle",opacity:"toggle"},"medium");
 })
    </script>
	<script type="text/javascript" src="./js/loginregister.js"></script>
</body>
</html>





































