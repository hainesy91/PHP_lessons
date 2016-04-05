<!-- Variables hold the data that your program manipulates while it runs, such as information about a user that you've loaded from a database. In PHP, variables are denoted by $ followed by the variables name. To assign a value to a variable, use the equals = sign. This is known as the assignment operator. -->

<?php

$plates = 5;
$dinner = 'Beef Chow-fun';
$cost_of_dinner = 8.95;
$cost_of_lunch = $cost_of_dinner;

//Assigment works with heredocs too//

$page_header = <<<HTML_HEADER
<html>
<head><title>Menu</title></head>
<body bgcolor="#fffed9">
<h1>Dinner</h1>
HTML_HEADER

$page_footer = <<<HTML_FOOTER
</body>
</html>
HTML_FOOTER;
?>

<!--Variable names must begin with a letter underscore. Variable names are case sensitive. That means that variables named $dinner, $Dinner and $DINNER are separate and distinct with no more in common than if they were named $breakfast, $lunch and $dinner. 

Arithmatic and string operators work on variables containing numbers or strings just like they do on literal numbers and strings. -->

<?php
$price = 3.95;
$tax_rate = 0.08;

$tax_amount = $price * $tax_rate;
$total_cost = $price + $tax_amount;

$username = 'chris';
$domain = '@hainesy.com';

$email_address = $username . $domain;

print 'The tax is ' . $tax_amount; 
print "\n"; //this prints a linebreak//
print 'The total cost is ' .$total_cost;
print "\n";
print $email_address;
?>