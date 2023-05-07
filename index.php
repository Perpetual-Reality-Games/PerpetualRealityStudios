
<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">

		<title>
		Perpetual Reality Studios Inc.
		</title>

		<!-- Link to the CSS stylesheet -->
		<link rel="stylesheet" href="styles/style.css">

		<!-- meta tag for web browser scaling -->
		<meta name="viewport" content="width=device-width, intial-scale=1">

		<!-- Font Awesome CSS icons -->
		<link rel="stylesheet" href="styles/font-awesome-4.7.0/css/font-awesome.min.css">

	</head>

	<body>
		<!-- Navigation Banner accross the top -->
		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fa fa-bars" aria-hidden="true"></i>
			</label>
			<label class="logo-title">PERPETUAL REALITY STUDIOS INC</label>
			<ul>
				<li><a class="active" href="./index.html">HOME</a></li>
				<li><a href="./about.html">ABOUT</a></li>
				<li><a href="./products.html">PRODUCTS</a></li>
				<li><a href="./contact.html">CONTACT</a></li>
			</ul>
		</nav>

		<!-- Social media Icons -->
		<div class="socialbar">
			<div class="social-links">
				<a href="https://www.facebook.com/rawshireTLH/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/@perpetualrealitystudio9219/featured"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/PerpetualReali2"><i class="fa fa-twitter"></i></a>
				<a href="https://www.instagram.com/perpetualrealitystudios/"><i class="fa fa-instagram"></i></a>
				<a href="https://store.steampowered.com/app/1601020/Rawshire_The_Last_Hatchling/"><i class="fa fa-steam"></i></a>
			</div>
		</div>

		<!-- Slogan or statement -->
		<div class="slogan">
			<h2> FORGE YOUR OWN REALITY </h2>
		</div>

		<!-- Product Cards -->
		<div class="cards">
			<div class="gamecards">
				<img src="images/rawshire-card.png" class="rawshire-card" alt="">
				<div class="rawshire-card-body">
					<h1 class="rashire-card-title">RAWSHIRE</h1>
					<p class="rawshire-sub-title">The Last Hatchling</p>
					<p class="rawshire-card-info">Play as the last hatchling of Rawshire and explore the vast mountain side in this adventure collectathon game. Make choices that matter and decide your fate.</p>
					<button class="rawshire-card-button">WISHLIST NOW</button>
				</div>
			</div>
		</div>

		<!-- Horizontal Line -->
		<hr>

		<!-- PHP for Email -->
		<?php
		if(!empty($_POST["send"])){
			$emailTitle = $_POST["THIS EMAIL CAME FROM PERPETUAL REALITY WEBSITE"];
			$userEmail = $_POST["userEmail"];
			$toEmail = $_POST["perpetualrealitystudio@gmail.com"];

			$mailHeaders = $emailTitle . "\r\n Email Joining Community: " . $userEmail . "\r\n" . "\r\n Add this email to mailing list" . "\r\n";

			if(mail($toEmail, "New Community Member", $mailHeaders){
				$message = "Information Recieved Successfully"
			}
		}
		?>

		<!-- Bottom of Webpage information -->
		<div class="bottompage">
			<form method="post" name="emailContact">
				<div class="input-row">
					<label>Join the Community </label>
					<input class="email-input" type="email" placeholder="Enter Your Email to Join..." name="userEmail" required>
				</div>
				<div class="input-row">
					<input class="submit-input" type="submit" name="send" value="Submit" required>
					<?php if(!empty($message)){ ?>
					<div class="success">
						<strong><?php echo $message ?></strong>
					</div>
					<>php } ?>
				</div>
			</form>
			<div class="company-logo">
				<!-- <img class="logo-img" src="images/PR_Logo.png"> -->
			</div>
		</div>

	</body>
</html>

