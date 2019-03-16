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
	echo ''.mysqli_error($conn);    
    $result=mysqli_query($conn,$sql);
echo ''.mysqli_error($result);    
    
    $check=mysqli_num_rows($result);
echo "".$check;
    if($check==1)
	{
        	echo "you have logged in sucessfully";
        	exit();
    	}
    else
	{
 	  	echo "Enter correct username/password";
    	   	exit();
    	}
}

?>
<html>
<head>
  <title>Dairy-Sign In</title>
<link rel="stylesheet" type="text/css" href="loginpage.css">
<link rel="stylesheet" type="text/css" href="all.css">
<script type="text/javascript" src="jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
<script type="text/javascript" src="bootstrap.bundle.min.js"></script>
</head>
  <body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
	    <h1 class="card-title text-center ">SHIVSHANKAR DAIRY</h1>
            <h2 class="card-title text-center">Sign In</h2>
            <form class="form-signin"  action="<?php echo $current_file; ?>" method="POST">
           <div class="form-label-group">
                <input type="text" id="uname" class="form-control" placeholder="Username">
                <label for="uname">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="pword" class="form-control" placeholder="Password">
                <label for="pword">Password</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">              
            </form>
  <p>New User?</p>
              <form class="form-signin" method="get" action="/php/login1.html">
        <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign Up</button>

    </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>



