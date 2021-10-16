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
  <?php $vh->__component('styling'); ?>
</head>
<body class="vh-100">
  <div class="authincation h-100" >
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
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
                                  <a href="#">Forgot Password?</a>
                                </div>
                              </div>
                              <div class="text-center">
                                <button class="btn btn-outline-secondary btn-block"> Sign Me In </button>
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

  <script type="text/javascript">




    function validateLogin(){
      const data = getLoginData()
      if (data) {

      }
    }



    //
    function getLoginData(){

      let data = {
        email:document.getElementById('email'),
        password:document.getElementById('password')
      };

      if(data.email == ''){
        return false
      }

      if(data.password == ''){
        return false
      }

      return data;

    }




  </script>


</body>
</html>
