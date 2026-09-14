<?php
require_once dirname(__DIR__) . '/config/config.php';
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$pageTitle = $pageTitle ?? 'Layanan Kesehatan';
$metaTitle = $currentPage === 'index.php' ? 'Klinik Anshani | Layanan Kesehatan' : $pageTitle . ' | Klinik Anshani';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#126d64">
    <title><?= e($metaTitle) ?></title>
    <meta name="description" content="<?= e($clinic['description']) ?>">
    <meta property="og:title" content="<?= e($metaTitle) ?>">
    <meta property="og:description" content="<?= e($clinic['description']) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="<?= e($clinic['name']) ?>">
    <?php if ($clinic['site_url'] !== ''): ?>
    <link rel="canonical" href="<?= e(rtrim($clinic['site_url'], '/') . '/' . ($currentPage === 'index.php' ? '' : $currentPage)) ?>">
    <meta property="og:url" content="<?= e(rtrim($clinic['site_url'], '/') . '/' . ($currentPage === 'index.php' ? '' : $currentPage)) ?>">
    <?php endif; ?>
    <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/main.js" defer></script>
</head>
<body>
<a class="skip-link" href="#main">Lewati ke konten utama</a>
<?php require __DIR__ . '/navbar.php'; ?>
<main id="main" tabindex="-1">
