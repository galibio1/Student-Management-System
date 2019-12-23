<?php
   include 'includes/header.php';
   include 'includes/navbar.php';
   include 'includes/leftSidebar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Add new mentors</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
              <li class="breadcrumb-item active">Add new mentors</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-12 -->
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0">Add new profile of a mentor</h5>
              </div>
              <!--card body start-->
              <div class="card-body">
                <div class="row">
                  <!-- add new mentor form start-->
                  <form action="" method="">
                    <div class="col-lg-6">

                      <div class="form-group">
                        <input type="text" name="fullname" class="form-control" require="required" autocomplete="off" placeholder="Full Name">
                      </div>

                      <div class="form-group">
                        <input type="text" name="username" class="form-control" require="required" autocomplete="off" placeholder="Username">
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" class="form-control" require="required" autocomplete="off" placeholder="Password">
                      </div>

                      <div class="form-group">
                        <input type="password" name="cpassword" class="form-control" require="required" autocomplete="off" placeholder="Confirm Password">
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control" require="required" autocomplete="off" placeholder="Email Address">
                      </div>

                    </div>
                    <div class="col-lg-6">
                      

                      <div class="form-group">
                        <input type="text" name="phone" class="form-control" require="required" autocomplete="off" placeholder="Phone">
                      </div>

                      <div class="form-group">
                        <input type="text" name="address" class="form-control" require="required" autocomplete="off" placeholder="Address">
                      </div>

                      <div class="form-group">
                        <input type="text" name="status" class="form-control" require="required" autocomplete="off" placeholder="Status">
                      </div>
                    </div>
                  </form>
                  <!-- add new mentor form end-->
                </div>
              </div>
              <!--card body end-->
            </div>
              
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <?php
  include 'includes/footer.php';
 ?>

