<?php require_once '../../core/config.php'; ?>
<?php getFile(HANDELER_FOLDER . "requests");?>
<?php getFile(HANDELER_FOLDER . "database");?>
<?php getFile(HANDELER_FOLDER . "session");?>
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
                        <li class="breadcrumb-item active">Show product</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="text-secondary">All products</h1>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/massage");?>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>category</th>
                                    <th>Name</th>
                                    <th>price</th>
                                    <th>quantity</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $data = db_join_all("products","sections","id_section","section_id","id_product");
                                    foreach($data as $row) :
                                    ?>
                                <tr>
                                    <th scope="row"><?php iteration(); ?></th>
                                    <td><?= $row['name_section']?></td>
                                    <td><?= $row['name_product']?></td>
                                    <td><?= $row['price']?></td>
                                    <td><?= $row['quantity']?></td>
                                    <td><?= $row['description_product']?></td>
                                    <td><img src="../../files/<?=$row['image']?>" alt="product_image" style="width:100px;"></td>
                                    <td>
                                        <a href="<?php full_url("pages/product/edit.php?id=". $row['id_product'])?>" class="btn btn-info"><i class="far fa-edit"></i></a>
                                        <a href="<?php full_url("handlers/products/delete.php?id=". $row['id_product'])?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                <?php endforeach ;?>
                            </tbody>
                        </table>
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

<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>