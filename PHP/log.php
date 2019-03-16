<?php
include "connect.php";

$username=$_POST['uname'];
$password=$_POST['pword'];
echo $username." ".$password."  added";
mysqli_query($conn,"insert into login(uname,pword) values ('$username','$password')"); 
?>
