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
	<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kabul Innovation Lab">
		<meta name="author" content="Powered by TechNation's TechLabs">
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<title>-- Kabul Innovation Lab--</title>
		<link rel="shortcut icon" href="img/ilab.png" />
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
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

	<body data-spy="scroll" dir="<?php echo $dir; ?>">
		<div class="container" id="dir="<?php echo $dir; ?>"con" style="background-color:#eee;">
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
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<!-- Intro Section -->
		<section id="intro" class="intro-section">
			<div class="container">
				
						<img src="img/bulboff.png" width="60" id="myImage" ><div id="herat"></div>
						<br><br><br><br>
						<h3>Social and Technology Innovators Creating Tech Solutions for Social Problems.</h3>
						<br>
						<a class="btn btn-fill btn-primary btn-wd page-scroll btn-lg" href="#part" onmouseover="changeImage();" onmouseout="changeImage();">JOIN US!</a>
					</div>
				</div>
			</div>
		</section>

		<!-- <section id="timer" class="timer-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="row text-center">
						<div class="col-md-5 col-md-offset-1"><h3 class="text-center">Herat Will</h3></div>
						<div class="kabul" style="margin:2em;"></div>
						<div class="message"></div>
						<div class="col-md-5"><h3 class="text-center">Kabul Will</h3></div>
						<div class="herat" style="margin:2em;"></div>
						<div class="message"></div>
						</div>
						</div>
						<h1 id="countdown"></h1>
					</div>
						<div class="col-md-12 col-md-offset-3">
							<form method="post" action="">
							<div class="col-md-4">
								<input type="eamil" name="subscribe" class="form-control" placeholder="Enter your email for the latest iLabs news">
							</div>
								<input type="submit" value="I'M IN"  class="btn btn-fill btn-primary btn-wd">
							</form>
						</div>
			</div>
		</section> -->
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
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
				<h1>What’s iLabs</h1><br><br>
				<h3 >About</h3>
				<div class="separator-2"></div>
				<p>Innovation Labs (iLabs) is a social innovation program covering a series of meetings of social and technology actors. They harness technology to solve some of the most challenging social and environmental problems.</p>
				</div>
				<a class="btn btn-primary btn-outline" href="upload/iLabs_Call for Application_En.pdf" target="_blank" ><i class="fa fa-download"></i>	Download iLabs Overview</a><br><br>
				<a href="about.php?ab=about">Read More</a>
				<div class="row">
				<h3 >Institutions Behind</h3>
				<div class="separator-2"></div>
				<div class="row">
				<p>Organized by:</p>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-info">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=technation">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/technation.png">
						</h3>
						<p >
							Kabul-based tech and consulting firm, transforming Afghanistan into a technology nation.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-default">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=herat">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/Herat Host.png" style="width: 20%;"> Herat Host
						</h3>						
						<p>
							Herat-based software development firm building innovative software products.
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-6 ">
				<div class="offer offer-radius offer-women">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=women">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/twlogo.png"> TechWomen
						</h3>						
						<p>
							Network of women in tech, building their leadership and professional skills
						</p>
					</div>
				</div>
			</div>
        </div>		
        <div class="row">
				<p>Supported by:</p>
			<div class="col-md-4 col-sm-6 col-md-offset-2">
				<div class="offer offer-radius offer-primary">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=internews">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/internews.png">
						</h3>
						<p >
							International non-profit empowering local media worldwide.<br><br>
						</p>
					</div>
				</div>
			</div>
			<!-- <div class="col-md-4 col-sm-6 col-md-offset-2">
				<div class="offer offer-radius offer-warning">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=part">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/part.png">
						</h3>			
						<br>
						<br>
						<br>
						<br>		
						<p>
							Helping people build better lives and more durable futures, community by community.<br>
							<br>
						</p>
					</div>
				</div>
			</div> -->
			<div class="col-md-4 col-sm-6">
				<div class="offer offer-radius offer-danger">
					<div class="shape">
						<div class="shape-text">
							<a href="about.php?ab=usid">more</a>								
						</div>
					</div>
					<div class="offer-content">
						<h3 class="lead">
							<img src="img/USID.png">
						</h3>						
						<p>
							Ending extreme global poverty and enabling resilient, democratic societies to realize their potential
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
				<div class="page-header"><h1>Team</h1><p>The iLabs team is comprised of leading individuals from business, technology and social sectors. Meet some of our awesome team members</p></div>

				<!-- Steering -->
<!--Heading-->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 ">
            <h3 style="">Steering Committee</h3><div class="separator-2"></div><p style="display:inline;">Bringing together representatives from partner institutions, the project steering committee provides strategic support to the iLabs.</p>
             
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
					Civil Society and Media Manager at Internews</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#Bronwyn">Bronwyn Jones<br><br></a></h3>
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
                    <p>President at TechNation</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/omansari/"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/CyberMullah"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#omar">Omar Mansoor<br> Ansari </a></h3>
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
                    <p>Innovation Program Coordinator at Internews</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/profile/view?id=102530295&authType=NAME_SEARCH&authToken=fsA5&locale=en_US&trk=tyah2&trkInfo=idx%3A1-1-1%2CtarId%3A1422539059964%2Ctas%3Anoorin+ "><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/EshaanNoorin"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#noorin">Noorin Khuja<br>Eshaan</a></h3>
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
            <h3 >Management</h3><div class="separator-2"></div><p style="display:inline;">Led by TechNation, the management team includes experts with background in industry and academia.</p>
             
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
                    <p>Education Manager</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/bbaheer"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/bbaheer"><i class="fa fa-twitter"></i></a></li>                   
                </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#baseer">Baseer Ahmad<br> Baheer</a></h3>
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
                    <p>Technology Manager</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/home?trk=nav_responsive_tab_home"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/Zia12mommand"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#zia">Ziaullah <br>Momand</a></h3>
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
                    <p>Events Manager</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/in/seddiqi"><i class="fa fa-linkedin"></i></a></li>
                      <li class="facebook"><a target="_blank" href="https://www.facebook.com/khawajahamed.seddiqi"><i class="fa fa-facebook"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#khwaja">Khawaja Hamed <br> Seddiqi</a></h3>
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
                    <p>Promotion Manager</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#mass">Massoud <br>  Asgharzada</a></h3>
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
                    <p>Partnerships Officer</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#elham">Elham<br> Kohistani<br></a></h3>
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
                    <p>Community Officer</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/profile/view?id=196274210&trk=nav_responsive_tab_profile"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=" https://twitter.com/shabanamansoor1"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#shabana">Shabana<br> Mansoory </a></h3>
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
                    <p>Press Officer</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#freshta">Freshtah <br>Hemmati <br></a></h3>
              </div>
            </div>
<!-- /freshta -->
<!-- abdullah-->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/abdullah.JPG" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#rahimee">
                  <br><br><br>
                    <p>Web Officer</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://af.linkedin.com/in/abrahimee"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/abdullahrahemee"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#rahimee">Abdullah<br> Rahimee<br></a></h3>
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
            <h3 style="">Mentors</h3><div class="separator-2"></div><p style="display:inline;">Mentors are leading technology and social experts having diverse knowledge and skills.</p>
             
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
                    <p>Professional Development Institute, AUAF </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#asmat">Asmat Ullah<br><br></a></h3>
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
                    <p>Technical Adviser at Herat Host </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://af.linkedin.com/in/MassoudAsgharzada "><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#rahman">Abdul Rahman <br>Sherzad</a></h3>
              </div>
          </div>
<!-- /Abdul Rahman  -->
<!-- Nasrat -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/nasratphoto.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#nasrat">
                  <br><br><br>
                    <p>Innovation Activist </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#nasrat">Nasrat <br> Khalid</a></h3>
              </div>
            </div>
<!-- /Nasrat -->
<!-- Ziaullah  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/zia.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#zia">
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://www.linkedin.com/home?trk=nav_responsive_tab_home"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/Zia12mommand"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#zia">Ziaullah <br>Momand</a></h3>
              </div>
          </div>
<!-- /Ziaullah  -->

</div>
<div class="row">

<!-- asad  -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/asad.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#asad">
                  <br>
                    <p>Founder/CEO at Sahar Communications </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://af.linkedin.com/in/asadhasankbl  "><i class="fa fa-linkedin"></i></a></li>
                      <li class="facebook"><a target="_blank" href="https://twitter.com/asadhasankbl "><i class="fa fa-facebook"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#asad">Asad Hasan<br><br></a></h3>
              </div>
            </div>
<!-- /asad  -->
<!-- jamshid  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/jamshid.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#jamshid">
                  <br><br>
                    <p> CEO & Co-founder at CodeZone</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="https://twitter.com/jamshidhashimi"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="af.linkedin.com/in/jamshidhashimi"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#jamshid">Jamshid <br> Hashimi </a></h3>
              </div>
          </div>
<!-- /jamshid  -->
<!-- Mahmood  -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/mahmood.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#mahmood">
                  <br><br>
                    <p>Technical Adviser at Herat Host </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://www.de.linkedin.com/pub/mahmood-asgharzada/7a/702/b6b"><i class="fa fa-linkedin"></i></a></li>
                      <li class="facebook"><a target="_blank" href="http://www.facebook.com/mahmood.asgharzada"><i class="fa fa-facebook"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#mahmood">Mahmood<br> Asgharzada </a></h3>
              </div>
            </div>
<!-- /Mahmood  -->
<!-- akmal  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/akmal.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#akmal">
                  <br><br>
                    <p> Founder/CEO ToNext</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="www.linkedin.com/pub/akmalarzhang"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="www.twitter.com/akeearzhang"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#akmal">Akmal<br> Arzhang </a></h3>
              </div>
          </div>
<!-- /akmal  -->
      </div>
      <div class="row">
<!-- ghayor  -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ghayoor.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#ghayor">
                  <br><br>
                    <p>Founder/CEO at Experts Valley </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://linkd.in/PkzJeQ"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="https://twitter.com/bawary1"><i class="fa fa-facebook"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#ghayor">Abdul Ghayoor<br> Bawary</a></h3>
              </div>
            </div>
<!-- /ghayor  -->

<!-- naikbeen  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/naikbeen.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#naikbeen">
                  <br><br>
                    <p>Founder & CEO at SmartMaktab</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="af.linkedin.com/in/naikbeennaikpay/"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="twitter.com/naikbeen"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#naikbeen">Naikbeen <br>Naikpay </a></h3>
              </div>
          </div>
<!-- /naikbeen  -->
<!-- nooria  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#ahmadi">
                  <br><br>
                    <p> Developer TechNation</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/pub/yaser-akrami/4b/637/51"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://herathost.com/twitter.com/#!/yaserakrami"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#ahmadi">Nooria <br>Ahmadi </a></h3>
              </div>
          </div>
<!-- /noorai  -->
<!-- Yaser Akrami  -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/yaser.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#yaser">
                  <br><br>
                    <p>Project Manager at Herat Host‏</p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href="http://af.linkedin.com/pub/yaser-akrami/4b/637/51"><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href="http://herathost.com/twitter.com/#!/yaserakrami"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#yaser">Yaser<br> Akrami </a></h3>
              </div>
          </div>
<!-- /Yaser Akrami  -->

<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

</div>

<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

<!-- Judges -->
<!-- Heading -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h3 style="">Judges</h3><div class="separator-2"></div><p style="display:inline;">Judges are influential individuals in their fields and are independent from the organizer.</p>
             
          </div>
        </div>
      </div>
<!-- /heading -->

<!-- Asmat Ullah -->
            <div class="col-md-2 col-sm-3 col-md-offset-2">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/asmat.jpg" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#asmat">
                  <br>
                    <p>Professional Development Institute, AUAF </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#asmat">Asmat Ullah<br><br></a></h3>
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
                    <p>Paywast </p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#nooria">Nooria Rezazada <br> Rahim</a></h3>
              </div>
            </div>
<!-- /nooria -->

<!-- Halim Fida -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#halim">
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#halim">Halim Fida<br><br></a></h3>
              </div>
            </div>
<!-- /Halim Fida -->
<!-- Sanzar Kakar  -->
            <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#kakar">
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                      </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#kakar">Sanzar Kakar <br><br></a></h3>
              </div>
            </div>
<!-- /Sanzar Kakar -->
      </div>


<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

       <div class="row grid-space-20">

<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

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
            <h2>Speakers</h2><p>Leaders from governments, industry, civil society and academia converge at iLabs to discuss hot topics around technology and social innovation. </p>
             <div class="separator-2"></div>
          </div>
        </div>
      </div>
<!-- /heading -->

      <div class="row grid-space-20">

<!-- Muhammad -->
           <div class="col-md-2 col-sm-3 col-md-offset-1">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/aimal.jpg" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#aimal">
                    <br>
                    <p>Deputy Minister (IT) </p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#aimal">Muhammad <br>Aimal Marjan</a></h3>
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
                    <p>Country Director </p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#sharmini">Sharmini<br> Boyle<br></a></h3>
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
                    <p>Social Activist</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>                
                </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#qarar">Majeedullah <br> Qarar</a></h3>
              </div>
          </div>
<!-- /Majeedullah -->
<!-- mohib -->
           <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                    <div class="overlay" href="#" data-toggle="modal" data-target="#mohib">
                    <br>
                    <p> </p>
                      <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                    </ul>
                   </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#mohib">Hamdullah<br> Mohib<br></a></h3>
              </div>
           </div>
<!-- /mohib -->
<!-- Majeedullah -->
          <div class="col-md-2 col-sm-3">
              <div class="box-style-1 white-bg team-member">
                <div class="overlay-container">
                  <img src="img/ava.png" alt="">
                  <div class="overlay" href="#" data-toggle="modal" data-target="#israr">
                    <br>
                    <p>Social Activist</p>
                    <ul class="social-links clearfix">
                      <li class="linkedin"><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                      <li class="twitter"><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>                
                </ul>
                  </div>
                </div>
                <h3><a class="btn btn-link" href="#" data-toggle="modal" data-target="#israr">Israr Ahmad<br> Khan</a></h3>
              </div>
          </div>
<!-- /Majeedullah -->

 </div>
					</div>
				</div>
			</div>
		</section>

		<!-- schedule Section -->
		<section id="schedule" class="schedule-section">
			<div class="container">
				<h2>Schedule</h2>
				<div class="panel panel-primary" >
                <div class="panel-heading" style="background-color:rgb(225,121,26);">
                <h3 class="panel-title"> iLabs in Herat</h3>
                </div>
	                <div class="panel-body">
	                    <div class="row">
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Saturday, February 14</h4>
	                        	<h5>PRE-LAB IN HERAT</h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing pre-Lab in Herat<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Tuesday, February 17</h4>
	                        	<h5>MAIN-LAB IN HERAT <small>DAY 1</small></h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing main-Lab Day 1 in Herat<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Wednesday, February 18</h4>
	                        	<h5>MAIN-LAB IN HERAT<small> DAY 2</small></h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o "></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing main-Lab Day 2 in Herat<br> & Press Conference<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                    </div>
	                    
	                </div>
            	</div>
            	<div class="panel panel-primary" >
                <div class="panel-heading" style="background-color:rgb(225,121,26);">
                <h3 class="panel-title"> iLabs in Kabul</h3>
                </div>
	                <div class="panel-body">
	                    <div class="row">
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Sunday, March 15</h4>
	                        	<h5>PRE-LAB IN KABUL</h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing pre-Lab in Kabul<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Monday, March 23</h4>
	                        	<h5>MAIN-LAB IN KABUL <small>DAY 1</small></h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing main-Lab Day 1 in Kabul<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                        <div class="col-sm-4">
	                        	<div class="row">
	                        	<h4>Tuesday, March 24</h4>
	                        	<h5>MAIN-LAB IN KABUL<small> DAY 2</small></h5>
	                        	<div class="separator-2"></div>
	                        	</div>
	                        	<div class="row text-left">
	                        	<h6>Registration & Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	8:30am</small></h6>
	                        	<h6>Morning Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o "></span>	9:30am - 12:30pm</small></h6>
	                        	<h6>Lunch & Prayer<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	12:30pm - 13:30pm</small></h6>
	                        	<h6>Afternoon Labs<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	13:30pm - 16:30pm</small></h6>
	                        	<h6>Closing main-Lab Day 2 in Kabul<br> & Press Conference<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:30pm - 17:00pm</small></h6>
	                        	</div>
	                        </div>
	                    </div>
	                    
	                </div>
            	</div>
            	<div class="row">
            	<div class="col-sm-8 col-sm-offset-2">
            	<div class="panel panel-primary" >
                <div class="panel-heading" style="background-color:rgb(225,121,26);">
                <h3 class="panel-title"> CLOSING, AWARDS AND SOCIAL</h3>
                </div>
	                <div class="panel-body">
	                        	<h4>Thursday, March 26</h4>
	                        	<div class="separator-2"></div>
	                        	<div class="row text-left">
	                        	<h6>Arrival, Registration, Networking<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	14:00pm - 14:30pm</small></h6>
	                        	<h6>iLabs 2015 Report<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	14:30 - 14:45</small></h6>
	                        	<h6>Speeches by leaders from government, industry, civil society<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	14:45 - 15:45</small></h6>
	                        	<h6>Awards & Certifications<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	15:45 - 16:45</small></h6>
	                        	<h6>Press Conference<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:45</small></h6>
	                        	<h6>Networking & Social<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span>	16:45-18:45</small></h6>
	                        	</div>
	                    </div>
	                </div>
            	</div>
            	</div>
            	</div>
		</section>

<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

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
								<h1 class="text-center">Events</h1>
									 <p class="text-center" >iLabs events include information sessions known as pre-Labs, and the main innovation labs called iLabs. iLabs closes with a high-level Closing Ceremony and Social Evening.</p>
								</div>
								<div class="row text-center">
									<div class="col-md-4"><h5><b>PreLabs</b></h5><div class="separator-2"></div>
									<p class="text-left">Preparatory, information and learning sessions, where participants identify social problems and propose prototyped tech solutions.</p>
									<a href="about.php?ab=pre">Read More</a>
									</div>
									<div class="col-md-4"><h5><b>iLabs</b></h5><div class="separator-2"></div>
									<p class="text-left">Main-Labs, which are the actual iLabs, where various ideas identified in pre-Labs are being transformed into more advanced prototypes, and are vetted by judges.</p>
									<a href="about.php?ab=lab">Read More</a>
									</div>
									<div class="col-md-4"><h5><b>Closing, Awards and Social Evening</b></h5><div class="separator-2"></div>
									<p class="text-left">Discussing issues around social innovation, and its implications for the benefit of Afghanistan.</p>
									<a href="about.php?ab=close">Read More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<section id="project" class="project-section">
			<div class="container">
				<div class="row">
					
						<h1>Projects</h1>
						<div class="separator-2"></div>
					<p>The proposed projects from 2015 are not yet available, but here you can see the iLabs projects from <a href="http://kabulinnovationlab.com/lab-2012/">2012</a> and <a href="http://kabulinnovationlab.com/projects-2013/">2013</a></p>
				</div>
				<br><br>
				<div class="row">
		<div class="col-md-3 col-sm-3 col-md-offset-3">
              <div class="box-style-1 white-bg panel ">
                <div class="overlay-container">
                <h1>2012</h1>
                  <br>
                   <a href="http://kabulinnovationlab.com/lab-2012/" target="_blank"> <i class="fa fa-file-powerpoint-o"></i></a>
                  </div>
                </div>
              </div>
        <div class="col-md-3 col-sm-3">
              <div class="box-style-1 white-bg panel ">
                <div class="overlay-container">
                <h1>2013</h1>
                  <br>
                   <a href="http://kabulinnovationlab.com/projects-2013/" target="_blank"> <i class="fa fa-file-powerpoint-o"></i></a>
                  </div>
                </div>
                
              </div>
	</div>
				<!--<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>Android News</h3>
							<div class="thumbnail">
								<img src="img/dsc_0257.jpg"alt="...">
								<div class="caption">
									<p class="text-justify">
										1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio,
									</p>
									<p>
										<a class="btn btn-primary btn-outline" href="" data-toggle="modal" data-target="one" onclick="show('1','com1');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>Tolo News</h3>
							<div class="thumbnail">
								<img src="img/dsc_0744.jpg" alt="...">
								<div class="caption">
									<p class="text-justify">
										Tolo News’ online elections coverage. This site will maximising interaction and user-driven content, and will include mapping public
									</p>
									<p>
										<a href="" class="btn btn-primary btn-outline" role="button" href="" data-toggle="modal" data-target="two" onclick="show('2','com2');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>Android News</h3>
							<div class="thumbnail">
								<img src="img/dsc_0745 (1).jpg" alt="...">
								<div class="caption">
									<p class="text-justify">
										8AM news via Android! This new mobile application will customise content from one of Afghanistan’s leading investigative newspapers application
									</p>
									<p>
										<a href="" class="btn btn-primary btn-outline" role="button" href="" data-toggle="modal" data-target="three" onclick="show('3','com3');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>One Tv</h3>
							<div class="thumbnail">
								<img src="img/dsc_0257.jpg"alt="...">
								<div class="caption">
									<p class="text-justify">
										1TV Reporting App will feature moderated content from members of the Afghan public. Citizens will be invited to capture images, audio
									</p>
									<p>
										<a href="" class="btn btn-primary btn-outline" role="button" href="" data-toggle="modal" data-target="four" onclick="show('4','com4');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>Tolo News</h3>
							<div class="thumbnail">
								<img src="img/dsc_0744.jpg" alt="...">
								<div class="caption">
									<p class="text-justify">
										Tolo News’ online elections coverage. This site will maximising interaction and user-driven content, and will include mapping public
									</p>
									<p>
										<a href="" class="btn btn-primary btn-outline" role="button" href="" data-toggle="modal" data-target="five" onclick="show('5','com5');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<h3>Android News</h3>
							<div class="thumbnail">
								<img src="img/dsc_0745 (1).jpg" alt="...">
								<div class="caption">
									<p class="text-justify">
										8AM news via Android! This new mobile application will customise content from one of Afghanistan’s leading investigative newspapers
									</p>
									<p>
										<a href="" class="btn btn-primary btn-outline" role="button" href="" data-toggle="modal" data-target="six" onclick="show('6','com6');">Read more</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
					-->
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
                     <li class="active med">
                     <a href="#home" data-toggle="tab" title="MEDIA">
                      <span class="round-tabs one">
                              <span style="font-size:30px;"><i class="fa fa-volume-up"></i></span>
                      </span> 
                  </a></li>

                  <li class="med"><a href="#profile" data-toggle="tab" title="Press">
                     <span class="round-tabs two">
                          <span style="font-size:30px;"><i class="fa fa-newspaper-o"></i></span>
                     </span> 
           </a>
                 </li>
                 <li class="med"><a href="#messages" data-toggle="tab" title="photo/videos">
                     <span class="round-tabs three">
                         <span style="font-size:30px;">  <i class="fa fa-video-camera"></i><span>
                     </span> </a>
                     </li>

                     <li class="med"><a href="#settings" data-toggle="tab" title="Blog">
                         <span class="round-tabs four">
                        <span style="font-size:30px;"><i class="fa fa-cubes"></i></span>
                         </span> 
                     </a></li>

                     <li class="med"><a href="#doner" data-toggle="tab" title="Follow us">
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
				<h2>Participate</h2>
				<div class="separator-2"></div>
				<p>iLabs is a free, competitive entry program. We are interested in having the best and brightest minds to join our events. If you are one of them, please fill out our application form. See Eligibility Criteria and Expections from Participants before you start filling out the form.</p>
			</div>
			<div class="row">
			<div class="col-md-offset-1">
    <ul class="ds-btn">
     <li>
             <a class="btn btn-lg btn-info" href="about.php?ab=why">
          <i class="fa fa-question-circle fa-3x pull-left"></i><span>Why<br><small>Participate? </small></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-primary" href="about.php?ab=select">
          <i class="fa fa-users fa-3x pull-left"></i><span>Participants<br><small>Selection Criteria</small></span></a> 
            
        </li>
        <li>
             <a class="btn btn-lg btn-warning " href="about.php?ab=expect">
         <i class="fa fa-line-chart fa-3x pull-left"></i><span>Expectations<br><small>From Participants</small></span></a> 
            <!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
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
										<h3>Participant Nomination Form</h3>
									</div>
									<ul>
										<li>
											<a href="#personal" data-toggle="tab">Personal Info</a>
										</li>
										<li>
											<a href="#occupation" data-toggle="tab">Occupational Info</a>
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
															<input type="text" class="form-control fa fa-user" name="firstname"  id="fname" placeholder="Your first Name" value="<?php if(isset($_SESSION['fname'])){echo $_SESSION['fname'];} ?>" >
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-user"></span>
															<span class="pull-left text-left" id="error2" style="color:red"></span>
															<input type="text" class="form-control fa fa-user" name="lastname" id="lname" placeholder="Your Last Name" value="<?php if(isset($_SESSION['lname'])){echo $_SESSION['lname'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-mobile-phone"></span>
															<span class="pull-left" id="error3" style="color:red"></span>
															<input type="tel" class="form-control fa fa-phone" name="phonnumber" id="tel" placeholder="Your Phone Number" value="<?php if(isset($_SESSION['pnum'])){echo $_SESSION['pnum'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>

													<div class="col-md-6">

														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-envelope"></span>
															<span class="pull-left" id="error4" style="color:red"></span>
															<input type="email" class="form-control fa fa-envelope" name="email" id="email" placeholder="Your Email Address" value="<?php if(isset($_SESSION['em'])){echo $_SESSION['em'];} ?>"/>
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
															<input type="text" class="form-control fa fa-tasks" name="occopation" id="job" placeholder="Occupation/ job title" value="<?php if(isset($_SESSION['occ'])){echo $_SESSION['occ'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
														<div class="form-group left-inner-addon required-field-block">
															<span class="fa fa-globe"></span>
															<span class="pull-left" id="error6" style="color:red"></span>
															<input type="text" class="form-control fa fa-globe" name="company" id="company" placeholder="Company/ organization name" value="<?php if(isset($_SESSION['comp'])){echo $_SESSION['comp'];} ?>">
															<div class="required-icon">
												                <div class="text">*</div>
												            </div>
														</div>
													</div>
													<div class="row">
													<div class="separator-2"></div>
														<label>Which language are you fluent,i.e. speaking, writing, and reading?</label>
														<input type="checkbox" name="lan1" value="dari" id="lan1">
														Pashto&nbsp;&nbsp;
														<input type="checkbox" name="lan2" value="pashto" id="lan2">
														Dari&nbsp;&nbsp;
														<input type="checkbox" name="lan3" value="english" id="lan3">
														English&nbsp;&nbsp;
														<div class="form-group col-md-10 col-md-offset-1">
															<input type="text" class="form-control" name="lan4" id="other" placeholder="Other Language....">
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
													<div class="form-group pull-left col-sm-6">
															<label>Where are you interested to attend iLabs?</label> &nbsp;&nbsp;&nbsp;<br>
															<input type="radio" name="location" value="kabul" checked=""> Kabul &nbsp; <input type="radio" name="location" value="herat"> Herat
													</div>
													<div class="form-group pull-left col-sm-6">
															<label>Please, let us know what background you are coming from?</label>
															<input type="radio" name="back" value="social worker" checked=""> I am social worker &nbsp; <input type="radio" name="back" value="technologist‏"> I am a technologist‏
													</div>
												</div>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" rows="2" name="pre-lab1" placeholder="Have you previously participated in events like iLabs? If so, please explain."><?php if(isset($_SESSION['pre'])){echo $_SESSION['pre'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="intrest" placeholder="Why are you interested in participating in iLabs 2015?"><?php if(isset($_SESSION['in'])){echo $_SESSION['in'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="social" placeholder="How do you think you can contribute to iLabs and social innovation programs in general?"><?php if(isset($_SESSION['social'])){echo $_SESSION['social'];} ?></textarea>
														</div>
														<div class="form-group">
															<textarea class="form-control" rows="2" name="problem" placeholder="Social problem you might have identified (200 Word)"><?php if(isset($_SESSION['prob'])){echo $_SESSION['prob'];} ?></textarea>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="wizard-footer">
											<div class="pull-right">
												<input type='button' class='btn btn-next btn-primary btn-outline btn-sm' name='next' value='Next' />

												<input type='submit' class='btn btn-finish btn-primary btn-outline btn-sm' name='Submit' value='Finish' />
											</div>
											<div class="pull-left">
												<input type='button' class='previous btn btn-previous btn-default btn-outline btn-sm' name='previous' value='Previous' />
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
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<!-- venue Section -->
		<section id="venue" class="venue-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					<h1>Venue </h1>
					<div class="separator-2"></div>
					<p>Information on the venues for Pre-labs and iLabs in Kabul and Herat will be identified later.</p>
					<p> For inquiries you can email us at <a href="mailto:ilabs@technation.af">ilabs@technation.af</a> or call us on +93 788 161 862‏.</p>
					
					</div>
				</div>
			</div>
		</section>

		
			<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->

		
		

		

		<!-- past-lab Section -->
		<section id="past" class="past-section">
			<div class="container">
				<div class="page-header">
					<h1 id="timeline">Past iLabs</h1>
				</div>
				<ul class="timeline" >
					<li>
						<div class="timeline-badge" >
							<i class="">2012</i>
						</div>
						<div class="timeline-panel" >
							<div class="timeline-body text-left text-justify">
								<p>
									Internews launched the first Innovation Lab in January 2012 with the theme “Tech solutions for social impact”. It was the first event of its kind in Afghanistan, bringing together IT experts and the broader ICT community to network and discuss the emerging environment and build tech-based systems. The 2012 event was a great success, taking place in a dynamic creative and practical environment.<a href="http://kabulinnovationlab.com/lab-2012/"> Read More</a>
								</p>
							</div>
						</div>
					</li>
					<li class="timeline-inverted">
						<div class="timeline-badge warning">
							<i class="">2013</i>
						</div>
						<div class="timeline-panel">
							<div class="timeline-body text-left text-justify">
								<p>
									The second Innovation Lab was launched on February 11th, 2013 with a public forum covering Afghanistan’s ICT sector developments, the <a href="http://mcit.gov.af/">MCIT</a>’s mobile and innovation initiatives, 3G and digital platforms. The forum brought together stakeholders from the media, telecommunications and ICT sectors to network and share information relevant to the convergence of technology and media in Afghanistan.<a href="http://kabulinnovationlab.com/"> Read More</a>
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
					<h1 class="text-center">WE ARE HERE</h1>

					<div id="map-canvas">
						<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9&amp;output=embed"></iframe>
						<br />
						<small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=technation&amp;sll=34.75064,68.598633&amp;sspn=2.355912,4.938354&amp;t=m&amp;ie=UTF8&amp;hq=technation&amp;hnear=&amp;ll=34.637728,68.89801&amp;spn=0.677933,0.823975&amp;z=9" style="color:#0000FF;text-align:left">View Map</a></small>
					</div>
					<hr>
					<div class="col-md-5">
					<form>
						<div class="row form-group">
							<div class="col-md-5">
								<input class="form-control" id="c-name" name="name" placeholder="Full Name" required="" type="text">
							</div>
							<div class="col-md-7">
								<input class="form-control" id="c-email" name="email" placeholder="Email" required="" type="email">
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



<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->



						</div>
						</form>
					</div>
					<div class="col-sm-3 col-md-7">
						<address>
								<p class="mbottom text-center">
									We would love to talk to you and answer all of your questions
								</p>						<div class="row">
							<div class="col-md-4 pull-left text-left">
								
								<p class="mbottom">
								<i class="fa fa-phone"></i> +93 788 161 862<br>
									<i class="fa fa-envelope-o"></i><a href="mailto:ilabs@technation.af"> ilabs@technation.af</a>
									<br >
									<i class="fa fa-facebook"></i><a href="https://www.facebook.com/iLabs.af"> KabulLab</a>
									<br >
									<i class="fa fa-twitter"></i><a href="https://twitter.com/iLabsAf"> @KabulLab</a>
									<br >
									<i class="fa fa-linkedin"></i><a href="https://www.linkedin.com/company/ilabs-afghanistan?report%2Esuccess=MlmG7g_fqFRfD4iVhHgr0FomJDOL3vciIT4v8pi3EYkZnZLjFuJfr4acCeXZnFnMvaat" target="_blank">KabulLab</a>
									<br>
									<i class="fa fa-google-plus"></i><a href="https://plus.google.com/u/0/b/117599669345564413256/117599669345564413256/about"> KabulLab</a>
								</p>
							</div>
							<div class="col-md-4 pull-left text-left">

								<b class="text-center">Address in Kabul</b><br><br>
								<span class="strong"><b><i class="fa fa-home"></i> TechNation Offices</b></span>
								<br >
								5th Seelo Street
								<br/>
								Dehnaw-e Dehboori
								<br >
								Kabul, Afghanistan
								<br >
							</div>
							
							<div class="col-md-4 pull-left text-left">
							<b class="text-center">Address in Herat</b><br><br>
								<span class="strong"><b><i class="fa fa-home"></i> Herat Host Offices</b></span>
								<br >
								Roshan Telecom Company Street
								<br/>
								4th District
								<br >
								 Herat, Afghanistan
								<br >
							</div>
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

		<!-- scroll -->
		<script type="text/javascript" src="js/autodivscroll.js"></script>
		<script type="text/javascript">new AutoDivScroll( "scrollContent", 50, 1, 1 );</script>
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/countdown.js"></script>
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
		<script>
		function changeImage() {
		    var image = document.getElementById('myImage');
		    if (image.src.match("bulbon")) {
		        image.src = "img/bulboff.png";
		    } else {
		        image.src = "img/bulbon.png";
		    }
		}
		$(function() {
    var fiveMinutes = 60 * 5,
        display = $('#countdown'),
        mins, seconds;
    setInterval(function() {
        mins = parseInt(fiveMinutes / 60)
        seconds = parseInt(fiveMinutes % 60);
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        display.text(mins + ":" + seconds);
        fiveMinutes--;

        if (fiveMinutes < 0) {
            fiveMinutes = 60 * 5;
        }
    }, 1000);
});
		</script>

	</body>
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
</html>
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->