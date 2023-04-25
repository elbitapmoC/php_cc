<?php
$animals = ['🐔','🦆','🐈'];
$fruits = ['orange', 'apple', 'pears'];
// var_dump($fruits);
// print_r($animals);

// echo($fruits[2]);

//Associative Array
$favorites = [
  1=>'Mango',
  2=>'Yellow Kiwi',
  3=>'Cherries',
  'r'=> '#F00',
  'b'=> '#0F0',
  'g'=> '#00F'
];
// Array of people

$people = [
  // $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];


// echo($favorites[2]);
// echo($favorites['g']);
// echo($people[0]['first_name']);
var_dump(json_encode($people)); //json_encode - turns what we have into json obj.

// json_decode turns json obj into an associative array
?>