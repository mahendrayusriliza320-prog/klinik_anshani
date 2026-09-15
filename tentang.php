<?php
$pageTitle = 'Tentang';
require __DIR__ . '/includes/header.php';

page_intro(
    'Tentang',
    'Mengenal Klinik Anshani',
    'Pelayanan kesehatan yang mengutamakan kenyamanan, privasi, dan kemudahan bagi setiap pasien.'
);
?>

<section class="section">
    <div class="container about-grid">

        <div class="about-photo">
            <img
                src="<?= e(photo_source($gallery[0]['image'])) ?>"
                alt="<?= asset_exists($gallery[0]['image']) ? 'Foto Klinik Anshani' : 'Foto Klinik Anshani' ?>"
                width="720"
                height="540"
                loading="lazy"
            >

            <?php if (!asset_exists($gallery[0]['image'])): ?>
                <span class="placeholder-caption">
                    <?= icon('photo') ?>
                    <span>Foto Klinik Anshani</span>
                    <small>Foto akan segera ditambahkan</small>
                </span>
            <?php endif; ?>
        </div>

        <div>
            <p class="eyebrow">TENTANG KAMI</p>

            <h2>Pelayanan kesehatan dengan kenyamanan sebagai prioritas.</h2>

            <p>
                Klinik Anshani hadir untuk memberikan pelayanan kesehatan
                yang nyaman, mudah diakses, dan sesuai dengan kebutuhan Anda.
            </p>

            <p>
                Kami menyediakan berbagai layanan pemeriksaan, konsultasi,
                perawatan, serta layanan kesehatan lainnya dengan tetap
                memperhatikan kenyamanan dan privasi setiap pasien.
            </p>

            <p>
                Untuk memudahkan kunjungan, pasien dapat melihat informasi
                layanan dan biaya serta melakukan reservasi atau konsultasi
                melalui WhatsApp sebelum datang ke klinik.
            </p>
        </div>

    </div>
</section>

<section class="section section-tint">
    <div class="container vision-grid">

        <article class="vision-card">
            <p class="eyebrow">VISI</p>

            <h2>Pelayanan kesehatan yang mudah dijangkau.</h2>

            <p>
                Menjadi tempat pelayanan kesehatan yang nyaman,
                mudah diakses, dan dipercaya oleh masyarakat.
            </p>
        </article>

        <article class="vision-card">
            <p class="eyebrow">MISI</p>

            <h2>Memberikan pelayanan terbaik untuk setiap pasien.</h2>

            <ul class="check-list">
                <li>
                    <?= icon('check') ?>
                    <span>Memberikan pelayanan yang profesional dan berorientasi pada kebutuhan pasien.</span>
                </li>

                <li>
                    <?= icon('check') ?>
                    <span>Menjaga privasi dan kenyamanan dalam setiap proses pelayanan.</span>
                </li>

                <li>
                    <?= icon('check') ?>
                    <span>Memudahkan akses informasi layanan, biaya, dan reservasi kunjungan.</span>
                </li>
            </ul>
        </article>

    </div>
</section>

<section class="section">
    <div class="container">
        <?php
        section_heading(
            'KOMITMEN KAMI',
            'Kenyamanan dan kebutuhan pasien menjadi perhatian kami.',
            'Kami berupaya memberikan pengalaman pelayanan kesehatan yang nyaman, informatif, dan mudah diakses.'
        );

        render_advantages();
        ?>
    </div>
</section>

<?php
render_cta();
require __DIR__ . '/includes/footer.php';
?>