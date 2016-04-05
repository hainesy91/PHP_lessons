<!--Frequently, you can print the values of variables combined with other text, such as when you display an HTML table with calculated values in the cells or a user profile page that shows a particular user's information. You can interpolate variables. This means that if the string contains a variable name, the variable name is replaced by the value of the variable. -->

<?php
$email = 'hainesy91@gmail.com';
print "Send replies to: $email";
?>

<!--Heredocs are especially useful for interpolating many variables into a long block of HTML -->

<?php
$page_title = 'Menu';
$meat = 'pork';
$vegetable = 'bean sprout';
print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<ul>
<li> Barbecued $meat
<li> Sliced $meat
<li> Braised $meat with $vegetable
</ul>
</body>
</html>
MENU;
?>