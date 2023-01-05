<?php
session_start();
include("basehref.php");

if (!isset($_SESSION["reg-country"]))
	$_SESSION["reg-country"] = "Hungary";

$p = "intro";
$month = date("m");
$day = date("d");

$d = 1;
if ($month == "05" && $day == "25")
	$d = 1;
if ($month == "05" && $day == "26")
	$d = 2;
if ($month == "05" && $day == "27")
	$d = 3;
if ($month == "05" && $day == "28")
	$d = 4;

if (isset($_REQUEST["p"])) {
	$p = $_REQUEST["p"];
}
if (isset($_REQUEST["d"])) {
	$d = $_REQUEST["d"];
}


?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Design Experience Everyday</title>
	<base href="<?php echo $baseHref; ?>" />
	<meta property="og:title" content="The Promise of Pragmatist Aesthetics">
	<meta property="og:url" content="https://dee.mome.hu">
	<meta name="description" content="Looking Forward after 30 Years">
	<meta property="og:description" content="Looking Forward after 30 Years">
	<meta property="og:image" content="https://dee.mome.hu/dee-og.jpg">
	<link rel="image_src" href="https://dee.mome.hu/dee-og.jpg">

	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0000ff">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<meta property="og:image" content="https://dee.mome.hu/dee-og.jpg">

	<link rel="stylesheet" type="text/css" href="css/simple-lightbox.css">
	<script src="js/simple-lightbox.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/text_animation_style.css">
	<link rel="stylesheet" type="text/scss" href="css/text_animation_style.scss"> -->
	<link rel="stylesheet" type="text/css" href="css/fonts.css">
	<link rel="stylesheet" type="text/css" href="css/extension_animation.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="js/script.js?v=1.4"></script>
	<!-- Button -->
	<script>
		// Get the button
		let mybutton = document.getElementById("myBtn");

		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
		}

		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
		}
</script>
	<!-- Button -->


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,700;1,400;1,700&display=swap"
		rel="stylesheet">
</head>

<body>
	<div class="main-content">
		<div class="header">
			<div class="header-logo">
				<a href="index.php"><img src="img/DEE_logo.png"></a>
			</div>

			<ul class="menu">
				<!-- <li>
				<a href="call.html" class="">Call</a>
			</li> -->
				<li>
					<a href="index.php?p=concept" class="<?php if ($p == 'concept')
	                echo 'selected'; ?>">Concept</a>
				</li>

				<!--<li>
					<a href="index.php?p=program" class="<?php if ($p == 'program')
	                echo 'selected'; ?>">Program</a>
				</li>-->
				<li>
					<a href="index.php?p=speakers" class="<?php if ($p == 'speakers')
	                echo 'selected'; ?>">Keynotes</a>
				</li>
				<li>
					<a href="index.php?p=organizers" class="<?php if ($p == 'organizers')
	                echo 'selected'; ?>">Organizers</a>
				</li>
				<!--<li>
					<a href="index.php?p=gallery" class="<?php if ($p == 'gallery')
	                echo 'selected'; ?>">Gallery</a>
				</li>-->
				<li>
					<a href="index.php?p=venue" class="<?php if ($p == 'venue')
	                echo 'selected'; ?>">Venue</a>
				</li>
				<!-- <li>
				<a href="get-tickets/" class="highlighted <?php if ($p == 'get-tickets' || $p == 'full-ticket' || $p == 'day-ticket-audience' || $p == 'day-ticket-participant')
	                echo 'selected'; ?>">Get Tickets</a>
			</li> -->
				<li>
					<a href="index.php?p=info" class="<?php if ($p == 'info')
	                echo 'selected'; ?>">Info</a>
				</li>
			</ul>

			<a href="#" class="menu-toggle"></a>
		</div>

		<?php
    include("_inc_" . $p . ".php");
    ?>
	</div>

	<footer class="block footer-block">
		<div class="content-container">
			<div class="contacts">
				<strong>Contact us:</strong>
				<a href="mailto: design.conference.2023@gmail.com" class="email">design.conference.2023@gmail.com</a>
			</div>

			<div class="logo-footer">

				<a href="https://mome.hu" class="mome-logo">
					<img src="img/mome_logo_2019_wht.svg">
				</a>
			</div>
		
		</div>
	</footer>




</body>

</html>