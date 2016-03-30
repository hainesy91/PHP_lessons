<!--The printf() function gives you more control over how how the output looks. You pass printf() a format string and a bunch of items to print. Each rule in the format string is replaced by one item. -->

<?php
$price = 5; $tax = 0.075;
printf('The dish costs $%.2f', $price * (1 + $tax));
?>

<!--The above will print 'The dish costs $5.38'. The format rule %.2f is replaced with the value of $price * (1 + $tax) and formatted so that it has two decimal places.

Format string rules begin with % and then have some optional modifiers that affect what the rule does.

A padding character - If the string that is replacing the format rule is too short, this is used to pad it.
                      Use a space to pad with spaces or a 0 to pad with zeroes.

A sign - For numbers, a plus sign (+) makes printf() put a + before positive numbers. For strings, a minus (-)
         makes printf() right justify the string.

A minimum width - The minimum size that the value replacing the format rule should be. 

A period and precision number - For floating-point numbers, this controls how many digits go after the decimal point.

After the modifiers come a mandatory character that indicates what kind of value should be printed. The three discussed here are d for decimal number, s for string and f for floating-point number.

Basically, use printf() as your go to function when you want to format a decimal value! -->

<!-- Another kind of text formatting is manipulating the case of strings. The strtolower() and strtoupper() functions make all lowercase and all uppercase versions respectively of a string. -->

<?php
print strtolower('Beef, CHICKEN, Pork, duCK ');
print strtoupper('Beef, CHICKEN, Pork, duCK');
?>

<!--The ucwords() function uppercases the first letter of a word in a string. Useful when combined with strtolower() to produce nicely nicely capitalized names for example. -->

<?php
print ucwords(strtolower('CHRISTOPHER HAINES'));
?>

<!--With the substr() function, you can extract just a part of a string -->

<?php
//Grab the first thirty characters of $_POST['comments']
print substr($_POST['comments'], 0, 30);
//Add an ellipsis
print '...';
?>

<!--If the submitted form parameter comments is: 

The fresh fish with Rice Noodle was delicious, but I didn't like the Beef Trip.

It would print: The fresh fish with Rice Noodl...

The 3 arguments to substr() are the string to work with, the starting position of the substring to extract, and the number of characters to extract. 