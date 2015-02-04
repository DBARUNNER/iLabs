<?php
session_start();
if($_SESSION['auth']!=1){
	header("location:login.php");
}
include 'conf/conn.php';
$sql="show tables";
$result=mysql_query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
	<head>
<!-- THIS WEBSITE HAS BEEN DESIGN AND DEVELOPED BY ABDULLAH RAHIMEE AND ALL RIGHTS IS RESERVED TO HIM -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Kabul Innovation Lab">
		<meta name="author" content="Powered by TechNation's TechLabs">

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

	<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

	<body data-spy="scroll" onload='aja("prtable");' >
		<div class="container" id="con" style="background-color:#eee;">
			<div class="row" style="margin:0;">
				<div class="col-md-12" >
					
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a style="line-height:0px;font-size:12px" class="page-scroll"><i class="fa"></i>		Connect with us! &nbsp;<i class="fa fa-phone"></i>&nbsp;		+93 788 161 862‏ &nbsp;	</i>&nbsp;<i class="fa fa-envelope"></i>		ilabs@technation.af</a>
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
							<a class="page-scroll active"  href="index.php#intro" style="background-image:url('img/ilab.png'); background-size:100%; width:70px;height:52px; background-repeat:no-repeat;"> </a>
						</li>
						
			          <li>
						<a href="login.php?logout=log" style="height:52px;">logout</a>
					</li>
			        </ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container -->

		</nav>

		<!-- israr -->
 <div class="modal fade" id="show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="modal-title text-center" id="myModalLabel"><b id="hea" ></b></h2>
        
      </div>
      <div class="modal-body" style="min-height:80%;">
        <div class="row">
          
						<div id="sh" style="overflow:auto;"></div>


        </div>
        
      </div>
      
    </div>
  </div>
 </div>
<!-- /israr-->
			<!-- about Section -->
		<section id="ilab" class="ilab-section">
			<div class="container">
				<h3>Admin C-Panel</h3>
				<div class="container" id="ale"></div>
				<div class="row">
				<div class="btn-group">
					<button id="ja" class="btn btn-info btn-lg" onclick="aja('prtable');"><i class="fa fa-users"></i>		Participant table</button>
					<button class="btn btn-primary btn-lg" onclick="aja('contact');"><i class="fa fa-map-marker"></i>			Contact Us table</button>
					<button class="btn btn-success btn-lg" onclick="aja('pro_name');"><i class="fa fa-comments"></i>		Projects' Comments table</button>
				</div>
				</div>
				</div>

				<div class="container">
						
						<div id="cont"></div>
				</div>
			</div>
		</section>

		<script>
			
			function aja (table) {
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("cont").innerHTML=ob.responseText;
			  	};
			  }
			  ob.open("GET","tab.php?tab="+table,true);
			  ob.send();
			}
			
		</script>
		<script>
			
			function del (tab,id,name) {
				var x=confirm("Do You Really Want to Delete  "+name+"'s  row?");
				if(x==true){
					document.getElementById('ale').innerHTML="<div class='alert alert-info'><i class='fa fa-spinner fa-2x fa-spin'></i>			 		Please Wait Deleting is in progress</div>";	
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("ale").innerHTML=ob.responseText;
			  		aja (tab);
			  	};
			  }
			  ob.open("GET","tab.php?dela="+tab+"&id="+id+"&name="+name,true);
			  ob.send();
				}
			}
			
		</script>
		<script type="text/javascript">
			function sho (tab,id) {
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("sh").innerHTML=ob.responseText;
			  		document.getElementById("ale").innerHTML='';
			  		document.getElementById("hea").innerHTML='Show Detail';
			  	};
			  }
			  ob.open("GET","tab.php?ta="+tab+"&id="+id,true);
			  ob.send();
			}
		</script>
		<script type="text/javascript">
			function upd (tab,id) {
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("sh").innerHTML=ob.responseText;
			  		document.getElementById("hea").innerHTML='Update';
			  		aja (tab);
			  	};
			  }
			  ob.open("GET","tab.php?upd="+tab+"&id="+id,true);
			  ob.send();
			}
		</script>
		<script type="text/javascript">
			function edi_1 (tab,id) {
				document.getElementById('ale').innerHTML="<div class='alert alert-info'><i class='fa fa-spinner fa-2x fa-spin'></i>			 		Please Wait updating is in progress</div>";	
				var pro_id=document.getElementById('pro_1').value;
				var name=document.getElementById('pro_2').value;
				var comment=document.getElementById('pro_3').value;
				var date=document.getElementById('pro_4').value;
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("ale").innerHTML=ob.responseText;
			  		aja (tab);
			  	};
			  }
			  ob.open("GET","tab.php?pro="+tab+"&id="+id+"&pro_id="+pro_id+"&name="+name+"&comment="+comment+"&date="+date,true);
			  ob.send();
			}
		</script>
		<script type="text/javascript">
			function edi_2 (tab,id) {
				document.getElementById('ale').innerHTML="<div class='alert alert-info'><i class='fa fa-spinner fa-2x fa-spin'></i>			 		Please Wait updating is in progress</div>";	
				var name=document.getElementById('con_1').value;
				var email=document.getElementById('con_2').value;
				var message=document.getElementById('con_3').value;
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("ale").innerHTML=ob.responseText;
			  		aja (tab);
			  	};
			  }
			  ob.open("GET","tab.php?pro="+tab+"&id="+id+"&name="+name+"&email="+email+"&message="+message,true);
			  ob.send();
			}
		</script>
		<script type="text/javascript">
			function edi_3 (tab,id) {
				document.getElementById('ale').innerHTML="<div class='alert alert-info'><i class='fa fa-spinner fa-2x fa-spin'></i>			 		Please Wait updating is in progress</div>";	
				var firstname=document.getElementById('par_1').value;
				var lastname=document.getElementById('par_2').value;
				var phonnumber=document.getElementById('par_3').value;
				var email=document.getElementById('par_4').value;
				var job=document.getElementById('par_5').value;
				var company=document.getElementById('par_6').value;
				var language=document.getElementById('par_7').value;
				var comment1=document.getElementById('par_8').value;
				var comment2=document.getElementById('par_9').value;
				var comment3=document.getElementById('par_10').value;
				var comment4=document.getElementById('par_11').value;
				var location=document.getElementById('par_12').value;
				var background=document.getElementById('par_13').value;
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("ale").innerHTML=ob.responseText;
			  		aja (tab);
			  	};
			  }
			  ob.open("GET","tab.php?pro="+tab+"&id="+id+"&firstname="+firstname+"&lastname="+lastname+"&phonnumber="+phonnumber+"&email="+email+"&job="+job+"&company="+company+"&language="+language+"&comment1="+comment1+"&comment2="+comment2+"&comment3="+comment3+"&comment4="+comment4+"&location="+location+"&background="+background,true);
			  ob.send();
			}
		</script>
		<script>
			function mil (tab) {
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("sh").innerHTML=ob.responseText;
			  		document.getElementById("ale").innerHTML='';
			  		document.getElementById("hea").innerHTML='Email Panel';
			  	};
			  }
			  ob.open("GET","tab.php?mil="+tab,true);
			  ob.send();
			}
		</script>
		<script>
			function emil (tab) {
				var em=document.getElementById('mi').value;
				document.getElementById('ale').innerHTML="<div class='alert alert-info'><i class='fa fa-spinner fa-2x fa-spin'></i>			 		Sending the emails</div>";	
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("ale").innerHTML=ob.responseText;
			  	};
			  }
			  ob.open("GET","tab.php?emil="+tab+"&me="+em,true);
			  ob.send();
			}
		</script>
		<script>
			
			function loca (table,location) {
			 	var ob=new XMLHttpRequest();
			  ob.onreadystatechange=function(){
			  	if (ob.readyState==4 && ob.status==200) {
			  		document.getElementById("cont").innerHTML=ob.responseText;
			  	};
			  }
			  ob.open("GET","tab.php?loca="+table+"&location="+location,true);
			  ob.send();
			}
			
		</script>
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
