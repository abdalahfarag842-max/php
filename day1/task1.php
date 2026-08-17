<?php

// 1
echo "Welcome to php";


// 2

// $x = 5;
// $y = "Welcome";
// $z = True;


// 3

// echo "Type of x: " . gettype($x) . "<br>";
// echo "Type of y: " . gettype($y) . "<br>";
// echo "Type of z: " . gettype($z) . "<br><br>";


// 4

// for ($i = 0; $i <= 15; $i++) {
//     echo $i . " ";
// }

// echo "<br>";

// while

// $i = 0;
// while ($i <= 15) {
//     echo $i . " ";
//     $i++;
// }

// echo "<br><br>";


// 5

// define("ITI", "ITI");
// echo "Constant: " . ITI . "<br><br>";


// 6

// echo "gettype(x): " . gettype($x) . "<br>";
// echo "gettype(y): " . gettype($y) . "<br>";
// echo "gettype(z): " . gettype($z) . "<br><br>";


// 7

// echo "isset(x): " . (isset($x) ? "true" : "false") . "<br>";
// echo "isset(y): " . (isset($y) ? "true" : "false") . "<br>";
// echo "isset(z): " . (isset($z) ? "true" : "false") . "<br><br>";


// 8

// echo "empty(x): " . (empty($x) ? "true" : "false") . "<br>";
// echo "empty(y): " . (empty($y) ? "true" : "false") . "<br>";
// echo "empty(z): " . (empty($z) ? "true" : "false") . "<br><br>";


//  9

// $m = 30;
// $n = 25;
// $result = $m + $n;

// echo "Result = " . $result . "<br>";

// if ($result > 50) {
//     echo "Accepted";
// } else {
//     echo "Not accepted";
// }

// echo "<br><br>";


// 10
$name1 = "Mr. A";
$name2 = "Mr. B";
$name3 = "Mr. C";

$salary1 = 1000;
$salary2 = 1200;
$salary3 = 1400;

echo "<table border='1'>";
echo "<tr><td>Salary of " . $name1 . " is</td><td>" . strval($salary1) . "$</td></tr>";
echo "<tr><td>Salary of " . $name2 . " is</td><td>" . strval($salary2) . "$</td></tr>";
echo "<tr><td>Salary of " . $name3 . " is</td><td>" . strval($salary3) . "$</td></tr>";
echo "</table>";

?>