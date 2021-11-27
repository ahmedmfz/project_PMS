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
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Add invoice</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="text-secondary">Add Invoices</h1>
            </div>
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add invoice</h3>
                    </div>
                    <form role="form" id="quickForm">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Number </label>
                                        <input type="text" class="form-control" name="number" placeholder="Enter invoice number">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Date </label>
                                        <input type="date" class="form-control" name="date" value="date('y,m,d')">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Section </label>
                                        <select class="form-control" name="section">
                                            <option value="123" selected disabled>123</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Product </label>
                                        <select class="form-control" name="product">
                                            <option value="123" selected disabled>123</option>
                                            <option value="1">1</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label> Total </label>
                                        <input type="number" class="form-control" name="total" placeholder="Enter total of invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->
<?php getFile(PREV_FOLDER . PREV_FOLDER . "inc/Footer"); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $.validator.setDefaults({
            submitHandler: function() {
                alert("Form successful submitted!");
            }
        });
        $('#quickForm').validate({
            rules: {
                number: {
                    required: true,
                },
                date: {
                    required: true,
                },
                section: {
                    required: true,
                },
                product: {
                    required: true,
                },
                total: {
                    required: true,
                },
            },
            messages: {
                number: {
                    required: "Please enter invoice number",
                },
                date: {
                    required: "Please enter invoice date",
                },
                section: {
                    required: "Please enter invoice section",
                },
                product: {
                    required: "Please enter invoice product",
                },
                total: {
                    required: "Please enter invoice total",
                },
            },

            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
</script>