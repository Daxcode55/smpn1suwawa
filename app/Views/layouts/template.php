<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('styles/output.css') ?>">
    <link rel="stylesheet" href="<?= base_url('src/css/style.css') ?>">
    <title><?= $title; ?></title>
</head>

<body>

    <h1>ini header</h1>
    <?= $this->include('layouts/navbar'); ?>

    <?= $this->renderSection('content'); ?>


    <footer>
        <h1 class="text-primary">ini footer</h1>
    </footer>

</body>

</html>