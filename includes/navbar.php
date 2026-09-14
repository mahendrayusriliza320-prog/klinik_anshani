<header class="site-header">
    <nav class="container navbar" aria-label="Navigasi utama">
        <a class="brand" href="index.php" aria-label="Klinik Anshani — Home"><span class="brand-mark"><?= icon('cross') ?></span><span>Klinik <strong>Anshani</strong><small>KESEHATAN & KENYAMANAN</small></span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="nav-menu" aria-label="Buka menu navigasi"><span></span><span></span><span></span></button>
        <div id="nav-menu" class="nav-menu">
            <?php foreach ($navigation as $path => $label): ?><a href="<?= e($path) ?>" <?= $currentPage === $path ? 'aria-current="page"' : '' ?>><?= e($label) ?></a><?php endforeach; ?>
            <button class="button button-small" type="button" data-book>Daftar / Konsultasi <?= icon('arrow') ?></button>
        </div>
    </nav>
</header>
