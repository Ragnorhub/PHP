<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $arr = range(a,z);
      shuffle($arr);
      echo explode('', $arr, 6);
    ?>
  </body>
</html>
