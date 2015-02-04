<?php
include 'conf/conn.php'; 
if(isset($_GET['name'])){

$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];
if ($_GET['name']!='' && $_GET['email']!='' && $_GET['message']!='') {
if(mysql_query("INSERT INTO contact VALUES (null,'".$name."','".$email."','".$message."')")){
	echo $name." Thank you for contacting us! ";
	if(mail("abdullah.rahemee20@gamil.com ", "$name ilabs contact", $message, "From:" . $email))
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

<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kabul Innovation Lab">
		<meta name="author" content="Powered by TechNation's TechLabs">

		<title>-- Kabul Innovation Lab--</title>

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
		</script>
	</head>
	

	<body data-spy="scroll">
		<div class="container" id="con" style="background-color:#eee;">
			<div class="row" style="margin:0;">
				<div class="col-md-12" >
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="#venue" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-bank"></i> Venue </a>
						</li>
						<li>
							<a href="#past" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-calendar-o"></i> Past iLabs</a>
						</li>
						<li>
							<a href="#past" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-bookmark"></i> Resources</a>
						</li>
						<li>
							<a href="#" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-lock"></i> Privacy Policy</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa"></i>		Connect with us! &nbsp;<i class="fa fa-phone"></i>&nbsp;		+93 788 816 1862‏ &nbsp;	</i>&nbsp;<i class="fa fa-envelope"></i>		ilabs@technation.af</a>
						</li>	
					</ul>
				</div>
			</div>
		</div>
		<!-- Navigation -->
		<nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="10" id="nav">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav" >
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden">
							<a class="page-scroll" href="#page-top"></a>
						</li>
						<li class="page-scroll">
							<a class="page-scroll active"  href="#intro" style="background-image:url('img/ilab.png'); background-size:100%; width:70px;height:52px; background-repeat:no-repeat;"> </a>
						</li>
						<li>
							<a class="page-scroll" href="#ilab" style="height:52px;">iLabs</a>
						</li>
						<li>
							<a class="page-scroll" href="#teams" style="height:52px;">Team</a>
						</li>
						<li>
							<a class="page-scroll" href="#speakers" style="height:52px;">Speakers </a>
						</li>
						<li>
							<a class="page-scroll" href="#labs" style="height:52px;">Events </a>
						</li>
						<li>
							<a class="page-scroll" href="#project" style="height:52px;">Projects</a>
						</li>
						<li>
							<a class="page-scroll" href="#media" style="height:52px;">Media</a>
						</li>
						<li>
							<a class="page-scroll" href="#part" style="height:52px;">Participate</a>
						</li>
					</ul>
					<ul class="pull-right nav navbar-nav">
          
			          <li style="background-color:#3B5998;"><a  href="https://www.facebook.com/iLabs.af" target="_blank"><i id="social" class="fa fa-facebook-square fa-2x"></i></a></li>
			          <li style="background-color:#4099FF;"><a href="https://twitter.com/KabulLab" target="_blank"><i id="social" class="fa fa-twitter-square fa-2x "></i></a></li>
			          <li style="background-color:#d34836;"><a href="https://plus.google.com/u/0/b/117599669345564413256/117599669345564413256/about" target="_blank"><i id="social" class="fa fa-google-plus-square fa-2x"></i></a></li>
			          <li style="background-color:#0077b5;"><a href="https://www.linkedin.com/company/ilabs-afghanistan?report%2Esuccess=MlmG7g_fqFRfD4iVhHgr0FomJDOL3vciIT4v8pi3EYkZnZLjFuJfr4acCeXZnFnMvaat" target="_blank"><i id="social" class="fa fa-linkedin-square fa-2x"></i></a></li>
			          
			        </ul>
				</div>

				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->

		</nav>
		<?php
		$ab=$_GET['ab'];
		if($ab=='technation'){
			include 'includes/technation.php';
		}
		else if($ab=='herat'){
			include 'includes/herat.php';
		}
		else if($ab=='women'){
			include 'includes/women.php';
		}
		else if($ab=='internews'){
			include 'includes/internews.php';
		}
		else if($ab=='part'){
			include 'includes/part.php';
		}
		else if($ab=='about'){
			include 'includes/abo.php';
		}else if($ab=='usid'){
			include 'includes/usid.php';
		}else if($ab=='pre'){
			include 'includes/prelab.php';
		}
		else if($ab=='lab'){
			include 'includes/ilab.php';
		}
		else if($ab=='close'){
			include 'includes/close.php';
		}else if($ab=='why'){
			include 'includes/why.php';
		}else if($ab=='select'){
			include 'includes/select.php';
		}else if($ab=='expect'){
			include 'includes/expect.php';
		}else if($ab=='err'){
			include 'includes/err.php';
		}
		?>
			<!-- about Section -->
		<section id="ilab" class="ilab-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<img src="<?php echo $photo; ?>">
					<h1><?php echo $head; ?></h1>
					<div class="separator-2"></div>
					<h3 class="<?php
					if($ab=='err'){
					}else{
						echo "text-left";
					}
					?>"><?php echo $sub1; ?></h3>
					<p class="text-left"><?php echo $cont1; ?></p>
					<h3 class="text-left"><?php echo $sub2; ?></h3>
					<p class="text-left"><?php echo $cont2; ?></p>
					<p class="text-left"><?php echo $cont3; ?></p>
					<p class="text-left"><?php echo $cont4; ?></p>
					<p class="text-left"><?php echo $cont5; ?></p>
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
					<a href="index.php" class="btn btn-danger btn-sm"><i class="fa fa-home"></i>  Back to Home Page</a>
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