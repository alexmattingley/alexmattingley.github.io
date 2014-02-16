<?php
//so first you create the function name in this case: mimic_count
function mimic_count ($balls) {
//then you tell the function to do something. In this case we also had to define starting variable
//because this is a function that counts.
	$count = 0;
	foreach ($balls as $ball) {
		$count = $count + 1;
	}
//return value, sends the solved function back out to main.
	return $count;
}

$flavors = array('vanilla','chocolate', 'cookie dough', 'choco-chip');
$count = mimic_count($flavors);
echo "There are " . $count . " ice cream flavors.";

?>
<br>
<?php

$beers = array('IPA', 'Porter', 'Imperial Stout');
$count = mimic_count($beers);
echo "There are " . $count . " beer types.";

?>