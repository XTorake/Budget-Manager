<?php
  require_once(MODEL.'class.ViewHandler.php');
  $vh = new ViewHandler();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php $vh->__component('head'); ?>
</head>
<body>
  <div id="preloader">
 <div class="lds-ripple">
   <div></div>
   <div></div>
 </div>
 </div>
  <div id="main-wrapper">
  <?php $vh->__component('nav'); ?>
  <div class="content-body" style="min-height: 1100px;">
              <div class="container-fluid">
  <?php $vh->__getPageContent(); ?>
</div>
</div>
  
  <?php $vh->__getPageScript(); ?>
  <?php $vh->__component('footer'); ?>
</div>
</body>
</html>
