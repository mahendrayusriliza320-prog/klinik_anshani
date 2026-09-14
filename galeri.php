<?php $pageTitle = 'Galeri'; require __DIR__ . '/includes/header.php'; page_intro('Galeri', 'Lebih dekat dengan Klinik Anshani.', 'Lihat foto dan dokumentasi video klinik. Foto serta video asli akan ditambahkan secara bertahap.'); ?>
<section class="section"><div class="container"><?php section_heading('RUANG & SUASANA', 'Foto Klinik', 'Klik foto untuk memperbesar. Geser galeri ke samping pada ponsel.'); render_gallery(); ?></div></section>
<section class="section section-tint"><div class="container"><?php section_heading('DOKUMENTASI', 'Video Klinik', 'Putar video saat dokumentasi tersedia.'); render_videos(); ?></div></section>
<?php render_cta(); require __DIR__ . '/includes/footer.php'; ?>
