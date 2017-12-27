<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $arr = [1, 2, 4, 5, 5];
    $arr = array_unique($arr);
    echo $arr1 = key(max($arr));
    unset($arr[3]);
    var_dump($arr);
    ?>
  </body>
</html>
