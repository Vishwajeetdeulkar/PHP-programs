<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
<input type="text" name="person">
<button>Submit</button>
    </form>
      <?php
      $name=$_GET['person'];
      echo $name." you will have the most beutiful wife.";
       ?>
  </body>
</html>
