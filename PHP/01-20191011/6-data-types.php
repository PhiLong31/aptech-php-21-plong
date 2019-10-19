
<?php
echo "<a href=\"./\">BACK</a>";
/* 6. --- DATA TYPES ---
 *
 * Variables can store data of different types.
 *
 * No need to declare type of variable.
 *
 * Data Types common in PHP :
 * String
 * Integer
 * Float
 * Boolean
 * Array
 * Object
 *
 *
 */
echo "<h1>6. DATA TYPES</h1>";

/*
 * EXERCISE 1 : List all data types in variables and display it.
 */

/*
 * SUGGESTION :
 * $arr = [1,'2','Nam'];
 * print_r($arr);
 */
echo "<br><br>DO EXERCISE INSIDE COMMENT CODE BELOW THIS LINE<hr>";
$arr = ["String" => "This is string", "Integer" => 1, "Float" => 2.5, "Boolean" => true, "Array" => ["Xin", "Chao", "Array"], "Object" => (object) ["Name" => "Nguyen Ma Phi Long", "Class" => "Aptech-php-21"] ];
echo "<pre>";
print_r($arr);
echo "</pre>";
