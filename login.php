<?php
  require_once(MODEL.'class.ViewHandler.php');
  $vh = new ViewHandler();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php $vh->__component('styling'); ?>
</head>
<body>
  <h2>Login Page HERE</h2>
  <a href="controller/doLogin.php">Login Client</a>
  <br><br>
  <a href="controller/doLogin.php?admin">Login Admin</a>
</body>
</html>
