<?php
    require 'connect.inc.php';
    $host="localhost";
    $user="root";
    $pass="";
    $db="dairy";
    $Id="";
        
    $name="";
    $contactno="";
    $output='';
    $conn=new mysqli($mysql_host,$mysql_user,$mysql_pass,$db);
    if(isset($_GET['search'])){
    if(isset($_GET['name']) && isset($_GET['contactno']))
    {
        $searchq=$_GET['name'];
        $query=mysqli_query($conn,"Select * from data where name='$searchq'");
        echo ''.mysqli_error($conn);
        $count=mysqli_num_rows($query);
            if($count==0){
                $output='THere was no search result'; 
            }
            else{
                while($row=mysqli_fetch_array($query)){
                    $name=$row['name'];
                    $contactno=$row['contactno'];
                    $Id=$row['Id'];
                    $output="Found";
                }
            }
    }
    }

    if(isset($_GET['update'])){
        
    if(isset($_GET['name']) && isset($_GET['contactno']) && isset($_GET['Id']))
    {
        $name=$_GET['name'];
        $contactno=$_GET['contactno'];
        $Id=$_GET['Id'];
        $sql="update `data` set Id='$Id',name='$name',contactno='$contactno' where Id='$Id'";
        $query=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($query);
        echo " ".$count;
            if($count==0){
                $output='THere was no such data '; 
            }
            else{
                while($row=mysqli_fetch_array($query)){
                    $name=$row['name'];
                    $contactno=$row['contactno'];
                    $output="Edited";
                }
            }
    }   
    }
    if(isset($_GET['insert']))
    {    
    if(isset($_GET['name']) && isset($_GET['contactno']) && isset($_GET['Id']))
    {
        $name=$_GET['name'];
        $contactno=$_GET['contactno'];
        $Id=$_GET['Id'];
        $query=mysqli_query($conn,"INSERT INTO `data`(`Id`,`name`,`contactno`) VALUES ('$Id','$name','$contactno')");
        echo ''.mysqli_error($conn);
        echo " ".$name;
        echo " ".$contactno;
        echo " ".$Id;
    }
    }
    //name='$name' AND contactno='$contactno' AND
    if(isset($_GET['delete']))
    {    
    if(isset($_GET['name']) && isset($_GET['contactno']))
    {
        $name=$_GET['name'];
        $contactno=$_GET['contactno'];
        $Id=$_GET['Id'];
        $query=mysqli_query($conn,"DELETE from `data` where id='$Id' ");
        echo " ".$name;
        echo " ".$contactno;
    }
    }
                echo $output;
    
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
        body {
        color: #404E67;
        background: #F5F7FA;
		font-family: 'Open Sans', sans-serif;
	}

    .table{	
        width: 100%;
		margin: 30px auto;
        background: #fff;
        padding: 20px;	
        box-shadow: 4px 4px 4px rgba(0,0,0,.2);
        padding-bottom: 0;
    }
    .button{
        float: right;
		height: 40px;
		font-weight: bold;
		font-size: 18px;
		text-shadow: none;
		min-width: 150px;
		border-radius: 50px;
		line-height: 13px;
        background-color: #ffd480;
        font-family: sans-serif;
        margin-left: 20px;
   }
    .button:hover{
        background-color: #ffc34d; 
    }
       
</style>
<body>
<form action="2pg.php" method="get">
<div class="container">    
<table class="table table-bordered">
    <thead>
    <tr>     
    <td class="col-sm-1" style="text-align:center"><b>SR NO</b></td>
        <td style="text-align:center"><b>Name</b></td>
        <td style="text-align:center"><b>Contact no</b></td>
    </tr>    
    </thead>
    <tr>     
      <td><input style="width:100%;line-height:30px"type="number" name="Id"></td>
      <td><input style="width:100%;line-height:30px" type="text" name="name"></td>
      <td><input style="width:100%;line-height:30px" type="text" name="contactno"></td>
    </tr>
</table>
    <input class="button" type="submit" name="delete" value="Delete" style="color:#664400">
    <input class="button" type="submit" name="update" value="Update" style="color:#664400">
    <input class="button" type="submit" name="search" value="Search" style="color:#664400">
    <input class="button" type="submit" value="Details" style="color:#664400">
    <input class="button" type="submit" name="insert" value="Add user" style="color:#664400">
<br><br><br>
</div>
</form>
</body>

<?php
 include ('connect.php');
 $sqlget="select * from data order by Id asc";
 $sqldata=mysqli_query($conn,$sqlget) or die('error etting');
 echo'<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">';
 echo'<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';
 echo'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
 echo'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
 echo'<div class="container">';
 echo'<table class="table table-bordered">';
 echo'<div style="text-align: center;padding-top: 10px"><h2> <b>CUSTMER DETAILS</b></h2></div>';
 echo'<thead>';
 echo'<tr>';     
 echo'      <td class="col-sm-1" style="text-align:center;line-height:30px"><b>SR NO</b></td>';
 echo'      <td style="text-align:center;line-height:30px"><b>Name</b></td>'; 
 echo'      <td style="text-align:center;line-height:30px"><b>Contact no</b></td>';
 echo'    </tr>';    
 echo'    </thead>';

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
 echo'<tbody>';
 echo'<tr>';     
 echo'      <td class="col-sm-1" style="text-align:center;line-height:30px">';echo $row['Id'];echo'</td>';
 echo'      <td style="text-align:center;line-height:30px">';echo $row['name'];echo'</td>'; 
 echo'      <td style="text-align:center;line-height:30px">';echo $row['contactno'];echo'</td>';
 echo'</tr>';    
 echo'</tbody>';
 }
 echo'</div>';  
 echo'</table>';
?>
