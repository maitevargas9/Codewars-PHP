<?php 
/*
Description

Given an array of numbers, check if any of the numbers are the character codes for lower case vowels (a, e, i, o, u).

If they are, change the array value to a string of that vowel.

Return the resulting array.
*/

function isVow(array $a): array {
  return array_map(function($x) {
    $char = chr($x);
    return preg_match('/[aeiou]/', $char) ? $char : $x;
  }, $a);
}
?>