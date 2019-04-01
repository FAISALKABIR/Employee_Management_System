<?php

$host="localhost"; 
$username="root"; 
$password=""; 
$db_name="project"; 
$tbl_name="register"; 


mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");


$myusername=$_POST['username']; 
$mypassword=$_POST['password'];
$myuserType =$_POST['userType']; 



$sql="SELECT * FROM $tbl_name WHERE email='$myusername' and password='$mypassword' and userType='$myuserType'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
$systemType = "Admin";


if($count==1){
	if($systemType == $myuserType){
		header('Location: '.'adminhome.php');
	}
	else{
		header('Location: '.'emphome.php');
	}
    
	
;

}
else{
	echo "Wrong Username or Password";
}


?>

