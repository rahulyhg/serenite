<?php
include_once "logincheck1.php";
  include_once "lib/sm-constant.php";
  include_once "lib/sm-connection.php";
  include_once "lib/mainFunctions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sanchith's Admin Panel - Edit Mattress Protector</title>

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

    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">

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
                    <h2>Edit</h2>
                <?php 
                $result=aGetAllDetailsByGroup("mattress_protector",$_REQUEST['id']);
                ?>
                    <div class="clearfix"></div>
                  </div>
                <div class="x_content">
                  <form class="form-horizontal form-label-left" novalidate action="lib/process.php" method="post" enctype="multipart/form-data">
                      <input type="hidden" value="mattress_protector" name="type">
                      <input type="hidden" value="1" name="approval">
                      <input type="hidden" name="edit" value="1" >
                      <input type="hidden" name="group_id" value="<?php echo $_REQUEST['id']; ?>">
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="name" value="<?php echo $result[0]['title'];?>" type="text">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Id
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><?php echo $_REQUEST['id'];?>
                       </label>
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Brand
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="brand" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="brand" value="<?php echo $result[0]['Product_Brand'];?>" type="text">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="price" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="price" value="<?php echo $result[0]['price'];?>" type="number">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="quantity" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="quantity" value="<?php echo $result[0]['Quantity'];?>" type="number">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Size
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="size" value="<?php echo $result[0]['size'];?>" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="size"  type="text">
                       </div>
                     </div>
                     <div class="item form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Order
                       </label>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                         <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6"  name="i_order" value="<?php echo $result[0]['i_order'];?>" placeholder="Higher Number will come on Top" type="number">
                       </div>
                     </div>
                     <div class="ln_solid"></div>
                     <div class="form-group">
                       <div class="col-md-6 col-md-offset-3">
                         <button type="reset" class="btn btn-primary">Reset</button>
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
  <!-- <script src="vendors/nprogress/nprogress.js"></script> -->
  <!-- Select2 -->
  <script src="vendors/select2/dist/js/select2.full.min.js"></script>
  <!-- validator -->
  <script src="vendors/validator/validator.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>

  <!-- validator -->
  <script>
  <!-- Select2 -->


      $(".select2_group").select2({});
      $(".select2_multiple").select2({

        placeholder: "Select Suitable Option",
        allowClear: true
      });


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