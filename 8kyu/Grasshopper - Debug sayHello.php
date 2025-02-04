<?php 
/*
Description

Debugging sayHello function

The starship Enterprise has run into some problem when creating a program to greet everyone as they come aboard. 
It is your job to fix the code and get the program working again!

Example output:
Hello, Mr. Spock

function sayHello(string $name): string
{
  return "Hello"; // your code here
}
*/

function sayHello(string $name): string {
  return "Hello, {$name}";
}
?>