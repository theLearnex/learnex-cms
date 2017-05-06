 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo BASE_URL?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $userRow['staff_name']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       <li><a href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
         <li><a href="user-management.php"><i class="fa fa-users"></i>User Management</a></li>
         <li><a href="manage-corporate.php"><i class="fa fa-briefcase"></i>Manage Corporate</a></li>
           <li><a href="manage-individual.php"><i class="fa fa-user"></i>Manage Individual</a></li>
           <li><a href="question-bank.php"><i class="fa fa-table"></i>Question Bank</a></li>
             <li><a href="activity-log.php"><i class="fa fa-calendar"></i>Activity Log</a></li>
              <li><a href="<?php echo BASE_URL?>/logout.php?logout=true"><i class="fa fa-power-off"></i>LogOut</a></li>
   
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>