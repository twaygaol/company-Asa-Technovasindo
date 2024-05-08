<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
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

  <style>

    nav{

      background:black;
    }
    .back{
      background:blue;
      color:white;
      text-decoration:none;
      text-align:center;
      border-radius:5px;
      font-size:15px;
      padding:10px;
    }

    .back:hover
    {
      background:white;
      color:blue;
    }

    #sidebar{
    
      margin-top:-24px;
    }
    .menu-title{
      color:black;
    }
    .dashboard_nav {
      background:white;
      color:black;
      border-radius:10px;
    }

    .dashboard_nav:hover{
      background:gray;
      color:white;
      border-radius:10px;
    }
  </style>
</head>
<body>
  
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="/"><img src="../img/logo astha.png" class="mr-2" alt="logo" /><span style="font-size:15px; font-family:sans-serif; ">PT. ASTHA</span></a>
        <a class="navbar-brand brand-logo-mini" href="/"><img src="../img/logo astha.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right" style="margin-top:20px;">
          <li class="nav-item dropdown">
          <?php
           
                ?>
                <li class=" ">
                    <a href="/logout" style="color:#ffff; background:blue;" 
                        class="back">Logout</a>
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
          <li class="nav-item">
            <a class="nav-link" href="/admin">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/slider">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Slider Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Setting Web</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/blog">Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/produk">produk</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/profile">Profile</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>