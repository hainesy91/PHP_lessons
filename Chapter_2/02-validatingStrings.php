<!-- $_POST['zipcode'] holds the value of the submitted form parameter "zipcode". -->

<?php
$zipcode = trim($_POST['zipcode']);
//Now $zipcode holds that value, with any leading or trailing spaces removed
$zip_length = strlen($zipcode);
//Will complain if the ZIP code is not 5 characters long
if ($zip_length != 5) {
  print "Please enter a ZIP code that is 5 characters long.";
}
?>

<!--Using trim() protects against someone who types a ZIP code of 732 followed by two spaces. It's used to throw away unintentional or unecessary spaces and making sure you get the string length you care about. -->

<!--Chaining together calls trim() and strlen() for more concise code -->

<?php
if(strlen(trim($_POST['zipcode'])) != 5) {
  print "Please enter a ZIP code that is 5 characters long.";
}
?>

<!-- To compare two strings, use the equality operator (==) -->

<?php
if($_POST['email'] == 'president@whitehouse.gov') {
  print "Welome, Mr President.";
}
?>

<!--The above code will only execute if the submitted form parameter email is the all-lowercase president@whitehouse.gov. When you compare strings with = =, case is important. 

To compare strings without paying attention to case, use strcasecmp(). It compares two strings while ignoring differences in capitalization. -->

<?php
if (strcasecmp($_POST['email'], 'president@whitehouse.gov') == 0) {
  print "Welcome back, Mr President.";
}
?>