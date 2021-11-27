<?php getFile(FOLDER_PATH . "core/checkuser"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Home</title>
  <?php require_once 'head.php'; ?>
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php url("index"); ?>" class="nav-link">Home</a>
        </li>
      </ul>


      <div class="dropdown show ml-auto">
        <a class="btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?= getSession('user')['user_name']; ?>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="<?php url("logout") ?>">logout</a>
        </div>
      </div>

    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="<?php url("index"); ?>" class="brand-link">
        <img src="<?php full_url("assets/dist/img/3d-printing-software.png"); ?>" alt="PMS Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
        <span class="brand-text font-weight-light">PMS Project</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php full_url("assets/dist/img/user8-128x128.jpg"); ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="<?php url("pages/users/profile"); ?>" class="d-block"><?= getSession('user')['user_name']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                <i class="nav-icon far fa-list-alt"></i>
                <p>
                  categories
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php url("pages/category/add"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add category</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php url("pages/category/view"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>show categories</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-shopping-cart"></i>
                <p>
                  products
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php url("pages/product/add"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php url("pages/product/view"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>show products</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  users
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php url("pages/users/add"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add user</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php url("pages/users/view"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>show users</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview ">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                <p>
                  invoices
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php url("pages/invoices/add"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>add invoice</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php url("pages/invoices/view"); ?>" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>show invoices</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>