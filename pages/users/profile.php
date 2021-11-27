<?php require_once '../../core/config.php'; ?>
<?php getFile(HANDELER_FOLDER . "database"); ?>
<?php getFile(HANDELER_FOLDER . "session"); ?>
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/header"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">profile Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php url("index") ?>">Home</a></li>
            <li class="breadcrumb-item active">User Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="text-secondary">USER Profile</h1>
      </div>
    </div>
  </div>

<div class="container">
  <div class="row">
    <div class="col-md-3 mx-auto">

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img class="profile-user-img img-fluid img-circle" src="<?php full_url("assets/dist/img/user8-128x128.jpg")?>" alt="User profile picture">
          </div>

          <h3 class="profile-username text-center"><?= getSession('user')['user_name']; ?></h3>

          <p class="text-muted text-center"><?= getSession('user')['user_type']; ?></p>

          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>phone</b> <a class="float-right">01072222391</a>
            </li>
            <li class="list-group-item">
              <b>address</b> <a class="float-right">Dokki</a>
            </li>
            <li class="list-group-item">
              <b>Birthdata</b> <a class="float-right">11/11/2020</a>
            </li>
          </ul>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </div>
  </div>
</div>

</div>


<!-- /.content-wrapper -->
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/Footer"); ?>