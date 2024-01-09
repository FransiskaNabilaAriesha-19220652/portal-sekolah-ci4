<?php if (session()->has('success')) : ?>
    <script>
        alert("<?= session('success') ?>");
    </script>
<?php elseif(session()->has('error')) : ?>
    <script>
        alert("<?= session('error') ?>");
    </script>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Autentikasi</title>
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

    <style>
        /* CSS */
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            appearance: textfield;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/dashboard/assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Selamat Datang</h5>
                                        <p class="text-center small">Silahkan Masukan NIS/NIP/ID dan password anda</p>
                                    </div>

                                    <!-- Formulir Login -->
                                    <form id="loginForm" class="row g-3 needs-validation" novalidate action="<?= site_url('processLogin'); ?>" method="post">

                                        <div class="col-12">
                                            <label for="nis_nip_id" class="form-label">NIS/NIP/ID</label>
                                            <div class="input-group has-validation">
                                                <input type="number" name="nis_nip_id" class="form-control" id="nis_nip_id" required>
                                                <div class="invalid-feedback">masukan id yang terdaftar</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="yourPassword" required>
                                            <div class="invalid-feedback">password tidak boleh kosong</div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Ingat saya?</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                            <a href="<?php echo base_url('logout'); ?>">Logout</a>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Belum Memiliki Akun? <a href="registrasi">Buat Akun Sekarang</a></p>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                            </div>


                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

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

</body>

</html>