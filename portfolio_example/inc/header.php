<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $titlepage; ?>
	</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400,700,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
<a href="index.php" id="logo">
	<h1>Lulight</h1>
	<h2>Love and Light</h2>
</a>
<nav>
	<ul>
		<li><a href="index.php" class="<?php if ($section == "portfolio") { echo "selected"; } ?>">Portfolio</a></li>
		<li><a href="about.php" class="<?php if ($section == "about") { echo "selected"; } ?>">About</a></li>
		<li><a href="contact.php" class="<?php if ($section == "contact") { echo "selected"; } ?>">Contact Me</a></li>
	</ul>
</nav>
</header>
<div id="wrapper">
		<section>
<!--</section> close is in footer.php-->
