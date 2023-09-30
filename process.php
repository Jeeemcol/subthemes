<?php
require __DIR__ . '/vendor/autoload.php';
require 'SmartySubTheme.class.php';

$mag_arr = array('one', 'two', 'three', 'four', 'five', 'six');
$smarty_arr = array();
foreach($mag_arr as $mag) {
	$smarty_arr[] = new SmartySubTheme($mag);
}

foreach ($smarty_arr as $smarty) {
	$mag = $smarty->getMag();
	// Add mag to the variables for the template
	$smarty->assign('mag', $mag);
	// Get compiled template output
	$data = $smarty->fetch('./templates/style.tpl');

	// Write to our SCSS file
	$file = './generated/' . $mag . '/_' . $mag . '2variables.scss';
	$handle = fopen($file, 'w');
	fwrite($handle, $data);
	fclose($handle);
}

?>