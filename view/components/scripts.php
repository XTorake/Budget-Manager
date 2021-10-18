<script type="text/javascript">

  function _id(e){
    return document.getElementById(e);
  }

  function _class(e){
    return document.querySelectorAll(e);
  }

  function makeid(length) {
    var result = '';
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&()*+';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
  }

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
