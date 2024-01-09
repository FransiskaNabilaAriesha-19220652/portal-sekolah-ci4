<!-- ======= Header ======= -->
   <?php
   $nama = null;
   switch($user_level) {
         case "1":
               $nama = $users[0]['Nama_Siswa'];
               break;
         case "2":
               $nama = $users[0]['Nama_Orang_Tua'];
               break;
         case "3":
               $nama = $users[0]['Nama_Guru'];
               break;
         default:
               $nama = null;
 }
 ?>
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="assets/dashboard/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Portal Sekolah</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <li class="nav-item dropdown">




            </li><!-- End Notification Nav -->



            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                <img src="assets/dashboard/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                <span class="d-none d-md-block dropdown-toggle ps-2">
                    <?= $nama ?>
                </span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                <li class="dropdown-header">
                    <h6><?= $nama ?></h6>
                </li>
                <li>
                    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('logout'); ?>">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                    </a>
                </li>

            </ul><!-- End Profile Dropdown Items -->
            </li><!-- End Profile Nav -->

        </ul>
    </nav>
    <!-- End Icons Navigation -->

</header><!-- End Header -->




<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        
        <!-- <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li>End Blank Page Nav -->

    </ul>

</aside>
<!-- End Sidebar-->