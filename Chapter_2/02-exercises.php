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
//Exercise 4 - Printing name and length of name string
$first_name = "Chris ";
$last_name = "Haines";

$full_name = $first_name . $last_name;

print $first_name . $last_name; 
print $full_name;

print strlen($full_name);
?>

<?php
$i = 1;
$j = 2;

print "$i $j"; 

echo '&nbsp';

$i++; $j *= 2;
print "$i $j";

echo '&nbsp';

$i++; $j *= 2;
print "$i $j";

echo '&nbsp';

$i++; $j *= 2;
print "$i $j";

echo '&nbsp';

$i++; $j *= 2;
print "$i $j";


?>
