<?php
session_start();
include 'conf/conn.php'; 
$name=$_POST['firstname']." ".$_POST['lastname'];
$em="Dear $name, 

This is an automatic email to confirm that you have successfully processed your registration for participating at iLabs 2015. The iLabs team will review your application and get back to you soon.

Thank you for your interest in taking part at iLabs 2015. Please, feel free to let us know if you have any questions, suggestions or require any information. 

Sincerely, 
iLabs 2015 Team
Tel: ‎+93 788 161 1862‎ 
Email: http://ilabs.technation.af
Facebook: https://fb.com/ilabs.af
Twitter: https://twitter.com/KabulLab";

if(isset($_POST['Submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phonnumber=$_POST['phonnumber'];
$emailadress=$_POST['email'];
$occopation=$_POST['occopation'];
$company=$_POST['company'];
$language=$_POST['lan1'].', '.$_POST['lan2'].', '.$_POST['lan3'].', '.$_POST['lan4'];
$location=$_POST['location'];
$back=$_POST['back'];
$comment1=$_POST['pre-lab1'];
$comment2=$_POST['intrest'];
$comment3=$_POST['social'];
$comment4=$_POST['problem'];
if(!empty($firstname) && !empty($lastname) && !empty($phonnumber) && !empty($emailadress) && !empty($occopation) && !empty($company)){
if(0){
	
}
else{
	$qur="SELECT emailaddress FROM prtable WHERE emailaddress='$emailadress'";
	$qurry_run=mysql_query($qur,$con);
	$row=mysql_num_rows($qurry_run);
	if($row>=1){
		$_SESSION['fname']=$_POST['firstname'];
		$_SESSION['lname']=$_POST['lastname'];
		$_SESSION['pnum']=$_POST['phonnumber'];
		$_SESSION['em']=$_POST['email'];
		$_SESSION['occ']=$_POST['occopation'];
		$_SESSION['comp']=$_POST['company'];
		$_SESSION['pre']=$_POST['pre-lab1'];
		$_SESSION['in']=$_POST['intrest'];
		$_SESSION['social']=$_POST['social'];
		$_SESSION['prob']=$_POST['problem'];
		$_SESSION['suc']="<div>you have already registerd with this Email </div>";
	header("location:index.php#part");
	}
	else{
$query="INSERT INTO prtable VALUES(NULL ,'$firstname','$lastname','$phonnumber','$emailadress','$occopation','$company','$language','$comment1','$comment2','$comment3','$comment4','$location','$back')";
$insert_query = mysql_query($query,$con);
if($insert_query)
{
	$_SESSION['fname']="";
		$_SESSION['lname']="";
		$_SESSION['pnum']="";
		$_SESSION['em']="";
		$_SESSION['occ']="";
		$_SESSION['comp']="";
		$_SESSION['pre']="";
		$_SESSION['in']="";
		$_SESSION['social']="";
		$_SESSION['prob']="";
	$_SESSION['success']="<div id='divofreg' >Dear $firstname $lastname you have successfully submitted a registration form for review by iLabs. We will get back asap!</div>";
	mail($emailadress, "iLabs-Conformation", $em, "From:" . "ilabs@technation.af");
	header("location:index.php#part");
}
else{
	$_SESSION['fname']="";
		$_SESSION['lname']="";
		$_SESSION['pnum']="";
		$_SESSION['em']="";
		$_SESSION['occ']="";
		$_SESSION['comp']="";
		$_SESSION['pre']="";
		$_SESSION['in']="";
		$_SESSION['social']="";
		$_SESSION['prob']="";
	header("location:about.php?ab=err");
}
}
}
}
else{
	$_SESSION['fname']="";
		$_SESSION['lname']="";
		$_SESSION['pnum']="";
		$_SESSION['em']="";
		$_SESSION['occ']="";
		$_SESSION['comp']="";
		$_SESSION['pre']="";
		$_SESSION['in']="";
		$_SESSION['social']="";
		$_SESSION['prob']="";
		$_SESSION['suc']="<div>you have already registerd with this Email </div>";
$_SESSION['su']="<div>Plese fill the required fields !!</div>";
	header("location:index.php#part");
}
}
?>