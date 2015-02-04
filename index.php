<?php 
session_start();
	if(isset($_GET['lang'])) {
		if($_GET['lang'] == 'da') {
			include('language/da.php');
		} 
		elseif ($_GET['lang'] == 'ps') {
			include('language/ps.php');
		}
		else {
			include('language/en.php');
		}
	}
else {
	        include('language/en.php');

}
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
			}
		</script>
	</head>

	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

	<body data-spy="scroll" dir="<?php echo $dir; ?>">
		<div class="container" id="con" style="background-color:#eee;">
				<!-- Nav bar Section -->
				<?php 
	if(isset($_GET['lang'])) {
		if($_GET['lang'] == 'da') {
			include('includes/Linclude/danave.php');
		} 
		elseif ($_GET['lang'] == 'ps') {
			include('includes/Linclude/psnave.php');
		}
		else {
			include('includes/Linclude/ennave.php');
		}
		}
			else {
	        include('includes/Linclude/ennave.php');

}
 ?>
			</div>
			<!-- /.container -->

		</nav>

		<!-- Intro Section -->
		<section id="intro" class="intro-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<br><br><br>
						<h3><?php echo $ilab1; ?></h2>
						<br>
						<a class="btn btn-fill btn-primary btn-wd page-scroll btn-lg" href="#part" ><?php echo $join; ?></a>
					</div>
				</div>
			</div>
		</section>

		<!-- Ilab Section -->
		<!-- ilab Section -->
		<section id="ilab" class="ilab-section">
			<div class="container">
			<div class="row">
					<div class="col-md-12">
							<div class="box-icon">
								<span class="fa fa-5x fa-globe"></span>
							</div>
					</div>
			</div>
				<div class="row">
				<h1><?php echo $ilab2; ?></h1><br><br>
				<h3 ><?php echo $ilab3; ?></h3>
				<div class="separator-2"></div>
				<p><?php echo $ilabp; ?></p>
				</div>
				<a href="about.php?ab=about"><?php echo $more; ?></a>
				<div class="row">
				<h3 ><?php echo $inst1; ?></h3>
				<div class="separator-2"></div>
				<div class="row">
				<p><?php echo $inst2; ?></p>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-info">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=technation"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/technation.png">
						</h3>
						<p >
							<?php echo $inst3; ?>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-default">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=herat"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/Herat Host.png" style="width: 20%;"> <?php echo $inst4; ?>
						</h3>						
						<p>
							<?php echo $inst5; ?>
					    </p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 ">
				<div class="offer offer-radius offer-women">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=women"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/twlogo.png"> <?php echo $inst6; ?>
						</h3>						
						<p>
							<?php echo $inst7; ?>
						</p>
					</div>
				</div>
			</div>
        </div>		
        <div class="row">
				<p>Supported by:</p>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-primary">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=internews"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/internews.png">
						</h3>
						<p >
							<?php echo $inst8; ?><br><br>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-warning">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=part"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/part.png">
						</h3>						
						<p>
							<?php echo $inst9; ?><br>
							<br>
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-danger">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=usid"><?php echo $more; ?></a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/USID.png">
						</h3>						
						<p>
						<?php echo $inst10; ?>
						</p>
					</div>
				</div>
			</div>
        </div>			
				</div>
			</div>
		</section>

		<!-- Team section -->
		<section id="teams" class="team-section" data-animation-effect="fadeInUpSmall" data-effect-delay="300">
				<div class="page-header"><h1><?php echo $team1; ?></h1><p><?php echo $team2; ?></p></div>

				<!-- Steering -->
<!--Heading-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <h3 style=""><?php echo $team3; ?></h3><div class="separator-2"></div><p style="display:inline;"><?php echo $team4; ?></p>
             
          </div>
        </div>
      </div>
<!-- /heading -->

      <div class="row grid-space-20">
<!-- Jones -->
          <div class="col-md-2 col-sm-3 col-md-offset-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/Bronwyn.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#Bronwyn">
                  <br><br>
                    <p>
					<?php echo $team5; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#Bronwyn"><?php echo $team6; ?><br><br></a></h3>
              </div>
          </div>
 <!-- /Jones -->


<!-- Mansoor ansari -->
           <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/omarphoto.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#omar">
                  <br><br><br>
                    <p><?php echo $team7; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/omansari/"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/CyberMullah"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#omar"><?php echo $team8; ?></a></h3>
              </div>
            </div>
<!-- /mansoor ansari -->
<!-- nooorin -->
           <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/Noorin.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#noorin">
                  <br><br>
                    <p><?php echo $innovation; ?>‏</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="h"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#noorin"><?php echo $team9; ?>‏<br><br></a></h3>
              </div>
            </div>
<!-- /noorin -->

</div>
</div>
<!-- /Steering -->

<!-- Management -->
<!--Heading-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 ><?php echo $team10; ?>‏</h3><div class="separator-2"></div><p style="display:inline;"><?php echo $team11; ?></p>
             
          </div>
        </div>
      </div>
<!-- /heading -->

      <div class="row grid-space-20">



<!-- Baseer Ahmad -->
          <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/baseerphoto.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#baseer">
                  <br><br><br>
                    <p><?php echo $team12; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/bbaheer"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/bbaheer"><i class="fa fa-twitter"></i></a></li>                   
                </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#baseer"><?php echo $team13; ?></a></h3>
              </div>
          </div>
<!-- /Baseer Baheer -->
<!-- Ziaullah  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/zia.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#zia">
                  <br><br><br>
                    <p><?php echo $team14; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/home?trk=nav_responsive_tab_home"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/Zia12mommand"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#zia"><?php echo $team15; ?></a></h3>
              </div>
          </div>
<!-- /Ziaullah  -->
<!-- khawaja  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/khawaja.JPG" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#khwaja">
                  <br><br><br>
                    <p><?php echo $team16; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/seddiqi"><i class="fa fa-linkedin"></i></a></li>
                      <li class="facebook"><a target="_blank" href="https://www.facebook.com/khawajahamed.seddiqi"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#khwaja"><?php echo $team17; ?></a></h3>
              </div>
          </div>
 <!-- /khawaja  -->

<!-- Massoud  -->
          	<div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/massooud.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#mass">
                  <br><br>
                    <p><?php echo $team18; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#mass"><?php echo $team19; ?></a></h3>
              </div>
          	</div>
<!-- /Massound  -->
</div>
<div class="row">
<!-- elham -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/elham.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#elham">
                  <br><br>
                    <p><?php echo $team20; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#elham"><?php echo $team21; ?><br><br></a></h3>
              </div>
            </div>
<!-- /elham -->

<!-- Shabana Mansoory  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/shabana.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#shabana">
                  <br>
                    <p><?php echo $team22; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/profile/view?id=196274210&trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=" https://twitter.com/shabanamansoor1"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#shabana"><?php echo $team23; ?></a></h3>
              </div>
          </div>
 <!-- /Shabana Mansoory  -->
 <!-- freshta -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/freshta.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#freshta">
                  <br><br><br>
                    <p><?php echo $pressoff; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#freshta">Freshtah Hemmati <br><br></a></h3>
              </div>
            </div>
<!-- /freshta -->
<!-- abdullah-->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/abdullah.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#rahimee">
                  <br><br><br>
                    <p><?php echo $team26 ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/profile/view?id=321360424&trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/abdullahrahemee"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#rahimee"><?php echo $abdula; ?><br><br></a></h3>
              </div>
            </div>
<!-- /abullah -->

      </div>
<!-- /management -->



<!--Mentors -->
<!-- Heading -->
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <h3 style=""><?php echo $mentor1; ?></h3><div class="separator-2"></div><p style="display:inline;"><?php echo $mentor2; ?></p>
             
          </div>
        </div>

      </div>
<!-- /heading -->

      <div class="row grid-space-20">

<!-- Asmat Ullah -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/asmat.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#asmat">
                  <br>
                    <p><?php echo $mentor3; ?> </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#asmat"><?php echo $mentor4; ?><br><br></a></h3>
              </div>
            </div>
<!-- /Asmat Ullah -->

<!-- Abdul Rahman  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/abdulrahman.png" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#rahman">
                  	<br><br>
                  	<p><?php echo $mentor14; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#rahman"><?php echo $mentor5; ?></a></h3>
              </div>
          </div>
<!-- /Abdul Rahman  -->
<!-- Nasrat -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/nasratphoto.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#nasrat">
                  	<br><br>
                  	<p><?php echo $mentor15; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#nasrat"><?php echo $mentor6; ?></a></h3>
              </div>
            </div>
<!-- /Nasrat -->
<!-- Ziaullah  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/zia.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#zia">
                  	<br><br>
                  	<p></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/home?trk=nav_responsive_tab_home"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/Zia12mommand"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#zia"><?php echo $mentor7; ?></a></h3>
              </div>
          </div>
<!-- /Ziaullah  -->

</div>
<div class="row">
<!-- Mahmood  -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/mahmood.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#mahmood">
                  	<br><br>
                  	<p><?php echo $mentor16; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://www.de.linkedin.com/pub/mahmood-asgharzada/7a/702/b6b"><i class="fa fa-linkedin"></i></a></li>
                      <li class="facebook"><a target="_blank" href="http://www.facebook.com/mahmood.asgharzada"><i class="fa fa-facebook"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#mahmood"><?php echo $mentor8; ?></a></h3>
              </div>
            </div>
<!-- /Mahmood  -->

<!-- Yaser Akrami  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/yaser.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#yaser">
                    	<br><br>
                  	<p><?php echo $mentor17; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/pub/yaser-akrami/4b/637/51"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://herathost.com/twitter.com/#!/yaserakrami"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#yaser"><br><?php echo $mentor9; ?></a></h3>
              </div>
          </div>
<!-- /Yaser Akrami  -->
<!-- akmal  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/akmal.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#akmal">
                  <br><br>
                    <p> <?php echo $mentor18; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="www.linkedin.com/pub/akmalarzhang"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="www.twitter.com/akeearzhang"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#akmal"><br><?php echo $mentor11; ?></a></h3>
              </div>
          </div>
<!-- /akmal  -->
<!-- nooria  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/Nooria Ahmadi.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#ahmadi">
                  <br><br>
                    <p><?php echo $mentor12; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/pub/yaser-akrami/4b/637/51"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://herathost.com/twitter.com/#!/yaserakrami"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#ahmadi"><br><?php echo $mentor13; ?></a></h3>
              </div>
          </div>
<!-- /noorai  -->
      </div>



<!-- Judges -->
<!-- Heading -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 style=""><?php echo $judges1; ?></h3><div class="separator-2"></div><p style="display:inline;"><?php echo $judges2; ?></p>
             
          </div>
        </div>
      </div>
<!-- /heading -->

<!-- Asmat Ullah -->
            <div class="col-md-2 col-sm-3 col-md-offset-4">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/asmat.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#asmat">
                  <br>
                    <p><?php echo $judges3; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#asmat"><?php echo $judges4; ?><br><br></a></h3>
              </div>
            </div>
<!-- /Asmat Ullah -->
<!-- Nooria  -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#nooria">
                  <br>
                    <p><?php echo $paywast; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#nooria"><?php echo $judges6; ?></a></h3>
              </div>
            </div>
<!-- /nooria -->


      </div>




       <div class="row grid-space-20">



</div>
</section>

<!-- Speakers -->
				<!-- about Section -->
		<section id="speakers" class="speak-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<!-- Speakers -->
<!-- Heading -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2><?php echo $speaker1; ?></h2><p><?php echo $speaker2; ?></p>
             <div class="separator-2"></div>
          </div>
        </div>
      </div>
<!-- /heading -->

      <div class="row grid-space-20">

<!-- Muhammad -->
           <div class="col-md-2 col-sm-3 col-md-offset-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/aimal.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#aimal">
                    <br>
                    <p><?php echo $speaker3; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#aimal"><?php echo $speaker4; ?></a></h3>
              </div>
           </div>
<!-- /Muhammad -->
<!-- Sharmini -->
           <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/sharmini.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#sharmini">
                    <br>
                    <p><?php echo $speaker5; ?></p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#sharmini"><?php echo $speaker6; ?><br><br></a></h3>
              </div>
           </div>
<!-- /Sharmini -->
<!-- Majeedullah -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/qarar.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#qarar">
                    <br>
                    <p><?php echo $speaker7; ?></p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>                
                </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#qarar"><?php echo $speaker8; ?></a></h3>
              </div>
          </div>
<!-- /Majeedullah -->


 </div>
					</div>
				</div>
			</div>
		</section>

		<!-- Events Sections -->

		<!-- prelabs Section -->
		<section id="labs" class="labs-section">
			<div id="ioe" class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="box">
							<div class="box-icon">
								<span class="fa fa-4x fa-calendar"></span>
							</div>
							<div class="info">
								<div class="row">
								<h1 class="text-center"><?php echo $event1; ?></h1>
									 <p class="text-center" ><?php echo $event2; ?></p>
								</div>
								<div class="row text-center">
									<div class="col-md-4"><h5><b><?php echo $event3; ?></b></h5><div class="separator-2"></div>
									<p class="text-left"><?php echo $event4; ?></p>
									<a href="about.php?ab=pre"><?php echo $more; ?></a>
									</div>
									<div class="col-md-4"><h5><b><?php echo $event5; ?></b></h5><div class="separator-2"></div>
									<p class="text-left"><?php echo $event6; ?></p>
									<a href="about.php?ab=lab"><?php echo $more; ?></a>
									</div>
									<div class="col-md-4"><h5><b><?php echo $event7; ?></b></h5><div class="separator-2"></div>
									<p class="text-left"><?php echo $event8; ?></p>
									<a href="about.php?ab=close"><?php echo $more; ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<section id="project" class="project-section">
			<div class="container">
				<div class="row">
					
						<h1><?php echo $project1; ?></h1>
						<div class="separator-2"></div>
					<p><?php echo $project2; ?><a href="http://kabulinnovationlab.com/lab-2012/">2012</a> and <a href="http://kabulinnovationlab.com/projects-2013/">2013</a></p>
				</div>
				<br><br>
				<div class="row">
		<div class="col-md-3 col-sm-3 col-md-offset-3">
              <div class="box-style-1 white-bg panel ">
                <div class="overlay-container">
                <h1><?php echo $project3; ?></h1>
                  <br>
                   <a href="http://kabulinnovationlab.com/lab-2012/" target="_blank"> <i class="fa fa-file-powerpoint-o"></i></a>
                  </div>
                </div>
              </div>
        <div class="col-md-3 col-sm-3">
              <div class="box-style-1 white-bg panel ">
                <div class="overlay-container">
                <h1><?php echo $project4; ?></h1>
                  <br>
                   <a href="http://kabulinnovationlab.com/projects-2013/" target="_blank"> <i class="fa fa-file-powerpoint-o"></i></a>
                  </div>
                </div>
                
              </div>
	</div>
			
			</div>
		</section>

		<!-- media Section -->
		<section id="media" class="media-section" style="background:#efefe9;">
        <div class="container">
            <div class="row">
            		<h1 style="text-align:center;" id="media">MEDIA</h1>
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>™</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="MEDIA">
                      <span class="round-tabs one">
                              <span style="font-size:30px;"><i class="fa fa-volume-up"></i></span>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="Press">
                     <span class="round-tabs two">
                          <span style="font-size:30px;"><i class="fa fa-newspaper-o"></i></span>
                     </span> 
           </a>
                 </li>
                 <li><a href="#messages" data-toggle="tab" title="photo/videos">
                     <span class="round-tabs three">
                         <span style="font-size:30px;">  <i class="fa fa-video-camera"></i><span>
                     </span> </a>
                     </li>

                     <li><a href="#settings" data-toggle="tab" title="Blog">
                         <span class="round-tabs four">
                        <span style="font-size:30px;"><i class="fa fa-cubes"></i></span>
                         </span> 
                     </a></li>

                     <li><a href="#doner" data-toggle="tab" title="Follow us">
                         <span class="round-tabs five">
                 <span style="font-size:30px;"><i class="fa fa-thumbs-up"></i></span>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <h3 class="head text-center">Announcements<sup>™</sup> <span style="color:#f48260;">♥</span></h3>
                          <p class="narrow text-center">
                             Call for Ideas 
                          </p>
                          <p class="narrow text-center">
                             Invitation to Participate 
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-warning btn-outline-rounded" style="background-color: rgb(225,121,26);color:white;"> JOIN US <span style="margin-left:10px;" class="fa fa-paper-plane"></span></a>
               
                </p>
                      </div>
                      <div class="tab-pane fade" id="profile">
                          <h3 class="head text-center">Create a Bootsnipp<sup>™</sup> Profile</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
                    <a href="" class="btn btn-warning btn-outline-rounded" style="background-color: rgb(225,121,26);color:white;"> JOIN US <span style="margin-left:10px;" class="fa fa-paper-plane"></span></a>
               
                </p>
                          
                      </div>
                      <div class="tab-pane fade" id="messages">
                          <h3 class="head text-center">Bootsnipp goodies</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
					<a href="" class="btn btn-warning btn-outline-rounded" style="background-color: rgb(225,121,26);color:white;"> JOIN US <span style="margin-left:10px;" class="fa fa-paper-plane"></span></a>
               
                </p>
                      </div>
                      <div class="tab-pane fade" id="settings">
                          <h3 class="head text-center">Drop comments!</h3>
                          <p class="narrow text-center">
                              Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
                          </p>
                          
                          <p class="text-center">
               <a href="" class="btn btn-warning btn-outline-rounded" style="background-color: rgb(225,121,26);color:white;"> JOIN US <span style="margin-left:10px;" class="fa fa-paper-plane"></span></a>

                </p>
                      </div>
                      <div class="tab-pane fade" id="doner">
  <div class="text-center">
    <i class="img-intro icon-checkmark-circle"></i>
</div>
<h3 class="head text-center">thanks for staying tuned! <span style="color:#f48260;">♥</span> Bootstrap</h3>
<p class="narrow text-center">
  Lorem ipsum dolor sit amet, his ea mollis fabellas principes. Quo mazim facilis tincidunt ut, utinam saperet facilisi an vim.
</p>
</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
</section>
             
		<!-- participate Section -->
		<section id="part" class="part-section">
			
			<div class="container">
			<div class="row">
				<h2><?php echo $Participate1; ?></h2>
				<div class="separator-2"></div>
				<p><?php echo $Participate2; ?></p>
			</div>
			<div class="row">
			<div class="col-md-offset-1">
    <ul class="ds-btn">
     <li>
             <a class="btn btn-lg btn-info" href="about.php?ab=why">
          <i class="fa fa-question-circle fa-3x pull-left"></i><span><?php echo $Participate3; ?><br><small><?php echo $Participate4; ?></small></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-primary" href="about.php?ab=select">
          <i class="fa fa-users fa-3x pull-left"></i><span><?php echo $Participate5; ?><br><small><?php echo $Participate6; ?></small></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-warning " href="about.php?ab=expect">
         <i class="fa fa-line-chart fa-3x pull-left"></i><span><?php echo $Participate7; ?><br><small><?php echo $Participate8; ?></small></span></a> 
            
        </li>
    </ul>
    </div>
			</div>
				<form name="myform" method="post" action="db.con.php" onsubmit="return chek();">

					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">

							<!--      Wizard container        -->
							<div class="wizard-container" id="re-wizard">

								<?php
								if(isset($_SESSION['success']))
								{
								?>

								<div id="one" >

									<?php echo $_SESSION['success']; ?>
								</div>
								<?php
								}
								unset($_SESSION['success']);
								?>

								<div class="card wizard-card ct-wizard-green" id="wizard">

									<!--        You can switch "ct-wizard-azzure"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

									<div class="wizard-header">
										<h3><?php echo $Participate9; ?></h3>
									</div>
									<ul>
										<li>
											<a href="#personal" data-toggle="tab"><?php echo $Participate10; ?></a>
										</li>
										<li>
											<a href="#occupation" data-toggle="tab"><?php echo $occupation; ?></a>
										</li>
									</ul>
									<form name="myform" action="#" method="get" onsubmit="return chek();">
										<div class="tab-content">
											<div class="tab-pane" id="personal">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group left-inner-addon required-field-block">
																<span class="fa fa-user"></span>
																<span class="pull-left text-left" id="error1" style="color:red"></span>
															<input type="text" class="form-control fa fa-user" name="firstname"  id="fname" placeholder="<?php echo $Participate11; ?>" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];} ?>" >
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
																	<span class="fa fa-user"></span>
											</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-user"></span>
															<span class="pull-left text-left" id="error2" style="color:red"></span>
															<input type="text" class="form-control fa fa-user" name="lastname" id="lname" placeholder="<?php echo $Participate12; ?>" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-mobile-phone"></span>
															<span class="pull-left" id="error3" style="color:red"></span>
															<input type="tel" class="form-control fa fa-phone" name="phonnumber" id="tel" placeholder="<?php echo $phonno; ?>" value="<?php if(isset($_SESSION['pnum'])){echo $_SESSION['pnum'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>

													<div class="col-md-6">

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-envelope"></span>
															<span class="pull-left" id="error4" style="color:red"></span>
															<input type="email" class="form-control fa fa-envelope" name="email" id="email" placeholder="<?php echo $Participate13; ?>" value="<?php if(isset($_SESSION['em'])){echo $_SESSION['em'];} ?>"/>
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
															<?php
																if(isset($_SESSION['suc']))
																		{
															?>

															<div id="onono" class='text-danger pull-left' >

																<?php echo $_SESSION['suc']; ?>
															</div>
															<?php }
															unset($_SESSION['suc']);
															?>
														</div>
														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-tasks"></span>
															<span class="pull-left" id="error5" style="color:red"></span>
															<input type="text" class="form-control fa fa-tasks" name="occopation" id="job" placeholder="<?php echo $Participate14; ?>" value="<?php if(isset($_SESSION['occ'])){echo $_SESSION['occ'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-globe"></span>
															<span class="pull-left" id="error6" style="color:red"></span>
															<input type="text" class="form-control fa fa-globe" name="company" id="company" placeholder="<?php echo $Participate15; ?>" value="<?php if(isset($_SESSION['comp'])){echo $_SESSION['comp'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>
													<div class="row">
													<div class="separator-2"></div>
														<label><?php echo $Participate16; ?></label>
														<input type="checkbox" name="lan1" value="<?php echo $Participate17; ?>" id="lan1">
														Pashto&nbsp;&nbsp;
														<input type="checkbox" name="lan2" value="<?php echo $ps; ?>" id="lan2">
														Dari&nbsp;&nbsp;
														<input type="checkbox" name="lan3" value="<?php echo $Participate18; ?>" id="lan3">
														English&nbsp;&nbsp;
														<div class="form-group col-md-10 col-md-offset-1">
															<input type="text" class="form-control" name="lan4" id="other" placeholder="<?php echo $Participate19; ?>">
															<span class="" id="error7" style="color:red"></span>
														</div>

														</div>
												</div>
												<div class="row">

													<?php
if(isset($_SESSION['su']))
{
													?>
													<div class= 'text- alert-dismissible text-danger text-center'>
														<?php echo $_SESSION['su']; ?>
													</div>
													<?php
													}
													unset($_SESSION['su']);
													?>
												</div>
											</div>
											<div class="tab-pane" id="occupation">
												<div class="row">
													<div class="col-md-12">
														<div class="form-group pull-left">
															<label><?php echo $wherp; ?></label> &nbsp;&nbsp;&nbsp;
															<input type="radio" name="place" value="kabul" checked="">- Kabul &nbsp; <input type="radio" name="place" value="herat">- Herat
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="pre-lab1" placeholder="<?php echo $Participate20; ?>"><?php if(isset($_SESSION['pre'])){echo $_SESSION['pre'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="intrest" placeholder="<?php echo $Participate21; ?>"><?php if(isset($_SESSION['in'])){echo $_SESSION['in'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="social" placeholder="<?php echo $Participate22; ?>"><?php if(isset($_SESSION['social'])){echo $_SESSION['social'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="problem" placeholder="<?php echo $Participate23; ?>"><?php if(isset($_SESSION['prob'])){echo $_SESSION['prob'];} ?></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wizard-footer">
											<div class="pull-right">
												<input type='button' class='btn btn-next btn-primary btn-outline btn-sm' name='next' value='<?php echo $Participate27; ?>' />

												<input type='submit' class='btn btn-finish btn-primary btn-outline btn-sm' name='Submit' value='<?php echo $Participate25; ?>' />
											</div>
											<div class="pull-left">
												<input type='button' class='previous btn btn-previous btn-default btn-outline btn-sm' name='previous' value='<?php echo $Participate26; ?>' />
											</div>
											<div class="clearfix"></div>
										</div>
									</form>

								</div>
							</div>
							<!-- wizard container -->
						</div>
					</div>
					<!-- row -->
			</div>
		</section>

		<!-- venue Section -->
		<section id="venue" class="venue-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<h1><?php echo $venu1; ?></h1>
					<div class="separator-2"></div>
					<p><?php echo $venu2; ?></p>
					<p><?php echo $venu3; ?> <a href="mailto:ilabs@technation.af">ilabs@technation.af</a> <?php echo $venu5; ?></p>
					</div>
				</div>
			</div>
		</section>

		
			

		
		

		

		<!-- past-lab Section -->
		<section id="past" class="past-section">
			<div class="container">
				<div class="page-header">
					<h1 id="timeline"><?php echo $piLab1; ?></h1>
				</div>
				<ul class="timeline" >
					<li>
						<div class="timeline-badge" >
							<i class=""><?php echo $piLab2; ?></i>
						</div>
						<div class="timeline-panel" >
							<div class="timeline-body text-left text-justify">
								<p>
									<?php echo $piLab3; ?><a href="http://kabulinnovationlab.com/lab-2012/"><?php echo $piLab4; ?></a>
								</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-badge warning">
							<i class=""><?php echo $piLab5; ?></i>
						</div>
						<div class="timeline-panel">
							<div class="timeline-body text-left text-justify">
								<p>
		<?php echo $piLab6; ?><a href="http://mcit.gov.af/"><?php echo $piLab7; ?></a><?php echo $piLab8; ?><a href="http://kabulinnovationlab.com/"><?php echo $piLab4; ?></a>
								</p>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</section>

		<!-- Contact Section -->
		<section id="contact" class="contact-section">
			<div class="container">
				<div class="row">
					<h1 class="text-center"><?php echo $contact1; ?></h1>

					<div id="map-canvas">
						<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9&amp;output=embed"></iframe>
						<br />
						<small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9" style="color:#0000FF;text-align:left"><?php echo $view; ?></a></small>
					</div>
					<hr>
					<div class="col-md-7">
					<form>
						<div class="row form-group">
							<div class="col-md-5">
								<input class="form-control" id="c-name" name="name" placeholder="<?php echo $fname ?>" required="" type="text">
							</div>
							<div class="col-md-7">
								<input class="form-control" id="c-email" name="email" placeholder="<?php echo $email ?>" required="" type="email">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<textarea class="form-control" id="c-message" placeholder="Your Message" name="message"></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input type="button" onclick="conta('c-name','c-email','c-message','submit');"  value="Contact Us" name="submit" class="btn btn-primary btn-outline pull-right"/>
							</div>







						</div>
						</form>
					</div>
					<div class="col-sm-3 col-md-5">
						<address>
							<div class="col-md-6 pull-left text-left">
								<p class="mbottom text-justify">
								<?php echo $contact2; ?>
								</p>
								<span class="strong"><b><i class="fa fa-home"></i> TechNation Offices</b></span>
								<br >
								<?php echo $contact3; ?>
								<br/>
								<?php echo $contact4; ?>
								<br >
								<?php echo $contact5; ?>
								<br >
							</div>
							<div class="col-md-6 pull-left text-left">
								<p class="mbottom">
									<i class="fa fa-phone"></i> +93 788 161 862
								</p>
								<p class="mbottom">
									<i class="fa fa-envelope-o"></i><a href="mailto:ilabs@technation.af"> ilabs@technation.af</a>
									<br >
									<i class="fa fa-facebook"></i><a href="https://www.facebook.com/iLabs.af"> KabulLab</a>
									<br >
									<i class="fa fa-twitter"></i><a href="https://twitter.com/KabulLab"> @KabulLab</a>
									<br >
									<i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/company/ilabs-afghanistan?report%2Esuccess=MlmG7g_fqFRfD4iVhHgr0FomJDOL3vciIT4v8pi3EYkZnZLjFuJfr4acCeXZnFnMvaat" target="_blank">KabulLab</a>
									<br>
									<i class="fa fa-google-plus"></i><a href="https://plus.google.com/u/0/b/117599669345564413256/117599669345564413256/about"> KabulLab</a>
								</p>
							</div>
					</div>
				</div>
			</div>
		</section>

		<?php
		include ("includes/modal.php");
		?>
		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>

		<script type="text/javascript" src="js/jquery.bootstrap.wizard.js"></script>
		<script type="text/javascript" src="js/wizard.js"></script>

		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<script>
			$(document).ready(function() {
				//Set the carousel options
				$('#quote-carousel').carousel({
					pause : true,
					interval : 4000,
				});
			});

		</script>

	</body>

</html>
