<!--You can define strings with the here document syntax. (However it not is not comman practice in today's modern web development standards). A here document begins with <<< and a delimeter word. It ends with the same word at the beginning of a line. -->

<?php
<<<HTMLBLOCK
<html>
<head><title>Menu</title></head>
<body bgcolor="#FFFED9">
<h1>Dinner</h1>
<ul>
  <li>Beef Chow-Fun
  <li>Sauteed Pea Shoots
  <li>Soy Sauce Noodles
  </ul>
</body>
</html>
HTMLBLOCK;
?>

<!--The delimeter in the above example is HTMLBLOCK. The delimeter tht ends the here document MUST be alone on its line. -->

<!-- To combine two strings together, use a . (period), the string concatenation operator. -->

<?php
print 'bread' . 'fruit';
print "It's a beautiful day " . 'in the neighborhood.';
print "The price is: " . '$3.95';
print 'Inky' . 'Pinky' . 'Blinky' . 'Clyde';
?>

