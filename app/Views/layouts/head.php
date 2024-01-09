<!-- app/Views/layouts/head.php -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('title') ?></title>
    <!-- Tambahan elemen head khusus untuk halaman profil -->
    <meta name="description" content="<?= $this->renderSection('meta_description') ?? 'Deskripsi default' ?>">
    <?= $this->renderSection('add_head')?>
    <!-- Tambahan elemen head lainnya sesuai kebutuhan -->
</head>
