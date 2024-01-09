<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registrasi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/dashboard/assets//img/favicon.png" rel="icon">
    <link href="assets/dashboard/assets//img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/dashboard/assets//vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/dashboard/assets//vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/dashboard/assets//css/style.css" rel="stylesheet">

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
                                    <img src="assets/dashboard/assets//img/logo.png" alt="">
                                    <span class="d-none d-lg-block">NiceAdmin</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                        <p class="text-center small">Masukkan detail informasi Anda</p>
                                    </div>

                                    <form method="post" action="<?= base_url('register/process'); ?>" class="row g-3 needs-validation" novalidate>
                                        <!-- Dropdown untuk pilihan pendaftaran -->
                                        <div class="col-12">
                                            <label for="registrationType" class="form-label">Pendaftaran Sebagai</label>
                                            <select class="form-select" id="registrationType" name="registrationType" required>
                                                <option selected>Pilih</option>
                                                <option value="siswa">Siswa</option>
                                                <option value="orangtua">Orang Tua</option>
                                            </select>
                                            <div class="invalid-feedback">Pilih tipe pendaftaran Anda.</div>
                                        </div>
                                        <!-- Formulir umum -->
                                        <div class="col-12">
                                            <label for="nama" class="form-label">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="nama" >
                                            <div class="invalid-feedback">Tolong, Masukkan Nama Anda!</div>
                                        </div>
                                        <!-- Formulir tambahan untuk orang tua -->
                                        <div class="col-12" id="orangtuaForm" style="display: none;">
                                            <label for="ktp" class="form-label">Nomor KTP</label>
                                            <input type="number" name="ktp" class="form-control" id="ktp" >
                                            <div class="invalid-feedback">Isi nomor KTP anda</div>
                                        </div>
                                        <div class="col-12" id="orangtuaForm2" style="display: none;">
                                            <label for="agamaOrtu" class="form-label">Agama</label>
                                            <input type="text" name="agamaOrtu" class="form-control" id="agamaOrtu" >
                                            <div class="invalid-feedback">Isi Agama anda</div>
                                        </div>
                                        <div class="col-12" id="orangtuaForm3" style="display: none;">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" >
                                            <div class="invalid-feedback">Anda Belum Memasukan Alamat Email!</div>
                                        </div>
                                        <div class="col-12" id="orangtuaForm4" style="display: none;">
                                            <label for="AlamatOrtu" class="form-label">Alamat</label>
                                            <input type="text" name="AlamatOrtu" class="form-control" id="AlamatOrtu" >
                                            <div class="invalid-feedback">Tolong, Masukkan Alamat Anda!</div>
                                        </div>
                                        <div class="col-12" id="orangtuaForm5" style="display: none;">
                                            <label for="No_hp" class="form-label">Nomor Telpon</label>
                                            <input type="number" name="No_hp" class="form-control" id="No_hp" >
                                            <div class="invalid-feedback">Anda Belum Memasukan Nomor Telpon </div>
                                        </div>
                                        <div class="col-12" id="orangtuaForm6" style="display: none;">
                                            <label for="nis_ank" class="form-label">NIS Anak</label>
                                            <input type="number" name="nis_ank" class="form-control" id="nis_ank">
                                            <div class="invalid-feedback">Anda Belum Memasukan NIS Anak</div>
                                        </div>
                                        <!-- Formulir tambahan untuk siswa -->
                                        <div class="col-12" id="siswaForm" style="display: none;">
                                            <label for="nis" class="form-label">NIS</label>
                                            <input type="number" name="nis" class="form-control" id="nis" >
                                            <div class="invalid-feedback">Anda Belum Memasukan NIS</div>
                                        </div>
                                        <div class="col-12" id="siswaForm2" style="display: none;">
                                            <label for="agama_siswa" class="form-label">Agama</label>
                                            <input type="text" name="agama_siswa" class="form-control" id="agama_siswa">
                                            <div class="invalid-feedback">Tolong, Masukkan Agama Anda!</div>
                                        </div>
                                        <div class="col-12" id="siswaForm3" style="display: none;">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input type="text" name="kelas" class="form-control" id="kelas" >
                                            <div class="invalid-feedback">Tolong, Masukkan Kelas Anda!</div>
                                        </div>
                                        <div class="col-12" id="siswaForm4" style="display: none;">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" >
                                            <div class="invalid-feedback">Tolong, Masukkan Alamat Anda!</div>
                                        </div>
                                        <div class="col-12" id="siswaForm5" style="display: none;">
                                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" >
                                            <div class="invalid-feedback">Tolong, Masukkan Tanggal Lahir Anda!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="sandi" class="form-label">Sandi</label>
                                            <input type="password" name="sandi" class="form-control" id="sandi" required>
                                            <div class="invalid-feedback">Masukan Sandi Anda</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="sandikonfirmasi" class="form-label">Sandi konfirmasi</label>
                                            <input type="password" name="sandikonfirmasi" class="form-control" id="sandikonfirmasi" required>
                                            <div class="invalid-feedback">Masukan Sandi konfirmasi Anda</div>
                                        </div>
                                        <!-- Tombol dan tautan -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Buat Akun</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Sudah Punya akun ? <a href="autentikasi">Masuk</a></p>
                                        </div>
                                    </form>

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
    <script src="assets/dashboard/assets//vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/dashboard/assets//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/dashboard/assets//vendor/chart.js/chart.umd.js"></script>
    <script src="assets/dashboard/assets//vendor/echarts/echarts.min.js"></script>
    <script src="assets/dashboard/assets//vendor/quill/quill.min.js"></script>
    <script src="assets/dashboard/assets//vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/dashboard/assets//vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/dashboard/assets//vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/dashboard/assets//js/main.js"></script>

    <script>
        // Tambahkan event listener untuk mengubah formulir berdasarkan tipe pendaftaran
        document.getElementById('registrationType').addEventListener('change', function() {
            var registrationType = this.value;

            // Sembunyikan/munculkan formulir tambahan berdasarkan tipe pendaftaran
            document.getElementById('siswaForm').style.display = registrationType === 'siswa' ? 'block' : 'none';
            document.getElementById('siswaForm2').style.display = registrationType === 'siswa' ? 'block' : 'none';
            document.getElementById('siswaForm3').style.display = registrationType === 'siswa' ? 'block' : 'none';
            document.getElementById('siswaForm4').style.display = registrationType === 'siswa' ? 'block' : 'none';
            document.getElementById('siswaForm5').style.display = registrationType === 'siswa' ? 'block' : 'none';
            document.getElementById('orangtuaForm').style.display = registrationType === 'orangtua' ? 'block' : 'none';
            document.getElementById('orangtuaForm2').style.display = registrationType === 'orangtua' ? 'block' : 'none';
            document.getElementById('orangtuaForm3').style.display = registrationType === 'orangtua' ? 'block' : 'none';
            document.getElementById('orangtuaForm4').style.display = registrationType === 'orangtua' ? 'block' : 'none';
            document.getElementById('orangtuaForm5').style.display = registrationType === 'orangtua' ? 'block' : 'none';
            document.getElementById('orangtuaForm6').style.display = registrationType === 'orangtua' ? 'block' : 'none';
        });
    </script>

    <script>
        // Add this script to validate required fields before form submission
        document.querySelector('form').addEventListener('submit', function(event) {
            var registrationType = document.getElementById('registrationType').value;

            if (registrationType === 'siswa') {
                if (!validateSiswaForm()) {
                    event.preventDefault();
                }
            } else if (registrationType === 'orangtua') {
                if (!validateOrangtuaForm()) {
                    event.preventDefault();
                }
            }
        });

        function validateSiswaForm() {
            // Implement validation logic for siswaForm fields
            // Return true if valid, false otherwise
            return true;
        }

        function validateOrangtuaForm() {
            // Implement validation logic for orangtuaForm fields
            // Return true if valid, false otherwise
            return true;
        }
    </script>

</body>

</html>