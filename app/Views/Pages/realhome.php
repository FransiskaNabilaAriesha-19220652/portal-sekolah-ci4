
<!-- app/Views/pages -->
<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?>
Halaman real home
<?= $this->endSection() ?>

<?= $this->section('meta_description') ?>
home
<?= $this->endSection() ?>

<?= $this->section('add_head') ?>

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Contoh di dalam tampilan -->
<?php if (session()->get('user_level') === "1"): ?>
    <h1>Selamat datang, siswa!</h1>
    <a href="<?php echo base_url('logout'); ?>">Logout</a>
<?php elseif(session()->get('user_level') === "2"): ?>
    <h1>Selamat datang, orang tua!</h1>
    <a href="<?php echo base_url('logout'); ?>">Logout</a>
<?php elseif(session()->get('user_level') === "3"): ?>
    <h1>Selamat datang, guru!</h1>
    <a href="<?php echo base_url('logout'); ?>">Logout</a>
<?php else: ?>
    <h1>Selamat datang, tanpa sesi!</h1>
    <a href="<?php echo base_url('logout'); ?>">Logout</a>
<?php endif; ?>




<?= $this->endSection() ?>