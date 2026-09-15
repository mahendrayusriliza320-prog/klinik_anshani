<?php
$pageTitle = 'Pricelist';
require __DIR__ . '/includes/header.php';

page_intro(
    'Pricelist',
    'Informasi biaya yang jelas untuk setiap kebutuhan.',
    'Kami percaya informasi yang jelas membantu Anda merencanakan perawatan dengan lebih nyaman. Temukan layanan dan lihat kisaran biaya sebelum melakukan reservasi atau konsultasi.'
);
?>

<section class="section price-section">
    <div class="container">

        <div class="price-tools">
            <div class="field">
                <label for="price-search">Cari layanan</label>
                <input
                    id="price-search"
                    type="search"
                    placeholder="Cari HIV, fisioterapi, vitamin..."
                >
            </div>

            <div class="field">
                <label for="price-category">Kategori layanan</label>
                <select id="price-category">
                    <option value="all">Semua kategori</option>

                    <?php foreach ($categories as $id => $category): ?>
                        <option value="<?= e($id) ?>">
                            <?= e($category['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <p
            id="price-result-count"
            class="muted"
            role="status"
            aria-live="polite"
        >
            <?= count($services) ?> layanan tersedia
        </p>

        <?php render_prices(); ?>

        <div id="price-empty" class="empty-state" hidden>
            <h2>Layanan tidak ditemukan.</h2>
            <p>
                Coba gunakan kata kunci lain atau pilih kategori layanan yang berbeda.
            </p>
            <button
                type="button"
                id="price-reset"
                class="button button-outline"
            >
                Tampilkan Semua Layanan
            </button>
        </div>

    </div>
</section>

<?php
render_cta();
require __DIR__ . '/includes/footer.php';
?>