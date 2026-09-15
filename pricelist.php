<?php $pageTitle = 'Pricelist'; require __DIR__ . '/includes/header.php'; page_intro('Pricelist', 'Informasi biaya, lebih jelas.', 'Temukan layanan, pelajari harga referensi, lalu rencanakan kunjungan melalui WhatsApp.'); ?>
<section class="section price-section"><div class="container">
    <div class="price-tools"><div class="field"><label for="price-search">Cari layanan</label><input id="price-search" type="search" placeholder="Cari HIV, fisioterapi, vitamin..."></div><div class="field"><label for="price-category">Kategori layanan</label><select id="price-category"><option value="all">Semua kategori</option><?php foreach ($categories as $id => $category): ?><option value="<?= e($id) ?>"><?= e($category['name']) ?></option><?php endforeach; ?></select></div></div>
    <p id="price-result-count" class="muted" role="status" aria-live="polite"><?= count($services) ?> layanan tersedia</p>
    <?php render_prices(); ?>
    <div id="price-empty" class="empty-state" hidden><h2>Layanan tidak ditemukan.</h2><p>Coba kata kunci lain atau tampilkan semua kategori.</p><button type="button" id="price-reset" class="button button-outline">Reset pencarian</button></div>
</div></section>
<?php render_cta(); require __DIR__ . '/includes/footer.php'; ?>
