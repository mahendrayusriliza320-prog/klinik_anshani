<?php
// Komponen reusable untuk menghindari duplikasi isi antarhalaman.
function section_heading(string $eyebrow, string $title, string $description = '', string $link = '', string $label = ''): void { ?>
    <div class="section-heading"><div><p class="eyebrow"><?= e($eyebrow) ?></p><h2><?= e($title) ?></h2><?php if ($description): ?><p class="muted"><?= e($description) ?></p><?php endif; ?></div><?php if ($link): ?><a class="text-link" href="<?= e($link) ?>"><?= e($label) ?> <?= icon('arrow') ?></a><?php endif; ?></div>
<?php }

function page_intro(string $label, string $title, string $text): void { ?>
    <section class="page-intro"><div class="container"><p class="breadcrumb"><a href="index.php">Home</a> <span aria-hidden="true">/</span> <?= e($label) ?></p><p class="eyebrow">KLINIK ANSHANI</p><h1><?= e($title) ?></h1><p><?= e($text) ?></p></div></section>
<?php }

function render_category_cards(?int $limit = null): void {
    global $categories;
    $items = $limit ? array_slice($categories, 0, $limit, true) : $categories; ?>
    <div class="service-grid"><?php foreach ($items as $id => $category): ?>
        <article class="service-card" id="<?= e($id) ?>"><span class="service-icon"><?= icon($category['icon']) ?></span><h3><?= e($category['name']) ?></h3><p><?= e($category['description']) ?></p>
            <div class="service-actions"><button type="button" class="text-link" data-detail data-title="<?= e($category['name']) ?>" data-description="<?= e($category['detail']) ?>" data-category="<?= e($id) ?>">Lihat Detail <?= icon('arrow') ?></button><button type="button" class="button button-soft" data-book="category:<?= e($id) ?>">Pilih Layanan</button></div>
        </article><?php endforeach; ?>
    </div>
<?php }

function render_prices(bool $preview = false): void {
    global $services, $featuredServices, $categories;
    if ($preview) {
        $items = array_values(array_filter($services, fn($item) => in_array($item['id'], $featuredServices, true)));
        echo '<div class="price-preview">';
        foreach ($items as $item) { ?>
            <article class="price-card"><span class="tag"><?= e($item['category']) ?></span><h3><?= e($item['name']) ?></h3><p class="price"><?= rupiah($item['price']) ?></p><button type="button" class="button button-outline" data-book="<?= e($item['id']) ?>" aria-label="Pilih <?= e($item['name']) ?>">Pilih Layanan <?= icon('arrow') ?></button></article>
        <?php } echo '</div>'; return;
    }
    foreach ($categories as $id => $category) {
        $items = array_filter($services, fn($item) => $item['category_id'] === $id); ?>
        <section class="price-group" id="harga-<?= e($id) ?>" data-price-group="<?= e($id) ?>"><div class="price-group-heading"><?= icon($category['icon']) ?><h2><?= e($category['name']) ?></h2><span><?= count($items) ?> pilihan</span></div>
            <table class="price-table"><caption class="sr-only">Harga <?= e($category['name']) ?></caption><thead><tr><th scope="col">Nama layanan</th><th scope="col">Harga referensi</th><th scope="col"><span class="sr-only">Pilih layanan</span></th></tr></thead><tbody>
            <?php foreach ($items as $item): ?><tr data-price-item data-search="<?= e(strtolower($item['name'] . ' ' . $category['name'])) ?>"><th scope="row"><?= e($item['name']) ?><?php if ($item['note']): ?><small><?= e($item['note']) ?></small><?php endif; ?></th><td class="price-cell"><?= rupiah($item['price']) ?></td><td><button type="button" class="button button-soft button-small" data-book="<?= e($item['id']) ?>" aria-label="Pilih <?= e($item['name']) ?>">Pilih Layanan</button></td></tr><?php endforeach; ?>
            </tbody></table>
        </section>
    <?php }
}

function render_gallery(): void {
    global $gallery; ?>
    
    <div class="gallery-grid" aria-label="Galeri foto Klinik Anshani">
        <?php foreach ($gallery as $i => $item): 
            $exists = asset_exists($item['image']); 
        ?>
        
        <button
            type="button"
            class="gallery-card"
            data-gallery="<?= $i ?>"
            data-src="<?= e(photo_source($item['image'])) ?>"
            data-title=""
            data-placeholder="<?= $exists ? 'false' : 'true' ?>"
            aria-label="Perbesar foto Klinik Anshani"
        >
            <img
                src="<?= e(photo_source($item['image'])) ?>"
                alt="Foto Klinik Anshani"
                loading="lazy"
                width="720"
                height="540"
            >

            <?php if (!$exists): ?>
                <span class="placeholder-caption">
                    <?= icon('photo') ?>
                    <small>Foto akan segera ditambahkan</small>
                </span>
            <?php endif; ?>

        </button>

        <?php endforeach; ?>
    </div>

<?php }

function render_videos(): void {
    global $videos; ?>
    <div class="video-grid"><?php foreach ($videos as $item): ?><article class="video-card">
        <?php if (asset_exists($item['file'])): ?><video controls playsinline preload="none" poster="<?= e(photo_source($item['poster'])) ?>" aria-label="<?= e($item['title']) ?>"><source src="<?= e($item['file']) ?>" type="video/mp4">Browser Anda tidak mendukung video. <a href="<?= e($item['file']) ?>">Unduh video</a>.</video><?php else: ?><div class="video-placeholder"><?= icon('play') ?><span><?= e($item['title']) ?></span><small>Video akan segera tersedia</small></div><?php endif; ?>
    </article><?php endforeach; ?></div>
<?php }

function render_advantages(): void {
    global $advantages; ?>
    <div class="advantages-grid"><?php foreach ($advantages as $item): ?><article><?= icon($item['icon']) ?><h3><?= e($item['title']) ?></h3><p><?= e($item['text']) ?></p></article><?php endforeach; ?></div>
<?php }

function render_booking_form(string $prefix): void {
    global $clinic, $categories, $services; ?>
    <form class="booking-form" data-whatsapp="<?= e($clinic['whatsapp_number']) ?>" novalidate>
        <div class="form-grid">
            <div class="field"><label for="<?= e($prefix) ?>-name">Nama Lengkap <span aria-hidden="true">*</span></label><input id="<?= e($prefix) ?>-name" name="name" autocomplete="name" maxlength="100" required placeholder="Nama lengkap Anda" aria-describedby="<?= e($prefix) ?>-name-error"><small class="field-error" id="<?= e($prefix) ?>-name-error" data-error="name"></small></div>
            <div class="field"><label for="<?= e($prefix) ?>-phone">Nomor WhatsApp <span aria-hidden="true">*</span></label><input id="<?= e($prefix) ?>-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" maxlength="24" required placeholder="Contoh: 08xxxxxxxxxx" aria-describedby="<?= e($prefix) ?>-phone-error"><small class="field-error" id="<?= e($prefix) ?>-phone-error" data-error="phone"></small></div>
            <div class="field field-full"><label for="<?= e($prefix) ?>-service">Layanan <span aria-hidden="true">*</span></label><select id="<?= e($prefix) ?>-service" name="service" required aria-describedby="<?= e($prefix) ?>-service-error"><option value="">Pilih layanan yang Anda butuhkan</option><option value="konsultasi-umum">Konsultasi layanan umum</option>
                <?php foreach ($categories as $id => $category): ?><optgroup label="<?= e($category['name']) ?>"><option value="category:<?= e($id) ?>">Konsultasi <?= e($category['name']) ?></option><?php foreach ($services as $item): if ($item['category_id'] !== $id) continue; ?><option value="<?= e($item['id']) ?>"><?= e($item['name']) ?> — <?= rupiah($item['price']) ?></option><?php endforeach; ?></optgroup><?php endforeach; ?>
            </select><small class="field-error" id="<?= e($prefix) ?>-service-error" data-error="service"></small></div>
            <div class="field"><label for="<?= e($prefix) ?>-date">Tanggal Rencana Kunjungan</label><input id="<?= e($prefix) ?>-date" name="date" type="date" aria-describedby="<?= e($prefix) ?>-date-error"><small class="field-error" id="<?= e($prefix) ?>-date-error" data-error="date"></small></div>
            <div class="field"><label for="<?= e($prefix) ?>-time">Jam Kunjungan</label><input id="<?= e($prefix) ?>-time" name="time" type="time"></div>
            <div class="field field-full"><label for="<?= e($prefix) ?>-notes">Catatan <span class="optional">(opsional)</span></label><textarea id="<?= e($prefix) ?>-notes" name="notes" rows="3" maxlength="1000" placeholder="Pertanyaan atau kebutuhan kunjungan Anda"></textarea></div>
        </div>
        <p class="form-note"><?= icon('lock') ?>Data form tidak disimpan di website. Pesan diteruskan ke WhatsApp saat Anda melanjutkan.</p>
        <p class="form-status" role="status" aria-live="polite"></p>
        <button type="submit" class="button button-full"><?= icon('chat') ?>Lanjut ke WhatsApp <?= icon('arrow') ?></button>
        <a class="whatsapp-fallback text-link" target="_blank" rel="noopener noreferrer" hidden>Buka WhatsApp jika tab baru belum terbuka <?= icon('arrow') ?></a>
        <p class="form-footnote">* Wajib diisi. Jadwal belum menjadi reservasi sampai dikonfirmasi klinik.</p>
    </form>
<?php }

function render_location(): void {
    global $clinic;
    $mapUrl = $clinic['maps_fallback']; ?>
    
    <section class="section" id="lokasi">
        <div class="container">
            <?php section_heading(
                'TEMUKAN KAMI',
                'Lokasi Klinik Anshani',
                'Kunjungi Klinik Anshani atau hubungi kami untuk reservasi dan konsultasi.'
            ); ?>

            <div class="location-info">

                <div>
                    <?= icon('chat') ?>
                    <div>
                        <h3>Reservasi & konsultasi</h3>
                        <a href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>?text=<?= urlencode('Halo Klinik Anshani, saya ingin konsultasi.') ?>"
                           target="_blank"
                           rel="noopener noreferrer">
                            WhatsApp <?= e($clinic['whatsapp_display']) ?>
                        </a>
                    </div>
                </div>

                <div>
                    <?= icon('pin') ?>
                    <div>
                        <h3>Alamat klinik</h3>
                        <a href="<?= e($clinic['maps_link']) ?>"
                           target="_blank"
                           rel="noopener noreferrer">
                            <?= e($clinic['address']) ?>
                        </a>
                    </div>
                </div>

                <div>
                    <?= icon('clock') ?>
                    <div>
                        <h3>Jam operasional</h3>
                        <p><?= e(str_replace(' | ', ' · ', $clinic['opening_hours'])) ?></p>
                    </div>
                </div>

            </div>

            <iframe
                class="map-frame"
                title="Google Maps - Lokasi Klinik Anshani"
                src="<?= e($mapUrl) ?>"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

            <div class="map-actions">
                <span>Geser atau perbesar peta untuk melihat lokasi sekitar.</span>
                <a class="button button-outline"
                   href="<?= e($clinic['maps_link']) ?>"
                   target="_blank"
                   rel="noopener noreferrer">
                    Buka di Google Maps <?= icon('arrow') ?>
                </a>
            </div>
        </div>
    </section>

<?php }

function render_cta(): void {
    global $clinic; ?>
    <section class="cta-section"><div class="container cta-panel"><div><p class="eyebrow">KAMI SIAP MEMBANTU</p><h2>Ada yang ingin ditanyakan?</h2><p>Diskusikan pilihan layanan dan rencanakan kunjungan Anda bersama Klinik Anshani.</p></div><a class="button button-light" href="https://wa.me/<?= e($clinic['whatsapp_number']) ?>" target="_blank" rel="noopener noreferrer"><?= icon('chat') ?>Chat melalui WhatsApp</a></div></section>
<?php }
