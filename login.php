<?php
  require_once(MODEL.'class.ViewHandler.php');
  $vh = new ViewHandler();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<head>

  <style>
  body  {
    background-image: url("<?=ASSETS?>images/homepage_bg.JPG");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }
  </style>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Budget Manager - El Lugar</title>
  <link href="<?=ASSETS?>vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  <?php $vh->__component('styling'); ?>
</head>
<body class="vh-100">


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

  <div class="authincation h-100" >
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content" style="position:fixed; left:50%; top:50%; transform:translate(-50%, -50%);">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                              <div class="text-center mb-3">
                                <a href="index.html"><img class="img-fluid" src="http://cdn.mcauto-images-production.sendgrid.net/5e4c42c90c127f93/1347ccaa-2841-4e98-a99f-349e0d2c68d1/600x202.jpg" alt=""></a>
                              </div>
                              <h3 class="text-center mb-4">Budget Manager</h4>
                              <div class="mb-3">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input type="email" class="form-control" id="email" placeholder="hello@example.com">
                              </div>
                              <div class="mb-3">
                                <label class="mb-1"><strong>Password</strong></label>
                                <input type="password" class="form-control" id="password" placeholder="****************">
                              </div>
                              <div class="row d-flex justify-content-between mt-4 mb-2">
                                <div class="mb-3">
                                  <button class="btn btn-link-success" onclick="forgotPassword()">Forgot Password?</button>
                                </div>
                              </div>
                              <div class="text-center">
                                <button class="btn btn-outline-secondary btn-block" id="sign-in"> Sign Me In </button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- <h2>Login Page HERE</h2>
  <a href="controller/doLogin.php">Login Client</a>
  <br><br>
  <a href="controller/doLogin.php?admin">Login Admin</a> -->
  <!-- href="controller/doLogin.php" -->
  <?php $vh->__component('scripts') ?>
  <script src="<?=ASSETS?>vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <script type="text/javascript">

    $('#sign-in').on('click', function(){
      validateLogin()
    })


    function validateLogin(){
      const DATA = getLoginData()


      if (!DATA) {
        swal('Ooops!', 'Please fill all of the inputs!', 'error')
        return
      }



      // REQUEST THE SERVER FOR VALIDATION
      fetch('<?=API_PATH?>usuario/attemptLogin.php', {
        method:'POST',
        body:JSON.stringify( DATA )
      }).then( r => r.json() )
      .then( r => {

        if(r.code){
          swal('Success!', 'Login succesful, redirecting!', 'success')
          setTimeout(() => { location.reload() }, 500);
          return;
        }
        swal('Ooops!', r.message, 'error')

      })



    }



    //
    function getLoginData(){
      let data = {
        correo:$('#email').val(),
        password:$('#password').val()
      };
      if(data.correo == '' || data.password == ''){
        return false
      }
      return data;
    }



    function forgotPassword(){

      let content = `
        <label for="">Registered Email:</label>
        <input type="email" id="recover_password" placeholder="johndoe@example.com" class="form-control" />
      `
      let actions = `
        <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
        <button class="btn btn-success"> Send Recovery Link </button>
      `

      __showModal('Recover Password', content, actions);

    }



  </script>


</body>
</html>
