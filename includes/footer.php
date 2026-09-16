</main>
<footer class="site-footer"><div class="container">
    <div class="footer-grid">
        <div>
    <a class="brand footer-brand footer-logo" href="index.php" aria-label="Klinik Anshani - Home">
        <img
    src="assets/images/logo-klinik-anshani-footer.png"
    alt="Klinik Anshani"
    class="footer-logo-image"
        >
    </a>

    <p>Pelayanan kesehatan yang mengutamakan kenyamanan, privasi, dan kemudahan akses.</p>
</div>
        <nav aria-label="Menu cepat footer"><h2>Menu cepat</h2><ul><?php foreach ($navigation as $path => $label): ?><li><a href="<?= e($path) ?>"><?= e($label) ?></a></li><?php endforeach; ?></ul></nav>
        <div>
    <h2>Kontak</h2>
    <p>Informasi layanan dan jadwal kunjungan</p>

    <a class="footer-wa"
       href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>"
       target="_blank"
       rel="noopener noreferrer">
        <?= icon('chat') ?>
        <span>
            WhatsApp
            <strong><?= e($clinic['whatsapp_display']) ?></strong>
        </span>
        <?= icon('arrow') ?>
    </a>

    <div class="footer-social">

    <!-- Instagram -->
    <a href="<?= e($clinic['instagram']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="Instagram Klinik Anshani" title="Instagram">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <rect x="3" y="3" width="18" height="18" rx="5"></rect>
            <circle cx="12" cy="12" r="4"></circle>
            <circle cx="17.5" cy="6.5" r="1"></circle>
        </svg>
    </a>

    <!-- TikTok -->
    <a href="<?= e($clinic['tiktok']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="TikTok Klinik Anshani" title="TikTok">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14 4v10.2a4.2 4.2 0 1 1-3.5-4.14v2.2a2.1 2.1 0 1 0 1.4 1.98V4h2.1c.3 2 1.6 3.5 3.9 3.8V10A6.5 6.5 0 0 1 14 8.5V4z"></path>
        </svg>
    </a>

    <!-- YouTube -->
    <a href="<?= e($clinic['youtube']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="YouTube Klinik Anshani" title="YouTube">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <rect x="3" y="6" width="18" height="12" rx="4"></rect>
            <path d="M10 9l5 3-5 3z"></path>
        </svg>
    </a>

    <!-- Facebook -->
    <a href="<?= e($clinic['facebook']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="Facebook Klinik Anshani" title="Facebook">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M14 8h3V4h-3c-3 0-5 2-5 5v3H6v4h3v8h4v-8h3l1-4h-4V9c0-.7.3-1 1-1z"></path>
        </svg>
    </a>

    <!-- LinkedIn -->
    <a href="<?= e($clinic['linkedin']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="LinkedIn Klinik Anshani" title="LinkedIn">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <rect x="4" y="9" width="4" height="11"></rect>
            <circle cx="6" cy="5.5" r="2"></circle>
            <path d="M11 9h4v2c1-1.5 2.4-2.3 4-2.3 3 0 4 2 4 5V20h-4v-5.5c0-1.5-.5-2.5-1.8-2.5-1.5 0-2.2 1-2.2 3V20h-4z"></path>
        </svg>
    </a>

    <!-- SnackVideo -->
    <a href="<?= e($clinic['snackvideo']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="SnackVideo Klinik Anshani" title="SnackVideo">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <circle cx="12" cy="12" r="9"></circle>
            <path d="M10 8l6 4-6 4z"></path>
        </svg>
    </a>

    <!-- Shopee -->
    <a href="<?= e($clinic['shopee']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="Shopee Klinik Anshani" title="Shopee">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M6 8h12l1 12H5L6 8z"></path>
            <path d="M9 8V6a3 3 0 0 1 6 0v2"></path>
            <path d="M14.5 11c-.5-.5-1.2-.8-2.2-.8-1.3 0-2.3.7-2.3 1.7 0 2.5 4.5 1.3 4.5 3.6 0 1-.9 1.8-2.4 1.8-1 0-1.8-.3-2.5-.9"></path>
        </svg>
    </a>

    <!-- X -->
    <a href="<?= e($clinic['x']) ?>" target="_blank" rel="noopener noreferrer"
       aria-label="X Klinik Anshani" title="X">
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M5 4l14 16M19 4L5 20"></path>
        </svg>
    </a>

</div>
</div>
    </div>
    <div class="footer-bottom"><p>© <?= date('Y') ?> Yusril Iza Mahendra Hasibuan. All rights reserved.</p><a href="#main">Kembali ke atas ↑</a></div>
</div></footer>
<a class="floating-wa" href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>" target="_blank" rel="noopener noreferrer" aria-label="Hubungi Klinik Anshani melalui WhatsApp" title="Chat WhatsApp Klinik Anshani"><?= icon('chat') ?><span class="floating-tooltip">Chat WhatsApp</span></a>
<?php require __DIR__ . '/whatsapp-modal.php'; ?>
<dialog id="lightbox" class="lightbox" aria-labelledby="lightbox-title">
    <div class="dialog-top"><h2 id="lightbox-title">Foto Klinik</h2><button type="button" class="icon-button" data-close aria-label="Tutup foto">×</button></div>
    <div class="lightbox-media"><img id="lightbox-image" src="assets/images/placeholders/clinic.svg" alt="Placeholder foto klinik"><p id="lightbox-placeholder" class="media-label">Foto klinik belum tersedia</p></div>
    <div class="lightbox-controls"><button type="button" class="button button-outline" id="photo-prev" aria-label="Foto sebelumnya">← Sebelumnya</button><span id="photo-count" aria-live="polite"></span><button type="button" class="button button-outline" id="photo-next" aria-label="Foto berikutnya">Berikutnya →</button></div>
</dialog>
<dialog id="service-detail" class="dialog" aria-labelledby="detail-title"><div class="dialog-top"><p class="eyebrow">INFORMASI LAYANAN</p><button type="button" class="icon-button" data-close aria-label="Tutup detail layanan">×</button></div><h2 id="detail-title"></h2><p id="detail-description"></p><div class="button-row"><a class="button button-outline" id="detail-price" href="pricelist.php">Lihat Pricelist</a><button type="button" class="button" id="detail-book">Pilih Layanan</button></div></dialog>
<noscript><div class="noscript-note">Aktifkan JavaScript untuk slider, galeri interaktif, dan form. Anda tetap dapat menghubungi <a href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>">WhatsApp klinik</a>.</div></noscript>
</body>
</html>
