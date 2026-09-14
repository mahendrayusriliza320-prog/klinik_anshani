</main>
<footer class="site-footer"><div class="container">
    <div class="footer-grid">
        <div><a class="brand footer-brand" href="index.php"><span class="brand-mark"><?= icon('cross') ?></span><span>Klinik <strong>Anshani</strong></span></a><p>Pelayanan kesehatan yang mengutamakan kenyamanan, privasi, dan kemudahan akses.</p></div>
        <nav aria-label="Menu cepat footer"><h2>Menu cepat</h2><ul><?php foreach ($navigation as $path => $label): ?><li><a href="<?= e($path) ?>"><?= e($label) ?></a></li><?php endforeach; ?></ul></nav>
        <div><h2>Kontak</h2><p>Informasi layanan dan jadwal kunjungan</p><a class="footer-wa" href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>" target="_blank" rel="noopener noreferrer"><?= icon('chat') ?><span>WhatsApp<strong><?= e($clinic['whatsapp_display']) ?></strong></span><?= icon('arrow') ?></a></div>
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
