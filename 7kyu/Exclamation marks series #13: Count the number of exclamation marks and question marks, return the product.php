<?php 
/*
Description

Count the number of exclamation marks and question marks, return the product.

Examples
""          --->   0
"!"         --->   0
"!ab? ?"    --->   2
"!!"        --->   0
"!??"       --->   2
"!???"      --->   3
"!!!??"     --->   6
"!!!???"    --->   9
"!???!!"    --->   9
"!????!!!?" --->  20
*/

function product(string $s): int {
  $questionCount = preg_match_all('/\?/', $s, $matches);
  $exclamationCount = preg_match_all('/!/', $s, $matches);
  return $questionCount * $exclamationCount;
}
?>