<?php
$database ="wtp";
$con = mysqli_connect("localhost","root", "", $database);

$n;

if(isset($_POST['action']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['password'];  
  
    $check_user="select * from user_tab WHERE email='$user_email'AND password='$user_pass'";  
  
    $run=mysqli_query($con,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('../welcome.php','_self')</script>";  
  
        $_SESSION['email']=$user_email; 
  
    }  
    else  
    {  
    	echo "<script>window.open('../index.html','_self')</script>";  
    	
    }  
}   
mysqli_close($con); 
?>