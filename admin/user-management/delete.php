<?php

include_once 'class.crud.php';
$crud = new crud(); ?>

  <?php
include_once 'dbconfig.php';

if(isset($_POST['btn-del']))
{
    $id = $_GET['delete_id'];
    $crud->delete($id);
    header("Location: delete.php?deleted");
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
Dashboard
<small>Control panel</small>
</h1>
                  <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                  </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                  <div class="row">
                    <div class="col-xs-12">


                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Data Table With Full Features</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                          <?php
if(isset($_GET['deleted']))
{
    ?>
                            <div class="alert alert-success">
                              <strong>Success!</strong> record was deleted...
                            </div>
                            <?php
}
else
{
    ?>
                              <div class="alert alert-danger">
                                <strong>Sure !</strong> to remove the following record ?
                              </div>
                              <?php
}
?>

                        </div>
                        <!-- /.box-body -->
                        <div class="box">
                          <?php
if(isset($_GET['delete_id']))
{
    ?>
                            <table class='table table-bordered'>
                              <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>E - mail ID</th>
                                <th>Gender</th>
                              </tr>
                              <?php
    $stmt = $DB_con->prepare("SELECT * FROM tbl_users WHERE id=:id");
    $stmt->execute(array(":id"=>$_GET['delete_id']));
    while($row=$stmt->fetch(PDO::FETCH_BOTH))
    {
        ?>
                                <tr>
                                  <td>
                                    <?php print($row['id']); ?>
                                  </td>
                                  <td>
                                    <?php print($row['first_name']); ?>
                                  </td>
                                  <td>
                                    <?php print($row['last_name']); ?>
                                  </td>
                                  <td>
                                    <?php print($row['email_id']); ?>
                                  </td>
                                  <td>
                                    <?php print($row['mobile']); ?>
                                  </td>
                                </tr>
                                <?php
    }
    ?>
                            </table>
                            <?php
}
?>


                        </div>

                        <div class="box">

                          <?php
if(isset($_GET['delete_id']))
{
    ?>
                            <form method="post">
                              <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
                              <button class="btn btn-large btn-primary" type="submit" name="btn-del"><i class="glyphicon glyphicon-trash"></i> &nbsp; YES</button>
                              <a href="../user-management.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
                            </form>
                            <?php
}
else
{
    ?>
                              <a href="../user-management.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
                              <?php
}
?>

                        </div>

                      </div>
                      <!-- /.box -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>

              <?php require_once("footer.php");?>