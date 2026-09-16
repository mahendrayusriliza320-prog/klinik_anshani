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
                        <div class="contact-social">
                <a href="<?= e($clinic['instagram']) ?>"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="Instagram Klinik Anshani"
                   title="Instagram @klinikanshani">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="5"></rect>
                        <circle cx="12" cy="12" r="4"></circle>
                        <circle cx="17.5" cy="6.5" r="1"></circle>
                    </svg>
                </a>

                <a href="<?= e($clinic['tiktok']) ?>"
                   target="_blank"
                   rel="noopener noreferrer"
                   aria-label="TikTok Klinik Anshani"
                   title="TikTok @klinikanshani">

                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M14 4v10.2a4.2 4.2 0 1 1-3.5-4.14v2.2a2.1 2.1 0 1 0 1.4 1.98V4h2.1c.3 2 1.6 3.5 3.9 3.8V10A6.5 6.5 0 0 1 14 8.5V4z"></path>
                    </svg>
                </a>
            </div>
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