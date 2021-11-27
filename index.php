<?php require_once 'core/config.php'; ?>
<?php getFile(FOLDER_PATH . "core/database"); ?>
<?php getFile(FOLDER_PATH . "core/session"); ?>
<?php getFile(FOLDER_PATH . "inc/headerIndex"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Home Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Home Page</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="text-secondary">Product mangement system</h1>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row mt-3">
      <?php $data_product = count_items("name_product" ,"products",'products');?>

      <div class="col-lg-3 col-6 ">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3><?=$data_product['products']?></h3>
            <p>Products</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="<?php url("pages/product/view")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <?php $data_section = count_items("name_section" ,"sections",'sections');?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3><?=$data_section['sections']?></h3>
            <p>Categories</p>
          </div>
          <div class="icon">
          <i class="ion ion-android-list"></i>
          </div>
          <a href="<?php url("pages/category/view")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <?php $data_user = count_items("name_user" ,"users",'users');?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3><?=$data_user['users']?></h3>

            <p>Users</p>
          </div>
          <div class="icon">
          <i class="ion ion-person"></i>
          </div>
          <a href="<?php url("pages/users/view")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->

      <?php $data_invoice = count_items("name_invoice" ,"invoices",'invoices');?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3><?=$data_invoice['invoices']?></h3>

            <p>Invoices</p>
          </div>
          <div class="icon">
            <i class="ion ion-android-document"></i>
          </div>
          <a href="<?php url("pages/invoices/view")?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
  </div>
</div>
<!-- /.content-wrapper -->
<?php getFile(FOLDER_PATH . "inc\Footer"); ?>