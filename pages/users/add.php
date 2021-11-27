<?php require_once '../../core/config.php'; ?>
<?php getFile(HANDELER_FOLDER . "session"); ?>
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/header"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Users Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php url("index")?>">Home</a></li>
            <li class="breadcrumb-item active">Add user</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-2">
        <h1 class="text-secondary"> Add users</h1>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        <?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/massage");?>
          <!-- jquery validation -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add user </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php url("handlers/users/add")?>" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" name="firstname"  value="<?= isset($_SESSION['f_name'])? flashSession('f_name'): '';?>" class="form-control" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" name="lastname" value="<?= isset($_SESSION['s_name'])? flashSession('s_name'): '';?>" class="form-control" placeholder="Enter your Name">
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <input type="email" class="form-control" value="<?= isset($_SESSION['email'])? flashSession('email'): '';?>" placeholder="Enter your Email" name="email">
                </div>
                <div class="form-group">
                  <label >Password</label>
                  <input type="password" class="form-control" value="<?= isset($_SESSION['password'])? flashSession('password'): '';?>" placeholder="Enter your Password" name="password">
                </div>
                <div class="form-group">
                  <label >address</label>
                  <input type="text" class="form-control" value="<?= isset($_SESSION['address'])? flashSession('address'): '';?>" placeholder="Enter your address" name="address">
                </div>
                <div class="form-group">
                  <label >type</label>
                  <select class="form-control" name="type">
                    <option value="" selected disabled><?= isset($_SESSION['address'])? flashSession('address'): '---';?></option>
                    <option value="Owner">Owner</option>
                    <option value="superAdmin">superAdmin</option>
                    <option value="Admin">Admin</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >phone</label>
                  <input type="number" class="form-control" value = "<?= isset($_SESSION['phone'])? flashSession('phone'): '';?>" placeholder="Enter your phone" name="phone">
                </div>
                <div class="form-group">
                  <label >Birthday</label>
                  <input type="date" class="form-control" value = "<?= isset($_SESSION['birthday'])? flashSession('birthday'): '';?>" placeholder="Enter your Birthday" name="birthday">
                </div>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
</div>
<!-- /.content-wrapper -->

<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/Footer"); ?>

