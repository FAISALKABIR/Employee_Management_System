<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project"; 
$tbl_name="register";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
$conn = new mysqli($host, $username, $password, $db_name);

$myUserName=$_POST['username']; 
$myEmail=$_POST['email']; 
$myPassword=$_POST['password']; 
$myConfirmPassword=$_POST['confirm-password']; 
$myUserType=$_POST['userType'];



$sql = "INSERT INTO register (username, email, password, confirmpassword, usertype)
VALUES ('$myUserName', '$myEmail', '$myPassword', '$myConfirmPassword', '$myUserType')";


if ($conn->query($sql) === TRUE) {
    echo "New User created successfully";
	?>
	
	 <br><a href="login.php">Back To login</a>
	 
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>



