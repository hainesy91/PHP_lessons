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

