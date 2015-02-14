<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
<?php
include 'conf/conn.php'; 
if(isset($_GET['name'])){

$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];
if ($_GET['name']!='' && $_GET['email']!='' && $_GET['message']!='') {
if(mysql_query("INSERT INTO contact VALUES (null,'".$name."','".$email."','".$message."')")){
	echo $name." Thank you for contacting us! ";
	if(mail("ilabs@technation.af ", "$name ilabs contact", $message, "From:" . $email))
	{echo "done".mysql_error();}
	else{echo "not done";}
}else{
	echo "nooooo".mysql_error();
} 
}else{
	echo "Fill the Blank Field";	
}
}else{
?>
	
		<?php
		$ab=$_GET['ab'];
		// technation condition
		if($ab=='technation'){
			include 'includes/technation.php';
		}
		elseif($ab=="pstechnation"){
				include 'includes/psinclude/pstechnation.php';
			}
			else if($ab=="datechnation") {
				include 'includes/dainclude/datechnation.php';
			}
			// Herat condition
		else if($ab=='herat'){
			include 'includes/herat.php';
		}
			else if($ab=="psherat"){
				include 'includes/psinclude/psherat.php';
			}
			else if($ab=="daherat") {
				include 'includes/dainclude/daherat.php';
			}
			// women condition
		else if($ab=='women'){
			include 'includes/women.php';
		}
		else if($ab=="pswomen"){
				include 'includes/psinclude/pswomen.php';
			}
			else if($ab=="dawomen") {
				include 'includes/dainclude/dawomen.php';
			}
			// internews condition
		else if($ab=='internews'){
			include 'includes/internews.php';
		}
		else if($ab=="psinternews"){
				include 'includes/psinclude/psinternews.php';
			}
			else if($ab=="dainternews") {
				include 'includes/dainclude/dainternews.php';
			}
			// part conditon
		else if($ab=='part'){
			include 'includes/part.php';
		}
		else if($ab=="pspart"){
				include 'includes/psinclude/pspart.php';
			}
			else if($ab=="dapart") {
				include 'includes/dainclude/dapart.php';
			}
			// about condition
		else if($ab=='about'){
			include 'includes/abo.php';
		}
		else if($ab=="psabout"){
				include 'includes/psinclude/psabo.php';
			}
			else if($ab=="daabout") {
				include 'includes/dainclude/daabo.php';
			}
			// usid condition
		else if($ab=='usid'){
			include 'includes/usid.php';
		}
		else if($ab=="psusid"){
				include 'includes/psinclude/psusid.php';
			}
			else if($ab=="dausid") {
				include 'includes/dainclude/dausid.php';
			}
			// pre condition
		else if($ab=='pre'){
			include 'includes/prelab.php';
		}
		else if($ab=="pspre"){
				include 'includes/psinclude/psprelab.php';
			}
			else if($ab=="dapre") {
				include 'includes/dainclude/daprelab.php';
			}
			// lab condition
		else if($ab=='lab'){
			include 'includes/ilab.php';
		}
		else if($ab=="pslab"){
				include 'includes/psinclude/psilab.php';
			}
			else if($ab=="dalab") {
				include 'includes/dainclude/dailab.php';
			}
			// close condition
		else if($ab=='close'){
			include 'includes/close.php';
		}
		else if($ab=="psclose"){
				include 'includes/psinclude/psclose.php';
			}
			else if($ab=="daclose") {
				include 'includes/dainclude/daclose.php';
			}
			// why condition
		else if($ab=='why'){
			include 'includes/why.php';
		}
		else if($ab=="pswhy"){
				include 'includes/psinclude/pswhy.php';
			}
			else if($ab=="dawhy") {
				include 'includes/dainclude/dawhy.php';
			}
			// select condition
		else if($ab=='select'){
			include 'includes/select.php';
		}
		else if($ab=="psselect"){
				include 'includes/psinclude/psselect.php';
			}
			else if($ab=="daherat") {
				include 'includes/dainclude/daselect.php';
			}
			// expect condition
		else if($ab=='expect'){
			include 'includes/expect.php';
		}
		else if($ab=="psexpect"){
				include 'includes/psinclude/psexpect.php';
			}
			else if($ab=="daexpect") {
				include 'includes/dainclude/daexpect.php';
			}
			// err conditon
		else if($ab=='err'){
			include 'includes/err.php';
		}
		else if($ab=="pserr"){
				include 'includes/psinclude/pserr.php';
			}
			else if($ab=="daerr") {
				include 'includes/dainclude/daerr.php';
			}
		?>
		<!--  -->
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
<!DOCTYPE html>
<html>

	<head>
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kabul Innovation Lab">
		<meta name="author" content="Powered by TechNation's TechLabs">

		<title>-- Kabul Innovation Lab--</title>
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/gsdk-base.css">

		<!-- Custom CSS -->
		<link href="css/scrolling-nav.css" rel="stylesheet">
		<link href="css/font-awesome.css" rel="stylesheet">
		<style>
			#con .well {
				height: 10px;
				margin-right: 40px;
			}

			#nav.affix {
				position: fixed;
				top: 0;
				width: 100%;
				z-index: 1030;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$("[rel='tooltip']").tooltip();

				$('.thumbnail').hover(function() {
					$(this).find('.caption').slideDown(250);
					//.fadeIn(250)
				}, function() {
					$(this).find('.caption').slideUp(250);
					//.fadeOut(205)
				});
				$("#show1").click(function() {
					$("#com1").fadeToggle("slow");
				});
				$("#show2").click(function() {
					$("#com2").fadeToggle("slow");
				});
				$("#show3").click(function() {
					$("#com3").fadeToggle("slow");
				});
				$("#show4").click(function() {
					$("#com4").fadeToggle("slow");
				});
				$("#show5").click(function() {
					$("#com5").fadeToggle("slow");
				});
				$("#show6").click(function() {
					$("#com6").fadeToggle("slow");
				});
			});

			function val(ino) {
				var x = ino.value;
				if (x == '') {
					alert("Please fill out this field!!!");
				}
			}
			function goBack() {
				window.history.back();
			}
		</script>
	</head>
	

	<body data-spy="scroll"  lang="<?php echo $lang; ?>" dir="<?php echo $direction; ?>">
		<div class="container-fluid" id="con" style="background-color:#eee;">
					 	<?php 
					 	if($lang=='english') {
					 		include ('includes/Linclude/abennave.php');
					 	}else if($lang=='pashto') {
					 		include ('includes/Linclude/abpsnave.php');
					 	}else if($lang=='dari') {
					 		include ('includes/Linclude/abdanave.php');
					 	}
						?> 
						
		</div>
		<!-- about Section -->
		<section id="ilab" class="ilab-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12" style="text-align:center;" dir="<?php echo $direction;?>">
					<img src="<?php echo $photo; ?>">
					<h1 class="text-center"><?php echo $head; ?></h1>
					<div class="separator-2"></div>

					<h3 class="<?php echo $txtclass; ?>"><?php echo $sub1; ?></h3>
					<p class="<?php echo $txtclass; ?>"><?php echo $cont1; ?></p>
					<h3 class="<?php echo $txtclass; ?>"><?php echo $sub2; ?></h3>
					<p class="<?php echo $txtclass; ?>"><?php echo $cont2; ?></p>
					<p class="<?php echo $txtclass; ?>"><?php echo $cont3; ?></p>
					<!-- <h3 class="<?php echo $txtclass; ?>"><?php echo $sub3; ?></h3> -->
					<p class="<?php echo $txtclass; ?>"><?php echo $cont4; ?></p>
					<p class="<?php echo $txtclass; ?>"><?php echo $cont5; ?></p>
					<?php
					if($ab=='about' || $ab=='pre' || $ab=='lab' || $ab=='close' || $ab=='why' || $ab=='select' || $ab=='expect' || $ab=='err'){
						
					}else{
						echo '<a href="'.$link.'" target="_blank">Read More</a>';
					}
					?>

					</div>
				</div>
				<div class="row">
					<div class="<?php
					if($ab=='err'){
					}else{
						echo "pull-right";
					}
					?>">
					<a href="#" onclick="goBack();" class="btn btn-danger btn-sm"><i class="fa fa-home"></i>  Back to Home Page</a>
					</div>
				</div>
			</div>
		</section>


		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/jquery.bootstrap.wizard.js"></script>
		<script type="text/javascript" src="js/wizard.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>

	</body>

</html>
<?php } ?>