<!--Examples of printing strings which can contain many characters such as numbers, letters and quotes -->

<?php 
print 'I would like a bowl of soup.';
print 'chicken';
print '06520';
print '"I am eating dinner, " he growled.';
?>

<!--All of the above printed stings will all appear on one line as there are no line breaks when using print.
The single quotes are called delimeters and they signal the start and the end of the string. If you want to include a single quote within the string this is done by using \ before the single quote inside the string.
-->

<?php
print 'We\'ll each have a bowl of soup.';
?>

<!-- Using the backslash tells PHP to treat the following character as a literal single quote. This is called escaping or using the escape character. -->

<?php
print '<ul>
<li>Beef Chow-Fun</li>
<li>Sauteed Pea Shoots</li>
<li>Soy Sauce Noodles</li>
</ul>';
?>

<!--The above code wil print the HTML list on multiple lines (because it's a list). Since the single quote that marks the end of the string is immediately after the </ul>, there is no new line at the end of the string. -->

Special Characters within double quoted strings:

\n - Newling
\r - Carriage return
\t - Tab
\\ - \
\$ - $
\" - "
\0..\777 - Octal (base 8) number
\x0..\xFF - Hexadecimal(base 16) number
