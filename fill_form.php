<!DOCTYPE html>
<html>


<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Apply for CSI</title>
        <meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel = "icon" type = "image/png" href = "img/favicon.png" />
	
		<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
		<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.css">
        <link rel="stylesheet" href="css/style.css">
		<!-- skin -->
		<link rel="stylesheet" href="skin/default.css">

		 <style type="text/css">

	
	<style type="text/css">

		#submitbutton{
			background-color: blue;
			color: white;
			font-family: Consolas;
			width: 100px;
			text-align: center;
			padding: 5px 10px 5px 10px;

		}
		#submitbutton:hover{

			background-color: lightblue;
		}

		#form{
			position : absolute;
			margin-top: 100px;
			margin-left: 350px;

		}

		#msg{

			font-family: Consolas;
			color: red;
			text-align: center;

		}



	</style>

</head>


<body>

<!--########################################## HEADER #############################################-->

<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">
			 <div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars color-white"></span>
					</button>
					<h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;">Computer Society Of India-DTU Chapter
					</a></h1>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;" style="margin-top: 25px;">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="about.html" target="blank">About Us</a></li>
						<li><a href="#section-sponsor">Sponsors</a></li>
						<li><a href="#section-Gallery">Gallery</a></li>
						<li><a href="council.html" target="blank">Council</a></li>
					
						
						<li><a href="#section-contact">Contact Us</a></li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>



<!--#######################################      FORM      ###########################################-->

<div id = "form" style="margin-top: 110px; margin-left: 500px;">
<form method="post" action = "online_form.php" autocomplete = "on">
<table>
<tr>
	<th>First Name</th>
	<th><input type = "text" name = "firstname" placeholder="Firstname" maxlength = "50" required/></th>
</tr>

<tr>
	<th>Last Name</th>
	<th><input type = "text" name = "lastname" placeholder = "Lastname" maxlength = "25" required/></th>
</tr>

<tr>
	<th>Current Year</th>
	<th><input type = "text" name = "currentyear" placeholder = "1st or 2nd or 3rd.." maxlength = "3" required/></th>
</tr>

<tr>
	<th>Email</th>
	<th><input type = "email" name = "email" placeholder = "Email" maxlength = "25" required/>
	<?php if(isset($_GET['error'])&&$_GET['error']==2)echo "</br><span style='color:red'>User already registered</span>";?>
	</th>
</tr>

<tr>
	<th>Contact</th>
	<th><input type = "int" name = "tel" placeholder = "Telephone" maxlength = "10" required/>
<?php if(isset($_GET['error'])&&$_GET['error']==1) echo "</br><span style='color:red'>Incorrect format</span>"?>
	
	</th>
</tr>

<tr>
	<th>Years joined</th>
	<th><input type = "text" name = "yearsjoined" placeholder = "1 y or 2y or 3y.." maxlength = "25" required/></th>
</tr>

<tr>
	<th>Registration Fees</th>
	<th><input type = "int" name = "fees" placeholder = "Fees" maxlength = "3" required/></th>
</tr>

<tr>
	<th ><input type = "submit" value = "submit" id = "submitbutton" style="margin-top: 20px; margin-left: 190px;"></th> 
</tr>

</table>
</form>
</div>

<div style="height:100px; color:black;">
<p id="msg" style="margin-top: 150px;"><marquee>**Fill only after you have submitted the registration fees</marquee></p>
</div>


<section id="footer" class="section footer" style="margin-top: 739px;">
		<div class="container">
			<div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
				<div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/PhoneixCSIDTU" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/CSIDTU" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://plus.google.com/u/0/b/106882834815777278175" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="http://www.linkedin.com/groups/CSI-DTU-Updates-6714603" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i>
                        </a></li>
                    </ul>				
				</div>
			</div>

			<div class="row align-center copyright">
					<div class="col-sm-12"><p><a href="developers.html">View Developers</a></p></div>
			</div>
		</div>


<!-- #################################       Google analytics        ############################### -->

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52178544-1', 'csidtu.com');
	  ga('send', 'pageview');

	</script>

	<!-- ###################  -->


<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>	

	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/skrollr.min.js"></script>		
	<script src="js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script src="js/jquery.localscroll-1.2.7-min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/validate.js"></script>
    <script src="js/main.js"></script>
    

</body>
</html>
