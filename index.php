<?php

require('include/setup.php');

$smarty = new Smarty_Setup();

$smarty->assign('name','Ned');

//** раскомментируйте следующую строку для отображения отладочной консоли
//$smarty->debugging = true;

$smarty->display('index.tpl');

/*
    echo '<!doctype html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Bootstrap</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <script src="js/jquery-3.1.0.js"></script>
 </head>
 <body>
  <h1>Привет, мир!</h1>
  <script src="js/bootstrap.js"></script>
 </body>
</html>';
*/
?>