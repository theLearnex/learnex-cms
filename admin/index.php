<?php
include_once 'dbconfig.php';
?>
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
                        <h3 class="box-title">Data Table With Full Features</h3>
                        <a class="btn btn-primary pull-right" href="add-data.php" role="button">Add User</a>
                    </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
     <th>Sr. No.</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>E - mail ID</th>
     <th>Contact No</th>
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
                </tbody>
                <tfoot>
                   <tr>
     <th>Sr. No.</th>
     <th>First Name</th>
     <th>Last Name</th>
     <th>E - mail ID</th>
     <th>Contact No</th>
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
        <!-- /.content-wrapper -->


        <!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
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

    