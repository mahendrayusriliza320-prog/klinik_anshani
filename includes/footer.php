</main>
<footer class="site-footer"><div class="container">
    <div class="footer-grid">
        <div>
    <a class="brand footer-brand footer-logo" href="index.php" aria-label="Klinik Anshani - Home">
        <img
            src="assets/images/logo-klinik-anshani.png"
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
