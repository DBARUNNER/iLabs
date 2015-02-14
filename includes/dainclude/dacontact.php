<?php
include '../conf/conn.php';
$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];
if ($_GET['name']!='' && $_GET['email']!='' && $_GET['message']!='') {
if(mysql_query("INSERT INTO contact VALUES (null,'".$name."','".$email."','".$message."')")){
	echo $name." Thank you for contacting us! ";
	mail("ilabs@technation.af ", "$name ilabs contact", $message, "From:" . $email)
}else{
	echo "connection failed";
}
}else{
	echo "Fill the Blank Field";	
}
$lang="dari";
$direction="rtl";
$txtclass="text-right";
?>