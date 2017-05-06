<?php
include_once '../dbconfig.php';
require_once("../config.php");
include_once 'user-management/class.crud.php';
$crud = new crud();

require_once("../head.php");

require_once("../session.php");
require_once("../class.user.php");
$auth_user = new USER();
$user_id = $_SESSION['user_session'];
$stmt = $auth_user->runQuery("SELECT * FROM staff WHERE staff_id=:staff_id");
$stmt->execute(array(":staff_id"=>$user_id));
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
?>
  <?php require_once("../header.php");?>
    <?php require_once("../sidebar.php");?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
User Management
<small>Control panel</small>
</h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User Management</li>
          </ol>
        </section>
   <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">table With User List</h3>
               <a class="btn btn-primary pull-right" href="user-management/add-data.php" role="button">Add User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr.No.</th>
                  <th>First Name</th>
                  <th>Email Id</th>
                  <th>Contact No.</th>
                 <th colspan="2" align="center">Actions</th>
                </tr>
                </thead>
                <tbody>
 <tr>
                    <?php
		$query = "SELECT * FROM tbl_users";  
        $records_per_page=10;  
        $newquery = $crud->paging($query,$records_per_page);   
		$crud->dataview($newquery);
	 ?>
                    </tr>
                <tfoot>
                <tr>
                  <th>Sr.No.</th>
                  <th>First Name</th>
                  <th>Email Id</th>
                  <th>Contact No.</th>
                <th colspan="2" align="center">Actions</th>
                </tr>
                </tfoot>
              </table>
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
      <!-- DataTables -->
          <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/plugins/datatables/dataTables.bootstrap.css">
  <!-- jQuery 2.2.3 -->
<script src="<?php echo BASE_URL?>/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo BASE_URL?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL?>/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
      <?php require_once("../footer.php");?>
      <!-- page script -->
