<?php require_once 'core/config.php'; ?>
<?php require_once 'inc/head.php';?>
<?php getFile(FOLDER_PATH ."core/session");

    if( getSession('user') != null){
        redirect("index");
    }

?>

<?php getFile(FOLDER_PATH . "core/database");?>

<div class="container-fliud login-ground">
    <div class="row margin-zero form">
        <div class="col-sm-4 ">
            <?php getFile("inc/massage");?>
            <div class="login-box">
                <div class="login-logo">
                    <p class="text-light"><b>Login</b></p>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign in to start your session</p>

                        <form action="<?php url("handlers/login")?>" method="POST">
                            <div class="input-group ">
                                <input type="email" class="form-control" name="email" value="ahmed@admin.com" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-danger mb-3"></div>

                            <div class="input-group">
                                <input type="password" class="form-control" value="12345678" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-danger mb-3"></div>

                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
