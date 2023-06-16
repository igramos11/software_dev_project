<!DOCTYPE html>
<?php
	require_once 'php/config.php';
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Team 18 Home Page</title>

	<!-- Link to css file -->
	<link rel="stylesheet" type="text/css" href="css/main_page.css">

</head>

<!-- Set body id = "top", in case want to go to the top of the page smoothly (using smooth behavior in css) -->
<body id="top">
	<header>
		
		<!-- Navbar Starts -->
		<nav>
			<ul>
				<li><a href="#top">Home</a></li>
				<li><a href="pages/login.php">User Login</a></li>
			</ul>
		</nav>
		<!-- Navbar End -->
	</header>
	
<!-- Main Page Banner Section Starts Here -->
<section class="food-search" style="display: flex; flex-direction: column;">
	<div style="width: 100%; text-align: center;">
		<h1 style="background-color: transparent; color: black;">Welcome to Team 18's Fueling Company!</h1>
	</div>
	<section style="display: flex; align-items: center; justify-content: space-between;">
		<div style="width: 50%;">
			<img src="images/refinery.jpeg" alt="refinery" style="width: 100%; height: 60vh;">
		</div>
		<div style="width: 50%; text-align: center;">
			<h2 class="text-center">To Get Started with a Fuel Quote</h2>
			<h2 class="text-center" style="text-transform: none; color: black; background-color: transparent; margin-top: 20px;">
				<a href="pages/login.php" style="color: white; background-color: #0439aa; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Please Login/SignUp</a>
			</h2>
		</div>
	</section>
</section>
<!-- Main Page Banner Ends Here -->
</body>

<!-- Main Page Banner Ends Here -->
</body>


<footer>
	<div class="footer-content text-center" style="margin-bottom: 0%">
		<p class="copyright">© Designed by <a href="#">Team 18 COSC 4353</a>. All rights reserved.</p>
		<a href="#top">Go to top.</a>
	</div>
</footer>

</html>
