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
                    <h1 class="m-0 text-dark">Users Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php url("index")?>">Home</a></li>
                        <li class="breadcrumb-item active">Show user</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-2">
                <h1 class="text-secondary">All Users</h1>
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
                                    <th>Name</th>
                                    <th>email</th>
                                    <th>type</th>
                                    <th>phone</th>
                                    <th>address</th>
                                    <th>Birthday</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach(db_get_all("users","`id_user`") as $row) :?>
                                    <tr>
                                        <th scope="row"><?php iteration(); ?></th>
                                        <td><?= $row['first_name'] . " " . $row['last_name']?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['type'] ?></td>
                                        <td><?= $row['phone'] ?></td>
                                        <td><?= $row['address'] ?></td>
                                        <td><?= $row['birthday'] ?></td>
                                        <td>
                                            <a href="<?php full_url("pages/users/edit.php?id=" . $row['id_user'])?>" class="btn btn-info"><i class="far fa-edit"></i></a>
                                            <a href="<?php full_url("handlers/users/delete.php?id=" . $row['id_user'])?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach?>
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