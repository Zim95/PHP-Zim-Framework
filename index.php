<?php
  include "inc/header.php";
?>

<?php
  include_once "system/libs/Main.php";
  //$main = new Main();

  $url = $_GET["url"];

  //since our url will look like controller/method/param/<empty>
  //our array will be [0]=>controller [1]=>method [2]=>param and [3]=><empty>
  $url = rtrim($url,"/");

  //explode acts like split function in javascript, also its opposite is implode
  $url = explode("/",$url);

  $controller = $url[0];
  $method = $url[1];
  $param = $url[2];

  include 'app/controllers/'.$controller.'.php';
  $namah = new $controller();

  /*
  echo "<pre>";
  echo $controller."\n";
  echo $method."\n";
  echo $param."\n";
  echo "</pre>";
  */
?>

<?php
  include "inc/footer.php";
?>
