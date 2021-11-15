<script type="text/javascript">

  // ENFORCE HTTPS PROTOCOL
  if (location.protocol !== 'https:') {
    //location.replace(`https:${location.href.substring(location.protocol.length)}`);
  }

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

  function formatNum(n) {
    return parseFloat(n).format(2, 3, '.', ',');
  };

  Number.prototype.format = function(n, x, s, c) {
    var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\D' : '$') + ')',
      num = this.toFixed(Math.max(0, ~~n));
    return (c ? num.replace('.', c) : num).replace(new RegExp(re, 'g'), '$&' + (s || ','));
  };

  function retrieveGET(parameterName) {
    var result = null,
        tmp = [];
    location.search
        .substr(1)
        .split("&")
        .forEach(function (item) {
          tmp = item.split("=");
          if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
        });
    return result;
  }

</script>
