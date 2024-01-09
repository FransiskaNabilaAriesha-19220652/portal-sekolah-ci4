<!-- app/Views/pages -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Halaman Profil
<?= $this->endSection() ?>

<?= $this->section('meta_description') ?>
Profil pengguna CodeIgniter 4
<?= $this->endSection() ?>

<?= $this->section('add_head') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Contoh di dalam tampilan -->
<?php if ($user_level == 'siswa'): ?>
    <!-- Tampilkan konten khusus siswa -->
    <h1>Selamat datang, Siswa!</h1>
<?php elseif ($user_level == 'orang_tua'): ?>
    <!-- Tampilkan konten khusus orang tua -->
    <h1>Selamat datang, Orang Tua!</h1>
<?php elseif ($user_level == 'guru'): ?>
    <!-- Tampilkan konten khusus guru -->
    <h1>Selamat datang, Guru!</h1>
<?php else: ?>
    <!-- Tampilkan konten untuk level lainnya -->
    <h1>Selamat datang!</h1>
<?php endif; ?>


<?= $this->endSection() ?>