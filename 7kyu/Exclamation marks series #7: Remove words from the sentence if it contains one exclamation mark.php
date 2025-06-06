<?php 
/*
Description

Remove words from the sentence if they contain exactly one exclamation mark. Words are separated by a single space, 
without leading/trailing spaces.

Examples
remove("Hi!") === ""
remove("Hi! Hi!") === ""
remove("Hi! Hi! Hi!") === ""
remove("Hi Hi! Hi!") === "Hi"
remove("Hi! !Hi Hi!") === ""
remove("Hi! Hi!! Hi!") === "Hi!!"
remove("Hi! !Hi! Hi!") === "!Hi!"
*/

function remove(string $s): string {
  return implode(" ", array_filter(explode(" ", $s), function ($w) {
    return substr_count($w, "!") != 1;
  }));
}
?>