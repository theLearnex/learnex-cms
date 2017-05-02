<?php include_once('head.php')?>
  <?php include_once('header.php')?>
    <?php include_once('sidebar.php')?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">


              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add User</h3>
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Main content -->
                  <section class="content">
                    <div class="row">
                      <!-- left column -->
                      <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="box box-primary">
                          <div class="box-header with-border">
                            <h3 class="box-title">General Information</h3>
                          </div>
                          <!-- /.box-header -->
                          <!-- form start -->
                          <form action="insert_user.php" method="post" id="add_user" data-parsley-validate="">
                            <div class="form-group">
                              <label>First Name *</label>
                              <input type="text" class="form-control" name="first_name" required="" placeholder="First Name">
                            </div>
                            <div class="form-group">
                              <label>Last Name *</label>
                              <input type="text" class="form-control" name="last_name" required="" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                              <label for="Email">Email address *</label>
                              <input type="email" class="form-control" name="email_id" data-parsley-trigger="change" required="" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="gender">Gender *:</label>
                              <p>
                                M:
                                <input type="radio" name="gender" id="genderM" value="M" required=""> F:
                                <input type="radio" name="gender" id="genderF" value="F">
                              </p>
                            </div>
                            <div class="form-group">
                              <label for="mobile">Mobile No *</label>
                              <input type="number" class="form-control" name="mobile" required="" placeholder="Enter Mobile No">
                            </div>

                            <div class="form-group">
                              <label>DOB:</label>

                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="dob" id="datepicker">
                              </div>
                              <!-- /.input group -->
                            </div>
                            <!-- /.form group -->
                            <!--<div class="form-group">
<label for="exampleInputFile">File input</label>
<input type="file" id="exampleInputFile">

<p class="help-block">Example block-level help text here.</p>
</div>-->

                        </div>
                        <!-- /.box -->

                      </div>
                      <!--/.col (left) -->
                      <!-- right column -->
                      <div class="col-md-6">
                        <!-- Horizontal Form -->
                        <div class="box box-info">
                          <div class="box-header with-border">
                            <h3 class="box-title">Address</h3>
                          </div>
                          <div class="box-body">
                            <!-- select -->
                            <div class="form-group">
                              <label>Select Zone</label>
                              <select name="zone" class="form-control" id="zone-list">
                                <option value="">Select Zone</option>
                              </select>
                            </div>
                            <!-- select -->
                            <div class="form-group">
                              <label>Select State</label>
                              <select class="form-control" id="state-list">
                                <option>Select State</option>
                              </select>
                            </div>
                            <!-- select -->
                            <div class="form-group">
                              <label>Select City</label>
                              <select class="form-control" id="city-list">
                                <option>Select City</option>

                              </select>
                            </div>
                            <div class="form-group">
                              <label for="zipcode">Zip Code </label>
                              <input type="number" class="form-control" name="zipcode" placeholder="Enter Zip Code">
                            </div>




                          </div>





                        </div>
                        <!-- /.box -->
           





                        <!-- general form elements disabled -->
                        <div class="box box-warning">
                          <div class="box-header with-border">
                            <h3 class="box-title">General Elements</h3>
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body">

                            <div class="form-group">
                              <label>About Me</label>
                              <textarea class="form-control" rows="3" placeholder="About Me" name="about_me"></textarea>
                            </div>

                             <div class="form-group">
                              <label>Basic Information</label>
                              <textarea class="form-control" rows="3" placeholder="Basic Information" name="basic_information"></textarea>
                            </div>

                                  <div class="form-group">
                              <label>Work Education</label>
                              <textarea class="form-control" rows="3" placeholder="Work Education" name="work_education"></textarea>
                            </div>

                                 <div class="form-group">
                              <label>Slogan</label>
                              <textarea class="form-control" rows="3" placeholder="Slogan" name="slogan"></textarea>
                            </div>


                          </div>
                       
             <!-- /.box-body -->
                        <div class="box-footer">
                          <input type="submit" class="btn btn-info pull-right" value="submit">

                        </div>
                        <!-- /.box-footer -->
                        </form>


                        </div>
                        <!-- /.box -->
                      </div>
                      <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                  </section>



                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->


      <!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

      <?php include_once('footer.php')?>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- bootstrap datepicker -->
        <script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
          $(function() {
            $('#add_user').parsley().on('field:validated', function() {
                var ok = $('.parsley-error').length === 0;
                $('.bs-callout-info').toggleClass('hidden', !ok);
                $('.bs-callout-warning').toggleClass('hidden', ok);
              })
              .on('form:submit', function() {
                return false; // Don't submit form for this demo
              });
          });
        </script>
        <script type="text/javascript">
          //Date picker
          $('#datepicker').datepicker({
            autoclose: true
          });
        </script>


        </body>

        </html>