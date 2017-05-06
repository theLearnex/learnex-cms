<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $("#loding1").hide();
    $("#loding2").hide();
    $(".zone").change(function() {
      $("#loding1").show();
      var id = $(this).val();
      var dataString = 'id=' + id;
      $(".state").find('option').remove();
      $(".city").find('option').remove();
      $.ajax({
        type: "POST",
        url: "get_state.php",
        data: dataString,
        cache: false,
        success: function(html) {
          $("#loding1").hide();
          $(".state").html(html);
        }
      });
    });


    $(".state").change(function() {
      $("#loding2").show();
      var id = $(this).val();
      var dataString = 'id=' + id;

      $.ajax({
        type: "POST",
        url: "get_city.php",
        data: dataString,
        cache: false,
        success: function(html) {
          $("#loding2").hide();
          $(".city").html(html);
        }
      });
    });

  });
</script>
<?php

   include_once 'class.crud.php';
   $crud = new crud();
 
if(isset($_POST['btn-save']))
{
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email_id'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $zipcode = $_POST['zipcode'];
    $about_me = $_POST['about_me'];
    $basic_information = $_POST['basic_information'];
    $work_education = $_POST['work_education'];
    $slogan = $_POST['slogan'];
    $zone = $_POST['zone_id'];
    $state = $_POST['state_id'];
    $city = $_POST['city_id'];
    
    if($crud->create($fname,$lname,$email,$mobile,$password,$gender,$dob,$zipcode, $about_me,$basic_information,$work_education,$slogan,$zone,$state,$city))
    {
        header("Location: add-data.php?inserted");
    }
    else
    {
        header("Location: add-data.php?failure");
    }
}
?>


<?php
	require_once("../../session.php");
	require_once("../../class.user.php");
	$auth_user = new USER();
	$user_id = $_SESSION['user_session'];
	$stmt = $auth_user->runQuery("SELECT * FROM staff WHERE staff_id=:staff_id");
	$stmt->execute(array(":staff_id"=>$user_id));
	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
  ?>
  <?php require_once("../../config.php");?>
  <?php require_once("../../head.php");?>
<?php require_once("../../header.php");?>
<?php require_once("../../sidebar.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       User Management
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> User Management</a></li>
        <li class="active">ADD USER</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                  </div>
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form method="post" id="demo_form" data-parsley-validate="">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" name="email_id" data-parsley-trigger="change" required="" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">User Image</label>
                        <input type="file" id="exampleInputFile">
                      </div>
                      <!-- select -->
                      <div class="form-group">
                        <label>Define Role *</label>
                        <select class="form-control" id="role" required>
                          <option>Select Role</option>
                        </select>
                      </div>
                      <!-- select -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- Form Element sizes -->
                <div class="box box-success">
                  <div class="box-header with-border">
                    <h3 class="box-title">General Information</h3>
                  </div>
                  <div class="box-body">
                    <div class="form-group">
                      <label>First Name *</label>
                      <input type="text" class="form-control" name="first_name" required="" placeholder="First Name">
                    </div>

                    <div class="form-group">
                      <label>Last Name *</label>
                      <input type="text" class="form-control" name="last_name" required="" placeholder="Last Name">
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
                  </div>
                  <!-- /.box-body -->
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
                    <div class="box-body">
                            select 
                            <div class="form-group">
                                <label>Select Zone *</label>
                                <select name="zone_id" class="form-control zone"  required>
                                <option value="">Select Zone</option>
                                <?php
	$stmt = $DB_con->prepare("SELECT * FROM zone");
	$stmt->execute();
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
        <option value="<?php echo $row['zone_id']; ?>"><?php echo $row['zone_name']; ?></option>
        <?php
	} 
?>
                              </select>
                            <div class="form-group">
                                <label>Select State *</label>
                                <select name="state_id" class="form-control state" required>
                                <option selected="selected">Select State</option>
                              </select>
                              <img src="<?php echo BASE_URL?>/assets/images/ajax-loader.gif" id="loding1"></img>
                            </div>
                            <!-- select -->
                            <div class="form-group">
                                <label>Select City *</label>
                                <select name="city_id" class="form-control city" required>
                                <option>Select City</option>
                              </select>
                              <img src="<?php echo BASE_URL?>/assets/images/ajax-loader.gif" id="loding2"></img>
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
                      <textarea class="form-control" rows="2" placeholder="About Me" name="about_me"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Basic Information</label>
                      <textarea class="form-control" rows="2" placeholder="Basic Information" name="basic_information"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Work Education</label>
                      <textarea class="form-control" rows="2" placeholder="Work Education" name="work_education"></textarea>
                    </div>

                    <div class="form-group">
                      <label>Slogan</label>
                      <textarea class="form-control" rows="2" placeholder="Slogan" name="slogan"></textarea>
                    </div>
                    <!-- /.box-body -->
                    <div class="row">
                      <div class="col-sm-12 text-center">

                        <button type="submit" class="btn btn-primary" name="btn-save">
                          <span class="glyphicon glyphicon-plus"></span> Create New Record
                        </button>
                        <a href="../user-management.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-footer -->
                  </form>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->
            </div>
            <!--/.col (right) -->

        </div>
        <!-- /.row -->
 
    </section>
    <!-- /.content -->
  </div>

<?php require_once("../../footer.php");?>
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
  