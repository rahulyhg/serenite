<?php
//include_once "logincheck1.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sachith's panel</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form action="logincheck.php" method="post">
              <h1>Admin Login</h1>
              <?php
              if(isset($_REQUEST['fail'])){
                if($_REQUEST['fail'] == 1){
                  echo "<h5 style='color: red'>Invalid Login Credentials.</h5>";
                } else if($_REQUEST['fail'] == 2){
                  echo "<p style='color: green'>You have Successfully Logged Out.</p>";
                } else if($_REQUEST['fail'] == 3){
                  echo "<p style='color: red'>You do not have the permissions to access the requested area.</p>";
                }
              }
              ?>
              <div>
                <input type="text" class="form-control" placeholder="Email Id" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password"/>
              </div>
              <div>
                <input class="btn btn-default submit" type="submit" value="Log In" />
                 <a class="reset_pass" href="#">Lost your password?</a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p> -->

                <div class="clearfix"></div>
                <br />

                <div>

                  <p>^©<?php echo date("Y"); ?> All Rights Reserved. serenite by nagpals.</p>
                </div>
              </div>
            </form> -->
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
