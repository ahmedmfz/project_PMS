<?php require_once '../../core/config.php'; ?>
<?php getFile(HANDELER_FOLDER . "session"); ?>
<?php getFile(HANDELER_FOLDER . "database");?>
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/header"); ?>




<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Categories Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php url("index") ?>">Home</a></li>
            <li class="breadcrumb-item active">Add category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-2">
        <h1 class="text-secondary"> Add categories </h1>
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
              <h3 class="card-title">Add category </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php url("handlers\category\add") ?>" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="<?= isset($_SESSION['name'])? flashSession('name'): '';?>" placeholder="Enter category name">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <textarea class="form-control"  placeholder="Description of category" 
                  name="description"><?= isset($_SESSION['description'])? flashSession('description'): '';?></textarea>
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

