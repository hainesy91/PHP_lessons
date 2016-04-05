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