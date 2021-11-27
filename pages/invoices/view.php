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
                    <h1 class="m-0 text-dark">Invoices Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php url("pages\index")?>">Home</a></li>
                        <li class="breadcrumb-item active">Show invoice</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="text-secondary">All Invoices</h1>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Number</th>
                                    <th>Date</th>
                                    <th>Section</th>
                                    <th>Product</th>
                                    <th>User</th>
                                    <th>Total</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Trident</td>
                                    <td>Internet
                                        Explorer 4.0
                                    </td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>Win 95+</td>
                                    <td>
                                        <a href="#" class="btn btn-info"><i class="far fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                        <a href="#" class="btn btn-secondary"> <i class="fas fa-print"></i></a>
                                    </td>
                                </tr>
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