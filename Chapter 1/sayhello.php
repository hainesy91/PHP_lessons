<!-- Print a greeting if the form was submitted -->
<?php
  if ($_POST['user']) {
    print "Hello, ";
    //Print what was submitted in the form parameter called 'user'//
    print $_POST['user'];
    print "!";
  } else {
    //Otherwise, print the form //
    print <<<HTML
    <form method="post" action="$_SERVER[PHP_SELF]">
      Your Name: <input type="text" name="user">
      <br/>
      <input type="submit" value="Say Hello">
    </form>
HTML;
  }
?>







