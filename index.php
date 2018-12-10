<?php  

/*
// The 1st way (Beginner). Mix test and the core code 
$cat_rare = 48;
$cat_very_rare = 27;
$cat_import = 14;
$cat_exotic = 8;
$cat_black_market = 3;


$cat_rare_happend = 0;
$cat_very_rare_happend = 0;
$cat_import_happend = 0;
$cat_exotic_happend = 0;
$cat_black_market_happend = 0;



for ( $i=0; $i<1000; $i++) {
	$cat_num = mt_rand(1, 100);
	if ($cat_num >= $cat_rare ) {
		$cat_rare_happend++;
	} elseif ($cat_num >= $cat_very_rare ) {
		$cat_very_rare_happend++;
	} elseif ($cat_num >= $cat_import ) {
		$cat_import_happend++;
	} elseif ($cat_num >= $cat_exotic ) {
		$cat_exotic_happend++;
	} else {
		$cat_black_market_happend++;
	}
	
}
$total100 = $cat_rare_happend + $cat_very_rare_happend + $cat_import_happend + $cat_exotic_happend + $cat_black_market_happend;
echo $cat_rare . '-->' . $cat_rare_happend . '<br>' .
$cat_very_rare . '-->' . $cat_very_rare_happend . '<br>' .
$cat_import . '-->' . $cat_import_happend . '<br>' .
$cat_exotic . '-->' . $cat_exotic_happend . '<br>' .
$cat_black_market . '-->' . $cat_black_market_happend . '<br>' .
$total100;
*/

//The 2nd way (Advanced)
function getCatName(array $cat_chances) {
	$rand = mt_rand(1, (int) array_sum($cat_chances));

	foreach ($cat_chances as $key => $value) {
		$rand -= $value;
		if ($rand <= 0) {
			return $key;
		}
	}
}

$cat_chances = array('A'=>3, 'B'=>8, 'C'=>14, 'D'=>27, 'E'=>48);
// Test start here
$cat_rare_happend = 0;
$cat_very_rare_happend = 0;
$cat_import_happend = 0;
$cat_exotic_happend = 0;
$cat_black_market_happend = 0;

for ( $i=0; $i<100; $i++) {
	$cat_name = getCatName($cat_chances);
	if ($cat_name == 'E') {
		$cat_rare_happend++;
	} elseif ($cat_name == 'D') {
		$cat_very_rare_happend++;
	} elseif ($cat_name == 'C') {
		$cat_import_happend++;
	} elseif ($cat_name == 'B') {
		$cat_exotic_happend++;
	} else {
		$cat_black_market_happend++;
	}
	
}
$total100 = $cat_rare_happend + $cat_very_rare_happend + $cat_import_happend + $cat_exotic_happend + $cat_black_market_happend;
echo 'cat_rare_happend' . '-->' . $cat_rare_happend . '<br>' .
'cat_very_rare_happend' . '-->' . $cat_very_rare_happend . '<br>' .
'cat_import_happend' . '-->' . $cat_import_happend . '<br>' .
'cat_exotic_happend'. '-->' . $cat_exotic_happend . '<br>' .
'cat_black_market_happend' . '-->' . $cat_black_market_happend . '<br>' .
$total100;
// Test end here
?>