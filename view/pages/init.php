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

  <div class="modal fade" id="framework-main_modal_container">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div id="framework-main_modal_title"></div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="framework-main_modal_content">

        </div>
        <div class="modal-footer" id="framework-main_modal_footer">

        </div>
      </div>
    </div>
  </div>


  <div id="main-wrapper">
  <?php $vh->__component('nav'); ?>
  <div class="content-body" style="min-height: 1100px;">
    <div class="container-fluid">
    <?php $vh->__getPageContent(); ?>
</div>
</div>
  <?php
  $ses = ( isset($_SESSION) && isset($_SESSION[SESSION_VAR]) ) ? json_encode($_SESSION[SESSION_VAR]) : 'false'; ?>
  <script type="text/javascript">
    const g__session = <?=$ses?>;
  </script>
  <?php $vh->__component('scripts'); ?>
  <?php $vh->__getPageScript(); ?>
  <?php $vh->__component('footer'); ?>
</div>
</body>
</html>
