<?php
echo "<a href=\"./\">BACK</a>";
/* 8. --- CONDITIONS ---
 *
 * Conditional statements are used to perform different actions based on different conditions.
 *
 * Some common conditions in PHP :
 * if ... else ...
 * switch
 *
 */

echo "<h1>8. CONDITIONS</h1>";

/*
 * EXERCISE 1 : Checking $a = 9 is smaller or larger $b = 15 and display your result, using if else.
 *
 */

/*
 * SUGGESTION :
 * $a = 9;
 * $b = 15;
 * if ($a > $b) {
 * echo "$a larger than $b";
 * } else {
 * echo "$a smaller than $b";
 * }
 *
 */

/*
 * EXERCISE 2 : Display the meaning of acronym of some programming language  , using switch
 */

/*
 * SUGGESTION :
 * $language = 'PHP';
 * switch ($languge) {
 * case 'PHP':
 * echo "PHP: Hypertext Preprocessor";
 * break;
 * case 'JS':
 * echo "JavaScript";
 * break;
 * default:
 * echo "can not find meaning your language";
 * }
 */

echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
echo "<h2>Exercise 1:</h2>";
$number1 = 9;
$number2 = 15;
if($number1 > $number2) echo "$number1 larger than $number2";
else echo "$number1 smaller than $number2";
echo "<h2>Exercise 2:</h2>";
$language = 'PHP';
switch ($language) {
    case 'PHP': echo "PHP: Hypertext Preprocessor";break;
    case 'JS': echo "Javascript";break;
    default: echo "Can not  find meaning your language";
}