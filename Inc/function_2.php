<?php
//example of function that imitates the count function.
function shitty_count($array) {

	$count_beer = 0;
	foreach ($array as $element) {
		$count_beer = $count_beer + 1;	

	}
	return $count_beer;
}

$beers = array('IPA', 'Double IPA', 'Porter', 'Imperial Stout');
$count_beer = shitty_count($beers);
echo $count_beer;


?>
<br>
<?php 
//example of a function that imitates the array_sum function.
function mimic_array_sum($array) {
	//this is what the function is supposed to do.
	foreach ($array as $element){
	$surf = $surf + $element;	
}
return $surf;
//$surf is the working variable for export.
}



$palindromic_primes = array(11, 757, 16361);
$sum = mimic_array_sum($palindromic_primes); 
echo "If we add all of the palindromic primes together we get: " . $sum;

?>