<html>
<title>My Ice Cream Flavors</title>
<body>
<?php $flavors = array('Chocolate','Cookie Dough','Strawberry' ); ?>
<p>My favorite flavors of ice cream are:</p>
<ul>
	<?php foreach ($flavors as $flavor) { ?>
		<li><?php echo $flavor; ?></li>
	<?php } ?>
</ul>


<?php $surfspots = array(); 
$surfspots["spotname"] = "Blacks Beach";
$surfspots["bottom"] = "Sand/Deepwater Trench";
$surfspots["Difficulty"] = 8;
$surfspots["Crowd"] = "Aggresive, packed";
?>


<h1>Surf Spot Charactization</h1>



<ul>

	<li>Spot Name: <?php echo $surfspots["spotname"] ;?></li>
	<li>Bottom Type: <?php echo $surfspots["bottom"] = "Sand/Deepwater Trench";?></li>
	<li>Difficulty Level: <?php echo $surfspots["Difficulty"] = 8; ?></li>
	<li>Crowd-Factor: <?php echo $surfspots["Crowd"] = "Aggresive, packed";?></li>

</ul>


</body>
</html>