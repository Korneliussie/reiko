<?php
session_start();
include('config.php') ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link href="logo.png" rel='SHORTCUT ICON'/>
<title>CV. Yaki Utama - About Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Place your description here" />
<meta name="keywords" content="put, your, keyword, here" />
<meta name="author" content="Templates.com - website templates provider" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Myriad_Pro_300.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<script type="text/javascript" src="js/ie_png.js"></script>
	<script type="text/javascript">
		 ie_png.fix('.png, #header .row-2 ul li a, #content, .list li');
	</script>
<![endif]-->
</head>
<body id="page2">
<div class="tail-top">
	<div class="tail-bottom">
		<div class="body-bg">
			<!-- HEADER -->
			<div id="header">
				<div class="extra"><img src="images/header-img.jpg" alt="" /></div>
				<div class="row-1">
					<div class="fleft"><a href="home.php"><img src="images/logo.gif" alt="" /></a></div>
					<div class="fright"><img src="images/phone.gif" alt="" /></div>
				</div>
				<div class="row-2">
					<ul>
						<li class="m1"><a href="home.php">Home</a></li>
						<li class="m2"><a href="about-us.php" class="active">About</a></li>
						<li class="m3"><a href="services.php">Services</a></li>
						<li class="m4"><a href="support.php">Support</a></li>
						<li class="m5"><a href="register.php">Register</a></li>
						<li class="m6">
						<?php
						if (!empty($_SESSION['username'])) {
    					echo "<a href='logout.php' style='text-decoration:none'>Logout</a>";
						}
						elseif (empty($_SESSION['username'])) {
    					echo "<a href='login.php' style='text-decoration:none'>Login</a>";
						}
						?>
						</li>
					</ul>
				</div>
				<div class="row-3"><img src="images/slogan.gif" alt="" />
					<form action="" method="post" id="search-form">
						<fieldset>
						<div><span>
							<input type="text" value="Enter keyword here" onfocus="if(this.value=='Enter keyword here'){this.value=''}" onblur="if(this.value==''){this.value='Enter keyword here'}" />
							</span><a href="#" onclick="document.getElementById('search-form').submit()"><img src="images/button.gif" alt="" /></a></div>
						</fieldset>
					</form>
				</div>
			</div>
			<!-- CONTENT -->
			<div id="content"><div class="inner_copy">More <a href="http://www.templates.com/">Website Templates</a> @ Templates.com!</div>
				<div class="tail-right">
					<div class="wrapper">
						<div class="col-1">
							<div class="indent">
								<div class="indent1">
									<h3>About Your Website</h3>
									<p class="p0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem.</p>
								</div>
								<h4>About Your Team</h4>
								<ul class="list1">
									<li><img src="images/2page-img1.jpg" alt="" /><strong><a href="#">Team Member One</a></strong>He is supposed to be the most important member of your team. Usually this is the person who has started the website. Maybe it is worth to write why he made has such a decision.</li>
									<li><img src="images/2page-img2.jpg" alt="" /><strong><a href="#">Another Team Member</a></strong>We are completly lost on what he's responsible for, but we hope that you know it ;) We also hope that you will tell it to the rest of the world including us by placing some real text here.</li>
									<li><img src="images/2page-img3.jpg" alt="" /><strong><a href="#">Another Team Member</a></strong>We are completly lost on what he's responsible for, but we hope that you know it ;) We also hope that you will tell it to the rest of the world including us by placing some real text here.</li>
								</ul>
							</div>
						</div>
						<div class="col-2">
							<ul>
								<li><strong><a href="#">September 15, 2013</a></strong>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</li>
								<li><strong><a href="#">November 31, 2013</a></strong>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</li>
								<li><strong><a href="#">Desember 22, 2013</a></strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugitd quia.</li>
								<li><strong><a href="#">January 1, 2014</a></strong>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia.</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER -->
			<div id="footer">
				<div class="indent">
					<div class="fleft">Designed by: <a href="#">Reiko Pekanseon</a></div>
					<div class="fright">Copyright &copy; 2014 - Reiko Pekanseon</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>