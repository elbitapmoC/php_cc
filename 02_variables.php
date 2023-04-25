<?php
/* ----- Variables & Data Types ----- */
/*
Variabls...
- can't start w/ a number.
- must start w/ $
- must start w/ a letter or _.
- Can only use A-z, 0-9, _
- are case-sensitive
*/

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

$tempVar = '😇';// String
$tempVar = 1;// Int
$tempVar = true;// Bool
$tempVar = 1.0002;// Float
$age = 18;

// var_dump($tempVar);

// Concatanation!
// echo('I am '.$age.' years old.');
// ALT to above.
// echo("I am $age years old.");
// echo("I am ${age} years old."); // Preferred 

$x = '5'+'5';
var_dump($x);

echo 1-4; // -3
echo 1+0; // 1
echo 1*0; // 0
echo 10%3; // 1

//Constants, they do not change.
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo DB_NAME
?>