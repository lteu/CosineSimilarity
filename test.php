<?php

# source & examples
# code: https://github.com/lteu/CosineSimilarity
# http://stackoverflow.com/questions/1746501/can-someone-give-an-example-of-cosine-similarity-in-very-simple-graphical-way

require_once 'textcosine.php';

$str1 = "Julie loves me more than Linda loves me";
$str2 = "Jane likes me more than Julie loves me";
//$str1 = "than loves me more Jane Julie likes me"; 

$result = cosinesim($str1,$str2); // similarity of 1 and 2

echo "$result \n";
//var_dump($result); // #=> float(0.82158383625775)

?>