<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

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
		<div class="container-fluid" id="con" style="background-color:#eee;">
			<div class="row" style="margin:0;">
				<div class="col-md-12" >
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php#venue" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-bank"></i> Venue </a>
						</li>
						<li>
							<a href="index.php#contact" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-phone-square"></i> Contact</a>
						</li>
						<li>
							<a href="index.php#past" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-calendar-o"></i> Past iLabs</a>
						</li>
						<li>
							<a href="index.php" style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa fa-lock"></i> Privacy Policy</a>
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
					<a class="navbar-brand page-scroll" href="index.php#intro" style="color:#fff;"><h4 id="logo"><b>iLabs</b></h4></a>
				</div>

				
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						
						<li class="hidden">
							<a class="page-scroll" href="index.php#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#ilab">iLabs</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#teams">Team</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#events">Events </a>
						</li>

						<li>
							<a class="page-scroll" href="index.php#part">Participate</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#project">Projects</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#media">Media</a>
						</li>
						<li>
							<a class="page-scroll" href="index.php#resours">Resources</a>
						</li>
					</ul>
				</div>

				
			</div>
			

		</nav>
		<?php
		$ab=$_GET['ab'];
		if($ab=='pre'){
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
		}
		?>
			<!-- about Section -->
		<section id="ilab" class="ilab-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<h1><?php echo $head; ?></h1>
					<div class="separator-2"></div>
					<h3 class="text-left"><?php echo $sub1; ?></h3>
					<p class="text-left"><?php echo $cont1; ?></p>
					<h3 class="text-left"><?php echo $sub2; ?></h3>
					<p class="text-left"><?php echo $cont2; ?></p>
					<p class="text-left"><?php echo $cont3; ?></p>
					<p class="text-left"><?php echo $cont4; ?></p>
					<p class="text-left"><?php echo $cont5; ?></p>
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
