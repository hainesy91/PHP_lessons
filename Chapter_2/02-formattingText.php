<!--The printf() function gives you more control over how how the output looks. You pass printf() a format string and a bunch of items to print. Each rule in the format string is replaced by one item. -->

<?php
$price = 5; $tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));
?>

<!--The above will print 'The dish costs $5.38'. The format rule %.2f is replaced with the value of $price * (1 + $tax) and formatted so that it has two decimal places.

Format string rules begin with % and then have some optional modifiers that affect what the rule does.

