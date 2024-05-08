<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- x-icon -->
    <link rel="shortcut icon" href="<?php echo"../img/logo.png"?>" type="icon">

    <!-- Other css -->
    <link rel="stylesheet" href="<?php echo"../css/animate.css"?>">
    <!-- <link rel="stylesheet" href="<?php echo"../css/bootstrap.min.css"?>"> -->
    <link rel="stylesheet" href="<?php echo"../css/all.min.css"?>">
    <link rel="stylesheet" href="<?php echo"../css/icofont.min.css"?>">
    <link rel="stylesheet" href="<?php echo"../css/swiper.min.css"?>">
    <link rel="stylesheet" href="<?php echo"../css/odometer.css"?>">
    <link rel="stylesheet" href="<?php echo"../css/lightcase.css"?>">
    <link rel="stylesheet" href="<?php echo"../css/style.css"?>">
    <title><?php echo"$title"?></title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        a{
            text-decoration:none;
        }
        .carousel-item{
            height:100vh;
            
        }
        .cr{
            
        }
        /* .carousel-item img{
            margin-top:-100px;
            
        } */
        </style>

    
</head>
 
<body style="background-color:white;">
    <!-- preloader start here -->
    <!-- <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div> -->
    <!-- preloader ending here -->

    
    <!-- ==========Header Section Starts Here========== -->
    <header class="header header--one">
        <div class="container">
            <div class="area">
                <div class="logo" style="height:20px;">
                    <img src="<?php echo"../img/logo astha.png"?>" width="60px" style="margin-top:-37%;" height="60px" alt="">
                </div>
                <div class="main-menu" style="height:60px;">
                    <div class="menu" style="color:white">
                        <ul>
                            <li ><a href="/" style="color:#F29727;font-family:system-ui;" class="active">Beranda</a></li>
                            <li><a href="#tentang" style="color:#F29727;font-family:system-ui;">Tentang Kami</a></li>
                            <li><a href="#produk" style="color:#F29727;font-family:system-ui;">produk</a></li>
                            <li><a href="/artikel" style="color:#F29727;font-family:system-ui;">Blog</a></li>
                            <li><a href="#team" style="color:#F29727;font-family:system-ui;">Team</a></li>
                            <li><a href="#kontak" style="color:#F29727;font-family:system-ui;">Kontak</a></li>
                            <?php
                            if (isset($isLogin) && $isLogin || $session->get('isLogin')) {
                                ?>
                                <li>
                                    <a href="/admin" style="color:#ffff;border:2px solid #F29727; background:#f29727;"
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Dashboard</a>
                                </li>
                                <li>
                                    <a href="/logout" style="color:#ffff; background:blue;" 
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
                                </li>
                                <?php
                            } else {
                                ?>
                                <!-- <li>
                                    <a href="/login" style="color:#F29727;"
                                        class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Login</a>
                                </li> -->
                            <?php } ?>
                        </ul>
                        <div class="header__btn" style="margin-top:-3%">
                        <a href="https://www.lazada.co.id/">
                            <img src="<?php echo"../img/laza.png"?>" style="width:30px; height:30px;"  alt="">
                        </a>
                        <a href="https://www.tokopedia.com/">
                            <img src="<?php echo"../img/toko.png"?>" style="width:30px; height:30px;"  alt="">
                        </a>
                        <a href="https://www.shopee.co.id/">
                            <img src="<?php echo"../img/shop.png"?>" style="width:30px; height:30px;"  alt="">
                        </a>
                        </div>
                    </div>
                    <div class="header__bararea">
                        <div class="header__bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ==========Header Section Ends Here========== -->

