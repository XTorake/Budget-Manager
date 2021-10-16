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
        <div class="modal-header" id="framework-main_modal_title">
          <h2>ALO WENAS?</h2>
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
  <script type="text/javascript">

    function __showModal(title, content, footer = ''){
      const MODAL = $('#framework-main_modal_container')
      const FOOTER = $('#framework-main_modal_footer')

      $('#framework-main_modal_title').html(title)
      $('#framework-main_modal_content').html(content)
      $('#framework-main_modal_footer').html(footer)

      if (footer == '') {
        FOOTER.addClass('d-none')
      }else{
        FOOTER.removeClass('d-none')
      }

      MODAL.modal('show')
    }

    function __hideModal(){
      $('#framework-main_modal_container').modal('hide')
    }

  </script>
  <?php $vh->__getPageScript(); ?>
  <?php $vh->__component('footer'); ?>
</div>
</body>
</html>
