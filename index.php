<html>
<head>
	<!-- site info -->
	<title>ROC That | Home</title>
	
	<!-- stylesheet -->
	<link rel='stylesheet' href='css/style.css'>
	<link rel='stylesheet' href='css/responsive.css'>
	
	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	
	<!-- bxSlider -->
	<script src="javascript/jquery.bxslider.min.js"></script>
	<link href="css/jquery.bxslider.css" rel="stylesheet"/>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	
<body style="font-family: 'Open Sans', sans-serif;">

<!-- Notify-box. Just for fun :P -->
<div id="n-box" class="notify-box">
	<div id="wrapper">
		<p style="display: inline; margin-right: 5px;">This site doesn't use cookies but sessions. So by using this site you agree we are using sessions.</p>
		<img src="http://icons.iconarchive.com/icons/seanau/flat-smiley/16/Smiley-11-icon.png">
		<div id="close-btn">
			<img src="http://icons.iconarchive.com/icons/icons8/windows-8/16/User-Interface-Close-Window-icon.png"/>
		</div>
	</div>
</div>
<!-- Notify-box end -->

<!-- Menu and Logo -->
<?php include 'header.php'; ?>
<!-- Menu and Logo -->

<!-- Mobile Menu -->
<ul id="mobile-menu" class="hidden" style="z-index: 1; position: absolute;">
	<li><a href="index.php">Home</a></li>
	<li><a href="index.php">Home</a></li>
	<li><a href="index.php">Home</a></li>
	<li><a href="index.php">Home</a></li>
</ul>

<style>
	@media (min-width: 700px) {
		#menu-btn {
			display: none;
		}
	}
	
	.hidden {
		display: none;
	}
</style>

<script>
var visible = false;

function ShowMenu() {
	if (visible == false)
	{
		document.getElementById("mobile-menu").className = "";
		visible = true;
	}
	else
	{
		document.getElementById("mobile-menu").className = "hidden";
		visible = false;
	}
}
</script>
<!-- Mobile Menu -->

<!-- The background and the Logo with the shine things :D -->
<div id="bg">
	<center>
		<div id="rays"></div>
		<img src="images/logo.png" width="190px"/>
	</center>
</div>
<!-- Background and Logo end -->

<!-- Page content -->
<div id="wrapper">
	<div id="content">
		<div id="area-light">
			<h1 style="font-family: 'Abel', sans-serif; text-align: center;">Welcome op de offici&euml;le website van ROC That!</h1>
		</div>
		<div id="area-dark">
			<div id="column-left">
				<div id="column-header">
					<h3>Concerts</h3>
				</div>
				<div id="column-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lorem sapien.</p>
				</div>
				<div id="column-footer">
					<a href="tourdata.html">Tourdata</a>
				</div>
			</div>
			<div id="column-center">
				<div id="column-header">
					<h3>Concerts</h3>
				</div>
				<div id="column-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lorem sapien.</p>
				</div>
				<div id="column-footer">
					<a href="tourdata.html">Tourdata</a>
				</div>
			</div>
			<div id="column-right">
				<div id="column-header">
					<h3>Concerts</h3>
				</div>
				<div id="column-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in lorem sapien.</p>
				</div>
				<div id="column-footer">
					<a href="tourdata.html">Tourdata</a>
				</div>
			</div>
		</div>
		<div id="area-light">
			<table>
				<tr>
					<td width="900px">
						<h3>Gastenboek</h3>
						<p>Vond je ons concert helemaal geweldig of wil je gewoon iets kwijt? Dat kan in ons gastenboek. Daar kun je een bericht achterlaten en misschien krijg je dan een bericht terug.</p>
						<a href="guestbook.html">Gastenboek</a>
					</td>
					<td width="200px" align="right">
						<img src="images/guestbook.png" width="100px" style="float: right;">
					</td>
				</tr>
			</table>
		</div>
		<div id="area-dark">
			<center>
		<table width="100%" style="margin-left: 70px;">
			<tr>
				<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >ROC That</p></td>
				<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Mobile Apps</p></td>
				<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Boeking</p></td>
				<td width="25%"><p style="color: #AAAAAA; font-size: 20px;" >Contact</p></td>
			</tr>
			<tr>
				<td style="padding-bottom: 20px;" valign="top">
				  <ul style="list-style-type: none;">
					<li><a href="register.php" style="color: #888888;" >Concerts</a></li>
					<li><a href="generate.php" style="color: #888888;" >Over ons</a></li>
				  </ul>
				</td>
				<td valign="top">
				  <ul style="list-style-type: none;">
					<li><a href="androidapp.php" style="color: #888888;" >Android</a></li>
				  </ul>
				</td>
				<td valign="top">
				  <ul style="list-style-type: none;">
					<li><a href="faq.php" style="color: #888888;" >Boek ons</a></li>
				  </ul>
				</td>
				<td valign="top">
				  <ul style="list-style-type: none;">
					<li><a href="termsofuse.php" style="color: #888888;" >Email</a></li>
					<li><p style="color: #888888;" >+31 0492-553356</p></li>
				  </ul>
				</td>
			</tr>
		</table>
	  </center>
		</div>
	</div>
</div>
<!-- Page content end -->

<!-- Some scripts to make the website work -->
<script>
//Animation for the close button (notify-box)
$("#close-btn").click(function(){
   $("#n-box").fadeOut('slow', function(){
        $("#n-box").removeClass(".notify-box");
    });
});
//END

//To make bxslide work
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
//END
</script>
<!-- END -->
</body>
</html>