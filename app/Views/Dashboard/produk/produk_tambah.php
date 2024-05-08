<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php echo"$title"?> </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<? echo "../vendors/feather/feather.css"?>">
  <link rel="stylesheet" href="<?php echo "../vendors/ti-icons/css/themify-icons.css"?>">
  <link rel="stylesheet" href="<?php echo "../vendors/css/vendor.bundle.base.css"?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo"../vendors/datatables.net-bs4/dataTables.bootstrap4.css"?>">
  <link rel="stylesheet" href="<?php echo"../vendors/ti-icons/css/themify-icons.css"?>">
  <link rel="stylesheet" type="text/css" href="<?php echo"../js/select.dataTables.min.css"?>">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo"../css/vertical-layout-light/style.css"?>">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo"../img/logo.png"?>" />
</head>
<body>
  
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="../img/logo astha.png" class="mr-2" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="../img/logo astha.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
       
        <ul class="navbar-nav navbar-nav-right" style="margin-top:20px;">
          <li class="nav-item dropdown">
          <?php
           
                ?>
                <li>
                    <a href="/logout" style="color:#ffff; background:blue;" 
                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transpa md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-w    dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                </li>
                <?php
             ?>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="dashboard_nav" >
            <a class="nav-link" href="/admin">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <hr>
          <li class="dashboard_nav">
            <a class="nav-link" href="/admin/slider">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Slider Setting</span>
            </a>
          </li>
          <hr>
          <li class="dashboard_nav">
            <a class="nav-link" href="/admin/blog">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Blog Setting</span>
            </a>
          </li>
          <hr>
          <li class="dashboard_nav">
            <a class="nav-link" href="/admin/produk">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Produk</span>
            </a>
          </li>
          <hr>
          <li class="dashboard_nav">
            <a class="nav-link" href="/admin/profile">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <hr>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">TAMBAH DATA</h3>
                  <h6 class="font-weight-normal mb-0">Silahkan kelola Menambah, mengubah dan menghapus produk <span class="text-primary">makasihh 😎</span></h6>
                </div>
                <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <form class="forms-sample" action="<?= site_url('admin/produk/store'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Title</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Title Slider" name="title" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Description</label>
                      <textarea name="keterangan" required  class="form-control" id="exampleInputPassword1" placeholder="keterangan"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <input type="file" class="form-control" id="exampleInputEmail1" name="image" required>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
              </div>
            <div class="row">
          </div>
        </div>
      </div>
      <!-- partial:partials/_footer.html -->
        
        <!-- partial -->
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="<?php echo"../vendors/js/vendor.bundle.base.js"?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="<?php echo"../vendors/chart.js/Chart.min.js"?>"></script>
  <script src="<?php echo"../vendors/datatables.net/jquery.dataTables.js"?>"></script>
  <script src="<?php echo"../vendors/datatables.net-bs4/dataTables.bootstrap4.js"?>"></script>
  <script src="<?php echo"../js/dataTables.select.min.js"?>"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?php echo"../js/off-canvas.js"?>"></script>
  <script src="<?php echo"../js/hoverable-collapse.js"?>"></script>
  <script src="<?php echo"../js/template.js"?>"></script>
  <script src="<?php echo"../js/settings.js"?>"></script>
  <script src="<?php echo"../js/todolist.js"?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo"../js/dashboard.js"?>"></script>
  <script src="<?php echo"../js/Chart.roundedBarCharts.js"?>"></script>
  <!-- End custom js for this page-->
</body>

</html>


        
        