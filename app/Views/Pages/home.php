<!-- app/Views/pages -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Halaman home
<?= $this->endSection() ?>

<?= $this->section('meta_description') ?>
Profil pengguna CodeIgniter 4
<?= $this->endSection() ?>

<?= $this->section('add_head') ?>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="assets/dashboard/assets/img/favicon.png" rel="icon">
<link href="assets/dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.gstatic.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="assets/dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/dashboard/assets/vendor/simple-datatables/style.css" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="assets/dashboard/assets/css/style.css" rel="stylesheet">

<!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<?= $this->include('layouts/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">jadwal</h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mata Pelajaran</th>
                  <th scope="col">Guru Pengajar</th>
                  <th scope="col">Hari</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>ipa</td>
                  <td>siti.s.pd</td>
                  <td>senin</td>
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
      <hr>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Absensi</h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">tanggal</th>
                  <th scope="col">keterangan</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Hari</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
      <hr>
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">nilai</h5>
            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Nilai</th>
                  <th scope="col">Hari</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Brandon Jacob</td>
                  <td>Designer</td>
                  <td>28</td>
                  <td>2016-05-25</td>
                </tr>
              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
  <div class="copyright">
    &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
  </div>
  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/dashboard/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/dashboard/assets/vendor/chart.js/chart.umd.js"></script>
<script src="assets/dashboard/assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/dashboard/assets/vendor/quill/quill.min.js"></script>
<script src="assets/dashboard/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/dashboard/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/dashboard/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/dashboard/assets/js/main.js"></script>




<?= $this->endSection() ?>