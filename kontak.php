<?php
$pageTitle = 'Kontak';
require __DIR__ . '/includes/header.php';

page_intro(
    'Kontak',
    'Kami siap membantu Anda.',
    'Punya pertanyaan tentang layanan, biaya, atau jadwal kunjungan? Hubungi Klinik Anshani dan konsultasikan kebutuhan Anda dengan mudah.'
);
?>

<section class="section section-tint">
    <div class="container booking-layout">

        <div>
            <p class="eyebrow">RESERVASI & KONSULTASI</p>

            <h2>
                Konsultasikan kebutuhan<br>
                kesehatan Anda.
            </h2>

            <p>
                Tim Klinik Anshani siap membantu memberikan informasi mengenai
                layanan, biaya, persiapan pemeriksaan, dan jadwal kunjungan.
            </p>

            <a
                class="button"
                href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>?text=<?= urlencode('Halo Klinik Anshani, saya ingin konsultasi.') ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                <?= icon('chat') ?>
                WhatsApp <?= e($clinic['whatsapp_display']) ?>
            </a>

            <div class="notice">
                <p>
                    Reservasi dan jadwal kunjungan akan dikonfirmasi
                    oleh tim Klinik Anshani melalui WhatsApp.
                </p>
            </div>
        </div>

        <div class="form-card">
            <h3>Form Reservasi & Konsultasi</h3>
            <?php render_booking_form('contact'); ?>
        </div>

    </div>
</section>

<?php
render_location();
render_cta();
require __DIR__ . '/includes/footer.php';
?>