<?php
include_once "logincheck1.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Incito Academy Admin Panel - Add Users</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div id="nav">
          <!-- Left & Top Navigation Comes Here from nav.php -->
        </div>
          <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add New </h2>

                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left" novalidate action="lib/process.php" method="post">
                    <input type="hidden" name="type" value="user"></input>
                    <input type="hidden" name="approval" value="1"></input>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="name" placeholder="Full Name e.g Raj Sinha" required="required" type="text">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label for="password" class="control-label col-md-3">Password</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number <span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="number" id="number" name="number" required="required" data-validate-length-range="10,20" class="form-control col-md-7 col-xs-12">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Registration type <span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="registration" name="registration" required="required">
                                <option value="">Select an Option</option>
                                <option value="Full Time Student">Full time Incito Student</option>
                                <option value="Study Material">Purchased Study Material Only</option>
                                <option value="Outside Student">Outside Student</option>
                            </select>
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Course <span class="required">*</span>
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="course" name="course" required="required">
                                <option value="">Select an Option</option>
                                <option value="CA Final">CA Final</option>
                                <option value="CA IPCC">CA IPCC</option>
                                <option value="CMA Final">CMA Final</option>
                                <option value="CMA Inter">CMA Inter</option>
                                <option value="CS Executive">CS Executive</option>
                                <option value="CS Professional">CS Professional</option>
                                <option value="Other">Other</option>
                            </select>
                       </div>
                     </div>
                     <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="Male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                  <input type="radio" name="gender" value="Female"> Female
                                </label>
                              </div>
                            </div>
                    </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                       <div class="col-md-6 col-md-offset-3">
                         <button type="reset" class="btn btn-primary">Cancel</button>
                         <button id="send" type="submit" class="btn btn-success">Submit</button>
                       </div>
                     </div>
                   </form>
                </div>
              </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer id="foots">
          <!-- Footer Goes Here -->
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>
  <!-- validator -->
  <script src="vendors/validator/validator.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>

  <!-- validator -->
  <script>
    // initialize the validator function
    validator.message.date = 'not a real date';


      $('#nav').load('nav.php');
      $('#foots').load('footer.php');



    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function() {
      validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;

      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();

      return false;
    });
  </script>
  <!-- /validator -->
</body>
</html>
