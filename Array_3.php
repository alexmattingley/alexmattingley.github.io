<html>
<title>Surf Spot charactization Array within an Array</title>
<body>

<h1>Surf Spot Charactization</h1>

<?php

$surfspots = array();
$surfspots[0] = array(
	"spotname" => "Blacks Beach",
	"bottom" => "Sand/Deepwater Trench",
	"difficulty" => 8,
	"crowd" => "Aggresive, packed",
);

$surfspots[1] = array(
	"spotname" => "Rincon",
	"bottom" => "Sand/pebbled",
	"difficulty" => 5,
	"crowd" => "Varies, usually crowded",
);

?>
<?php foreach ($surfspots as $surfspot) { ?>
<ul>
	<li>Spot Name: <?php echo $surfspot["spotname"]; ?></li>
	<li>Bottom Type: <?php echo $surfspot["bottom"]; ?></li>
	<li>Difficulty Level: <?php echo $surfspot["difficulty"]; ?></li>
	<li>Crowd-Factor: <?php echo $surfspot["crowd"]; ?></li>

</ul>

<?php } ?>

<p>Hi there. I am making changes to array_3</p>

</body>
</html>