<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $phrase = "This is a string <br>";
    echo strtolower($phrase);
    echo strtoupper($phrase);
    echo strlen($phrase) + substr($phrase,16);
    echo ($phrase[0]);
    echo substr($phrase,16);
    ?>

  </body>
</html>
