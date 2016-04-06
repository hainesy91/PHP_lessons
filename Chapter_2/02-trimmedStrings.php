<?php
if($_POST['email'] == 'president@whitehouse.gov') {
  print "Welome, Mr President.";
}
?>

<!-- To compare two strings, use the equality operator (==) -->

<!--The above code will only execute if the submitted form parameter email is the all-lowercase president@whitehouse.gov. When you compare strings with = =, case is important. 

To compare strings without paying attention to case, use strcasecmp(). It compares two strings while ignoring differences in capitalization. -->

<?php
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
  print "Welcome back, Mr President.";
}
?>