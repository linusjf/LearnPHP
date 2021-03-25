<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head><title>Selected</title></head>
 <body>
 <h2>Success!</h2>
<?php
 // get form input
 $type = $_POST['selType'];
 $color = $_POST['txtColor'];
 // use form input
 echo "Your $color $type is ready. Safe driving!";
 ?>
 </body>
</html>
