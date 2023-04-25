<?php
/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/


// $age = 18;
// if($age > 18){
//   echo('Enter!');
// } elseif($age === 18) {
//   echo('👀');
// }
// else {
//   echo('Try again tomorrow..');
// }

$posts = [
  // 'Endure until the end!'
];

// Checks to see if array is empty
// $firstPost = !empty($posts) ? $posts[0] : 'Empty fam...';
// echo $firstPost;

// $firstPost = $posts[0] ?? '🕳️';
// echo $firstPost;

/* -------- Switch Statements ------- */

$favcolor = 'b';

switch ($favcolor) {
  case 'r':
    echo 'Your favorite color is red!';
    break;
  case 'b':
    echo 'Your favorite color is blue!';
    break;
  case 'g':
    echo 'Your favorite color is green!';
    break;
  default:
    echo "Ugh, don't make this hard...";
  }
?>