<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Space Lego Shop</title>
		<link rel="shortcut icon" href="../res/favicon.ico">
		<link rel="normal" href="../styles/normalize.css">
		<link rel="stylesheet" href="../styles/stylesheet.css?v=<?php echo time();?>">
	</head>

	<body>
		<header> 
			<a href="index.php"><img id = "logo" src="../res/logo.png" alt="Shop Logo"></a>
			<?php if (isset($_SESSION['user'])) { ?>
			<a href="logout.php"><span class="logged"> Log out </span></a>		
			<span id="welcome"> Welcome, <?php echo $_SESSION['user'];?>! </span> 
			<?php } else { ?>
				<a href="addForm.php"><span class="login"> Register </span></a>
				<a href="loginForm.php"><span class="login"> Log in | </span></a>		
				<span id="welcome"> Welcome! </span>
			<?php } ?>
			<a href="cart_view.php"><img src="../res/shopping_cart.png" id="cart"><span id="cartText">MY CART</span></a></li> 
		</header>

		<nav id="nav_menu">
			<ul>
				<li><a href="index.php" id="currentPage">HOME</a></li>

				<li><a href="allSets.php">SETS</a>
					<ul>
						<li><a href="SpacePolice.php">Space Police</a></li>
						<li><a href="MarsMission.php">Mars Mission</a></li>
						<li><a href="GalaxySquad.php">Galaxy Squad</a></li>
						<li><a href="AlienConquest.php">Alien Conquest</a></li>
						<li><a href="StarWars.php">Star Wars</a></li>
					</ul>
				</li>

				<li><a href="accountPage.php">MY ACCOUNT</a></li>
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="contact.php">CONTACT US</a></li>
			</ul>
		</nav>

		<main>
			<h1 class="centerText">Welcome to Space Lego!</h1>
			<h3 class="centerText">Your one-stop shop for everything LEGO Space related</h3>
			<h2 class="centerText">Who are we?</h2>
			<blockquote>We are Space Lego, an ecommerce business specializing in Space Lego sets. Our business
			was founded in November 1, 2020 with a goal of improving accessibility of purchasing old
			Lego Space themed sets. Like many of you reading this, our childhood was mainly based on
			Legos. However, many of these lego sets are no longer sold on official websites. As a result,
			we took up the opportunity to help people like you buy these nostalgic lego sets. We currently
			sell 5 different lego sets, which you can see in the "Sets" tab. If you have any questions, please
			refer to the FAQ first before reaching out to us in the "Contact Us" tab. Enjoy!</blockquote>
			
			<h2 class="centerText"><a href="freeMerch.php">Free Merch</a> - Space Lego HD Wallpapers</h2>
			
			<h2 class="centerText">Enjoy the Lego Space Mini Movie Part 1</h2>			
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Smgm5KPYN6Q" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="centerVideo"></iframe>
			<h2 class="centerText">Enjoy the Lego Space Mini Movie Part 2</h2>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vxlWH4sX0xs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="centerVideo"></iframe>
		
		</main>
		<footer> 
			<p> &copy; 2020 Space Lego™ </p>
		</footer>
	</body>
</html>
