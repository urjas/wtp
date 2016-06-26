<?php
$servername="localhost";
$dbname="wtp";
$name=$_POST["name"];
//$dob=$_POST["dob"];
//$gender=$_POST["gender"];
$email=$_POST["email"];
$password=$_POST["password"];

$conn = mysqli_connect($servername,"root", "", $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    $sql = "INSERT INTO user_tab (name, email, password) VALUES ('$name', '$email', '$password')";
    
if (mysqli_query($conn, $sql)) {
    
	header("Location: ../index.html");
} else {
    echo "<script type='text/javascript'>\n";
	echo "alert('User already registered.');\n";
	echo "</script>";;
}

mysqli_close($conn);
?>