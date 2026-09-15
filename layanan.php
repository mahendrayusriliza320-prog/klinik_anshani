<?php
$pageTitle = 'Layanan';
require __DIR__ . '/includes/header.php';

page_intro(
    'Layanan Kami',
    'Satu tempat untuk kebutuhan kesehatan yang beragam.',
    'Kami percaya akses kesehatan yang baik dimulai dari informasi yang jelas. Pilih layanan untuk menemukan yang paling sesuai dengan kebutuhan Anda.'
);
?>

<section class="section">
    <div class="container">

        <?php render_category_cards(); ?>

        <div class="notice">
            <?= icon('shield') ?>
            <p>
                Setiap layanan diberikan sesuai kebutuhan dan hasil penilaian tenaga kesehatan.
                Untuk informasi lebih lanjut mengenai layanan, persiapan, biaya, atau jadwal,
                silakan konsultasikan terlebih dahulu dengan Klinik Anshani.
            </p>
        </div>

    </div>
</section>

<?php
render_cta();
require __DIR__ . '/includes/footer.php';
?>