<?php 
//Exercise 2 - Php programme that calculates the cost of a meal
$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;

$meal = 2 * $hamburger + $milkshake + $cola;
$tax = $meal * .075;
$tip = $meal * .16;

$total = $meal + $tax + $tip;

print "Total cost of the meal is \$$total";

?>

<?php


?>
