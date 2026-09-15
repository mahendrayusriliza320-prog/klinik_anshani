<?php
$pageTitle = 'Galeri';
require __DIR__ . '/includes/header.php';

page_intro(
    'Galeri',
    'Lebih dekat dengan Klinik Anshani.',
    'Kenali suasana, fasilitas, dan pelayanan Klinik Anshani melalui galeri foto dan video kami.'
);
?>

<section class="section">
    <div class="container">
        <?php
        section_heading(
            'RUANG & SUASANA',
            'Lihat lebih dekat Klinik Anshani',
            'Kenali lingkungan dan suasana Klinik Anshani sebelum Anda berkunjung.'
        );

        render_gallery();
        ?>
    </div>
</section>

<section class="section section-tint">
    <div class="container">
        <?php
        section_heading(
            'DOKUMENTASI KLINIK',
            'Cerita dari Klinik Anshani',
            'Lihat lebih dekat kegiatan, fasilitas, dan pelayanan Klinik Anshani melalui dokumentasi video.'
        );

        render_videos();
        ?>
    </div>
</section>

<?php
render_cta();
require __DIR__ . '/includes/footer.php';
?>