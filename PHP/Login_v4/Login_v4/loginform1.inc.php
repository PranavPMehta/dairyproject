<?php
$host="localhost";
$user="root";
$pass="";
$db="dairy";

$conn=mysqli_connect($host,$user,$pass);
mysqli_select_db($conn,$db);

if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $password=$_POST['pword'];

    $sql="SELECT * from login where uname='".$username."' AND pword='".$password."' limit 1";
    
    $result=mysqli_query($conn,$sql);
    
    $check=mysqli_num_rows($result);
    if($check==1){
        echo "you have logged in sucessfully";
        //exit();
    }
    else{
    echo "Enter correct username/password";
    //exit();
    }
}

?>

<!--<form action="<?php echo $current_file; ?>" method="POST">
Username:<input type="text" name="uname">
Password:<input type="password" name="pword">
         <input type="submit" value="Enter Data">
</form>

<form method="get" action="/php/login.html">
    <button type="submit">Create new user</button>

</form>-->
<html lang="en">
<head>
	<title>Login V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div>
						<span  class="label-input100" action="<?php echo $current_file; ?>" method="POST">Username</span>
						<input class="input100" type="text" name="uname" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div <!--class="wrap-input100 validate-input" data-validate="Password is required"-->>
						<span class="label-input100" action="<?php echo $current_file; ?>" method="POST">Password</span>
						<input class="input100" type="password" name="pword" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<!--<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>-->
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

										<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17" method="get" >
							Or Sign Up Using
						<br/>

						<button type=submit class="txt2" action="/php/login.html">Sign Up</button>
						
						</span>	
					</div>
				</form>
			</div>
		</div>
	</div>
	


	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


</body>
</html>