<?php
require_once("../config.php");
  
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
        Manage Individual
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"> Manage Individual</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 
 
    </section>
    <!-- /.content -->
  </div>

<?php require_once("../footer.php");?>
  