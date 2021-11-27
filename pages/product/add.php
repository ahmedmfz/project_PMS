<?php require_once '../../core/config.php'; ?>
<?php getFile(HANDELER_FOLDER . "database");?>
<?php getFile(HANDELER_FOLDER . "session"); ?>
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/header"); ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">products Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php url("index")?>">Home</a></li>
            <li class="breadcrumb-item active">Add product</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center mb-2">
        <h1 class="text-secondary"> Add products</h1>
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
              <h3 class="card-title">Add product </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?php url("handlers/products/add")?>" method="POST" enctype="multipart/form-data">
              <div class="card-body">
                <?php $data = db_get_all("sections" , "id_section")?>
              <div class="form-group">
                  <label>Category</label>
                  <select name="category" class="form-control">

                    <option value="" selected readonly>---</option>

                    <?php foreach($data as $row):?>
                    <option value="<?= $row['id_section'] ?>"><?= $row['name_section']?></option>
                    <?php endforeach?>

                  </select>
                </div>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="<?= isset($_SESSION['name'])? flashSession('name'): '';?>" placeholder="Enter product name">
                </div>
                <div class="form-group">
                  <label >Price</label>
                  <input type="number" class="form-control" value="<?= isset($_SESSION['price'])? flashSession('price'): '';?>" placeholder="Enter price" name="price">
                </div>
                <div class="form-group">
                  <label >Quantity</label>
                  <input type="number" class="form-control" value="<?= isset($_SESSION['quantity'])? flashSession('quantity'): '';?>" placeholder="Enter Quantity" name="quantity">
                </div>
                <div class="form-group">
                  <label >Description</label>
                  <textarea class="form-control" placeholder="Description of category" name="description"><?= isset($_SESSION['description'])? flashSession('description'): '';?></textarea>
                </div>
                <div class="form-group">
                  <label >image</label>
                    <!-- <div class="custom-file"> -->
                        <input type="file" class="form-control" name="image">
                        <!-- <label class="custom-file-label">Choose file</label> -->
                    </div>
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
