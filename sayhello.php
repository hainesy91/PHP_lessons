<?php
  //Print a greeting if the form was submitted//
  // if ($_POST[-'user']) {
  //   print "Hello, ";
    //Print what was submitted in the form parameter called 'user'//
  //   print $_POST['user'];
  //   print "!";
  // } else {
    //Otherwise, print the form //
//     print <<<_HTML_
//     <form method="post" action="$_SERVER[PHP_SELF]">
//       Your Name: <input type="text" name="user">
//       <br/>
//       <input type="submit" value="Say Hello">
//     </form
//     _HTML_;
//   }
// ?>

<?php
print "The population of the US is about: ";
print number_format(285266237);
?>

<br/>
<br/>

<!--Example of using multiple PHP tags -->

Five plus five is:
<?php print 5 + 5; ?>
<p>
Four plus four is:
<?php 
  print 4 + 4;
?>
<p>



