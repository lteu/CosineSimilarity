<?php

# source & examples
# code: https://github.com/lteu/CosineSimilarity
# http://stackoverflow.com/questions/1746501/can-someone-give-an-example-of-cosine-similarity-in-very-simple-graphical-way

require_once 'CosineSimilarity.php';


function cosinesim($str1,$str2){

	$base = array();
	$strstr = $str1." ".$str2;
	$splitted = split(" ", $strstr);
	for ($i=0; $i < count($splitted); $i++) { 
	  $w = $splitted[$i];
	  if (!isset($base[$w])) {
	    $base[$w] = 0;
	  }
	}

	$splitted1 = split(" ", $str1);
	$splitted2 = split(" ", $str2);
	$base1 = $base;
	$base2 = $base;

	for ($i=0; $i < count($splitted1); $i++) { 
	  $w = $splitted1[$i];
	  $base1[$w]++;
	}
	for ($i=0; $i < count($splitted2); $i++) { 
	  $w = $splitted2[$i];
	  $base2[$w]++;
	}

	$cs = new CosineSimilarity();
	$result = round($cs->similarity($base1,$base2),5); // similarity of 1 and 2
	return $result;
}


?>