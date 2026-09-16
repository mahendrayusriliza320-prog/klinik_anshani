<?php $pageTitle = 'Layanan Kesehatan'; require __DIR__ . '/includes/header.php'; ?>
<section class="hero" aria-label="Informasi Klinik Anshani" aria-roledescription="carousel">
    <div class="hero-slides">
        <?php foreach ($banners as $i => $banner): ?>
        <article class="hero-slide" <?= $i ? 'hidden' : '' ?> aria-roledescription="slide" aria-label="<?= $i + 1 ?> dari 3">
            <?php if (asset_exists($banner['image'])): ?>
    <picture class="hero-picture">
        <?php if (!empty($banner['mobile_image']) && asset_exists($banner['mobile_image'])): ?>
            <source
                media="(max-width: 768px)"
                srcset="<?= e($banner['mobile_image']) ?>"
            >
        <?php endif; ?>

        <img
            class="hero-background"
            src="<?= e($banner['image']) ?>"
            alt="Banner Klinik Anshani <?= $i + 1 ?>"
            <?= $i ? 'loading="lazy"' : 'fetchpriority="high"' ?>
        >
    </picture>
<?php endif; ?>
            <div class="container hero-layout"><div class="hero-copy"><p class="eyebrow"><?= e($banner['label']) ?></p><?php $heading = $i === 0 ? 'h1' : 'h2'; ?><<?= $heading ?>><?= e($banner['title']) ?></<?= $heading ?>><p class="hero-description"><?= e($banner['text']) ?></p><div class="button-row"><button type="button" class="button" data-book>Daftar / Konsultasi <?= icon('arrow') ?></button><a class="button button-outline" href="layanan.php">Jelajahi Layanan</a></div><p class="hero-note"><?= icon('shield') ?>Nyaman berkonsultasi. Mudah merencanakan kunjungan.</p></div>
            <?php if (!asset_exists($banner['image'])): ?><div class="hero-placeholder" role="img" aria-label="Placeholder Banner Klinik <?= $i + 1 ?>"><div class="placeholder-top"><span>KLINIK ANSHANI</span><span>0<?= $i + 1 ?></span></div><div class="placeholder-center"><?= icon('photo') ?><p>Banner Klinik <?= $i + 1 ?></p><span>Ruang untuk foto klinik Anda</span></div><div class="placeholder-bottom"><span>PELAYANAN KESEHATAN</span><span>ANSHANI</span></div></div><?php endif; ?>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
    <div class="container hero-controls"><div class="hero-pagination" aria-label="Pilih banner"><?php foreach ($banners as $i => $_): ?><button type="button" class="slider-dot" data-slide="<?= $i ?>" aria-label="Tampilkan banner <?= $i + 1 ?>" aria-pressed="<?= $i === 0 ? 'true' : 'false' ?>"></button><?php endforeach; ?></div><span class="slide-number" aria-live="off">01 / 03</span><div class="slider-buttons"><button class="icon-button" id="slider-prev" type="button" aria-label="Banner sebelumnya">&larr;</button><button class="icon-button" id="slider-next" type="button" aria-label="Banner berikutnya">&rarr;</button></div></div>
</section>
<div class="quick-strip container">
    <a href="layanan.php">
        <?= icon('lab') ?>
        <span>Layanan kesehatan<strong>Lihat layanan kami</strong></span>
        <?= icon('arrow') ?>
    </a>
    <a href="pricelist.php">
        <?= icon('price') ?>
        <span>Informasi biaya<strong>Lihat pricelist lengkap</strong></span>
        <?= icon('arrow') ?>
    </a>
    <a href="kontak.php">
        <?= icon('chat') ?>
        <span>Reservasi & konsultasi<strong><?= e($clinic['whatsapp_display']) ?></strong></span>
        <?= icon('arrow') ?>
    </a>
</div>

<section class="section">
    <div class="container intro-grid">
        <div>
            <p class="eyebrow">TENTANG KLINIK ANSHANI</p>
            <h2>Pelayanan kesehatan<br>untuk Anda dan keluarga.</h2>
        </div>
        <div>
            <p class="intro-text">
                Klinik Anshani hadir untuk memberikan pelayanan kesehatan yang nyaman,
                mudah diakses, dan sesuai dengan kebutuhan Anda. Kami menyediakan
                berbagai layanan pemeriksaan, konsultasi, dan perawatan kesehatan.
            </p>
            <a class="text-link" href="tentang.php">
                Kenali Klinik Anshani <?= icon('arrow') ?>
            </a>
        </div>
    </div>
</section>

<section class="section section-tint">
    <div class="container">
        <?php
        section_heading(
            'LAYANAN KAMI',
            'Layanan kesehatan sesuai kebutuhan Anda',
            'Temukan berbagai pilihan pemeriksaan, konsultasi, dan pelayanan kesehatan di Klinik Anshani.',
            'layanan.php',
            'Lihat semua layanan'
        );
        render_category_cards(6);
        ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        section_heading(
            'INFORMASI BIAYA',
            'Informasi layanan dan biaya',
            'Lihat informasi biaya layanan untuk membantu Anda mempersiapkan kunjungan ke Klinik Anshani.',
            'pricelist.php',
            'Lihat pricelist'
        );
        render_prices(true);
        ?>
    </div>
</section>

<section class="section section-tint">
    <div class="container">
        <?php
        section_heading(
            'KLINIK ANSHANI',
            'Galeri Klinik',
            'Lihat fasilitas dan suasana Klinik Anshani sebelum Anda berkunjung.',
            'galeri.php',
            'Lihat galeri'
        );
        render_gallery();
        ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        section_heading(
            'MENGENAL KLINIK ANSHANI',
            'Video Klinik',
            'Kenali lebih dekat Klinik Anshani melalui dokumentasi kegiatan dan pelayanan kami.'
        );
        render_videos();
        ?>
    </div>
</section>

<section class="section section-tint">
    <div class="container">
        <?php
        section_heading(
            'PELAYANAN KAMI',
            'Mengapa Memilih Klinik Anshani?',
            'Kami berupaya memberikan pelayanan kesehatan yang nyaman dan mudah bagi setiap pasien.'
        );
        render_advantages();
        ?>
    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        section_heading(
            'RESERVASI & KONSULTASI',
            'Cara Daftar',
            'Ikuti langkah sederhana berikut untuk merencanakan kunjungan Anda.'
        );
        ?>

        <ol class="steps">
            <?php foreach ($steps as $i => $step): ?>
                <li>
                    <span>0<?= $i + 1 ?></span>
                    <h3><?= e($step) ?></h3>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>

<section class="section section-tint" id="pendaftaran">
    <div class="container booking-layout">
        <div>
            <p class="eyebrow">RESERVASI KLINIK</p>
            <h2>Rencanakan<br>kunjungan Anda.</h2>

            <p>
                Pilih layanan dan waktu kunjungan yang Anda inginkan.
                Tim Klinik Anshani akan membantu mengonfirmasi jadwal melalui WhatsApp.
            </p>

            <div class="booking-callout">
                <?= icon('chat') ?>
                <span>
                    Butuh informasi atau ingin konsultasi?
                    <a
                        href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>?text=<?= urlencode('Halo Klinik Anshani, saya ingin konsultasi.') ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        WhatsApp <?= e($clinic['whatsapp_display']) ?>
                    </a>
                </span>
            </div>
        </div>

        <div class="form-card">
            <h3>Form Reservasi & Konsultasi</h3>
            <?php render_booking_form('home'); ?>
        </div>
    </div>
</section>
<?php render_location(); render_cta(); require __DIR__ . '/includes/footer.php'; ?>
