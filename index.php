<?php include_once('head.php')?>
<?php include_once('header.php')?>
<?php include_once('sidebar.php')?> 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User Management</li>
      </ol>
    </section>
<div class="container">
    <div class="row"><br><br>
        <div class="col-md-11">
            <div class="pull-right">
                <button class="btn btn-success" data-toggle="modal" data-target="#add_new_record_modal">Add New Record</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Records:</h3>

            <div class="records_content"></div>
        </div>
    </div>
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" id="first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" id="last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="password" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" id="email" placeholder="Email Address" class="form-control"/>
                </div>

                    <div class="form-group">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" placeholder="Gender" class="form-control"/>
                </div>
                        <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="number" id="mobile" placeholder="Mobile No" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="zone">Zone</label>
                    <input type="text" id="zone" placeholder="zone" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="state">State</label>
                    <input type="text" id="state" placeholder="State" class="form-control"/>
                </div>

                        <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" placeholder="city" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="zipcode">zipcode</label>
                    <input type="number" id="zipcode" placeholder="Zipcode" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="DOB">photo</label>
                    <input type="text" id="photo" placeholder="Photo" class="form-control"/>
                </div>
                   <div class="form-group">
                    <label for="slogan">slogan</label>
                    <input type="text" id="slogan" placeholder="slogan" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="work_education">Work Education</label>
                    <input type="text" id="work_education" placeholder="Work Education" class="form-control"/>
                </div>


                       <div class="form-group">
                    <label for="about_me">About Me</label>
                    <input type="text" id="about_me" placeholder="about_me" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="last_login">Last Login</label>
                    <input type="text" id="last_login" placeholder="last_login" class="form-control"/>
                </div>

                   <div class="form-group">
                    <label for="corp_id">Corporate</label>
                    <input type="text" id="corp_id" placeholder="corp_id" class="form-control"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addRecord()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">First Name</label>
                    <input type="text" id="update_first_name" placeholder="First Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Last Name</label>
                    <input type="text" id="update_last_name" placeholder="Last Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_email">Email Address</label>
                    <input type="text" id="update_email" placeholder="Email Address" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="update_gender">Gender</label>
                    <input type="text" id="update_gender" placeholder="Gender" class="form-control"/>
                </div>
                        <div class="form-group">
                    <label for="update_mobile">Mobile</label>
                    <input type="number" id="update_mobile" placeholder="Mobile No" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="update_zone">Zone</label>
                    <input type="text" id="update_zone" placeholder="zone" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="update_state">State</label>
                    <input type="text" id="update_state" placeholder="State" class="form-control"/>
                </div>

                        <div class="form-group">
                    <label for="update_city">City</label>
                    <input type="text" id="update_city" placeholder="city" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_zipcode">zipcode</label>
                    <input type="number" id="update_zipcode" placeholder="Zipcode" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="update_DOB">photo</label>
                    <input type="text" id="update_photo" placeholder="Photo" class="form-control"/>
                </div>
                   <div class="form-group">
                    <label for="update_slogan">slogan</label>
                    <input type="text" id="update_slogan" placeholder="slogan" class="form-control"/>
                </div>

                       <div class="form-group">
                    <label for="update_work_education">slogan</label>
                    <input type="text" id="update_work_education" placeholder="Work Education" class="form-control"/>
                </div>


                       <div class="form-group">
                    <label for="update_about_me">slogan</label>
                    <input type="text" id="update_about_me" placeholder="about_me" class="form-control"/>
                </div>

                  <div class="form-group">
                    <label for="update_last_login">Last Login</label>
                    <input type="text" id="update_last_login" placeholder="last_login" class="form-control"/>
                </div>

                   <div class="form-group">
                    <label for="update_corp_id">Corporate</label>
                    <input type="text" id="update_corp_id" placeholder="corp_id" class="form-control"/>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/script.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-75591362-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>
