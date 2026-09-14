/* Klinik Anshani Ã¢â‚¬â€ Vanilla JavaScript. Tidak ada penyimpanan data pasien. */
(() => {
    'use strict';
    const $ = (selector, root = document) => root.querySelector(selector);
    const $$ = (selector, root = document) => Array.from(root.querySelectorAll(selector));

    // Sticky navigation and keyboard-friendly mobile menu.
    const menuToggle = $('.menu-toggle');
    const menu = $('#nav-menu');
    function closeMenu(restoreFocus = false) {
        menu?.classList.remove('is-open');
        menuToggle?.setAttribute('aria-expanded', 'false');
        menuToggle?.setAttribute('aria-label', 'Buka menu navigasi');
        if (restoreFocus) menuToggle?.focus();
    }
    menuToggle?.addEventListener('click', () => {
        const isOpen = menu.classList.toggle('is-open');
        menuToggle.setAttribute('aria-expanded', String(isOpen));
        menuToggle.setAttribute('aria-label', isOpen ? 'Tutup menu navigasi' : 'Buka menu navigasi');
    });
    document.addEventListener('keydown', event => {
        if (event.key === 'Escape' && menu?.classList.contains('is-open')) closeMenu(true);
    });
    document.addEventListener('click', event => {
        if (!event.target.closest('.site-header')) closeMenu();
    });
    menu?.addEventListener('click', event => {
        if (event.target.closest('a')) closeMenu();
    });
    window.matchMedia('(min-width: 961px)').addEventListener('change', () => closeMenu());
    const header = $('.site-header');
    const updateHeader = () => header?.classList.toggle('is-scrolled', window.scrollY > 12);
    window.addEventListener('scroll', updateHeader, { passive: true });
    updateHeader();

    // Native dialog traps focus, supports Escape, and makes the background inert.
    const returnFocus = new WeakMap();
    function openDialog(dialog, opener = document.activeElement) {
        if (!dialog) return;
        returnFocus.set(dialog, opener);
        dialog.showModal();
        document.body.classList.add('modal-open');
    }
    $$('dialog').forEach(dialog => {
        dialog.addEventListener('close', () => {
            if (!$('dialog[open]')) document.body.classList.remove('modal-open');
            const opener = returnFocus.get(dialog);
            if (!$('dialog[open]') && opener?.isConnected && opener.getClientRects().length) opener.focus();
        });
        // Close on actual backdrop clicks only; clicks in dialog padding remain safe.
        dialog.addEventListener('click', event => {
            if (event.target !== dialog) return;
            const rect = dialog.getBoundingClientRect();
            if (event.clientX < rect.left || event.clientX > rect.right || event.clientY < rect.top || event.clientY > rect.bottom) dialog.close();
        });
    });

    const booking = $('#booking-modal');
    function clearFormFeedback(form) {
        $$('[data-error]', form).forEach(el => { el.textContent = ''; });
        $$('[aria-invalid]', form).forEach(el => el.removeAttribute('aria-invalid'));
        $('.form-status', form).textContent = '';
        const fallback = $('.whatsapp-fallback', form);
        fallback.hidden = true;
        fallback.removeAttribute('href');
    }
    function openBooking(service = '', opener) {
        closeMenu();
        const form = $('form', booking);
        const select = $('[name="service"]', form);
        select.value = Array.from(select.options).some(option => option.value === service) ? service : '';
        clearFormFeedback(form);
        openDialog(booking, opener);
    }
    let detailCategory = '';
    let detailOpener = null;
    document.addEventListener('click', event => {
        const close = event.target.closest('[data-close]');
        if (close) { close.closest('dialog')?.close(); return; }
        const book = event.target.closest('[data-book]');
        if (book) { openBooking(book.dataset.book, book); return; }
        const detail = event.target.closest('[data-detail]');
        if (detail) {
            detailCategory = detail.dataset.category;
            detailOpener = detail;
            $('#detail-title').textContent = detail.dataset.title;
            $('#detail-description').textContent = detail.dataset.description;
            $('#detail-price').href = 'pricelist.php#harga-' + encodeURIComponent(detailCategory);
            openDialog($('#service-detail'), detail);
        }
    });
    $('#detail-book')?.addEventListener('click', () => {
        $('#service-detail').close();
        openBooking('category:' + detailCategory, detailOpener);
    });

    // Banner: 5-second cycle, wraparound, controls, hover/focus pause, touch swipe.
    const hero = $('.hero');
    if (hero) {
        const slides = $$('.hero-slide', hero);
        const dots = $$('.slider-dot', hero);
        let current = 0;
        let paused = false;
        let hovered = false;
        let focused = false;
        let timer;
        const pauseButton = $('#slider-pause');
        function updatePauseButton() {
            pauseButton.textContent = paused ? 'Ã¢â€“Â·' : 'Ã¢â€¦Â¡';
            pauseButton.setAttribute('aria-label', paused ? 'Lanjutkan pergantian banner' : 'Jeda pergantian banner');
            pauseButton.setAttribute('aria-pressed', String(paused));
        }
        function showSlide(index) {
            current = (index + slides.length) % slides.length;
            slides.forEach((slide, i) => { slide.hidden = i !== current; });
            dots.forEach((dot, i) => dot.setAttribute('aria-pressed', String(i === current)));
            $('.slide-number', hero).textContent = String(current + 1).padStart(2, '0') + ' / ' + String(slides.length).padStart(2, '0');
        }
        function restartTimer() {
            window.clearInterval(timer);
            timer = window.setInterval(() => {
                if (!paused && !document.hidden && !$('dialog[open]')) showSlide(current + 1);
            }, 5000);
        }
        function step(amount) { showSlide(current + amount); restartTimer(); }
        $('#slider-next').addEventListener('click', () => step(1));
        $('#slider-prev').addEventListener('click', () => step(-1));
        dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); restartTimer(); }));
        pauseButton.addEventListener('click', () => { paused = !paused; updatePauseButton(); restartTimer(); });
        hero.addEventListener('pointerenter', event => { if (event.pointerType === 'mouse') hovered = true; });
        hero.addEventListener('pointerleave', () => { hovered = false; restartTimer(); });
        hero.addEventListener('focusin', () => { focused = true; });
        hero.addEventListener('focusout', event => { focused = hero.contains(event.relatedTarget); if (!focused) restartTimer(); });
        let startX = 0;
        let startY = 0;
        let touchStarted = false;
        hero.addEventListener('touchstart', event => {
            if (event.touches.length !== 1) { touchStarted = false; return; }
            touchStarted = true;
            startX = event.touches[0].clientX;
            startY = event.touches[0].clientY;
        }, { passive: true });
        hero.addEventListener('touchend', event => {
            if (!touchStarted || !event.changedTouches.length) return;
            const dx = event.changedTouches[0].clientX - startX;
            const dy = event.changedTouches[0].clientY - startY;
            if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy) * 1.3) step(dx < 0 ? 1 : -1);
            touchStarted = false;
        }, { passive: true });
        hero.addEventListener('touchcancel', () => { touchStarted = false; });
        updatePauseButton();
        restartTimer();
    }

    // Shared photo lightbox. Placeholder photos are also navigable.
    const photos = $$('[data-gallery]');
    const lightbox = $('#lightbox');
    let photoIndex = 0;
    function showPhoto(index) {
        if (!photos.length) return;
        photoIndex = (index + photos.length) % photos.length;
        const photo = photos[photoIndex];
        $('#lightbox-image').src = photo.dataset.src;
        $('#lightbox-image').alt = photo.dataset.placeholder === 'true' ? 'Placeholder ' + photo.dataset.title : photo.dataset.title;
        $('#lightbox-title').textContent = photo.dataset.title;
        $('#photo-count').textContent = (photoIndex + 1) + ' / ' + photos.length;
        $('#lightbox-placeholder').hidden = photo.dataset.placeholder !== 'true';
        $('#lightbox-placeholder').textContent = photo.dataset.title + ' Ã¢â‚¬â€ foto akan segera ditambahkan';
    }
    photos.forEach((photo, index) => photo.addEventListener('click', () => { showPhoto(index); openDialog(lightbox, photo); }));
    $('#photo-prev')?.addEventListener('click', () => showPhoto(photoIndex - 1));
    $('#photo-next')?.addEventListener('click', () => showPhoto(photoIndex + 1));
    lightbox?.addEventListener('keydown', event => {
        if (event.key === 'ArrowLeft') { event.preventDefault(); showPhoto(photoIndex - 1); }
        if (event.key === 'ArrowRight') { event.preventDefault(); showPhoto(photoIndex + 1); }
    });
    // Keep only one video playing at a time.
    const videos = $$('video');
    videos.forEach(video => video.addEventListener('play', () => {
        videos.forEach(other => { if (other !== video) other.pause(); });
    }));

    // Pricelist search and category selection.
    const priceSearch = $('#price-search');
    const priceCategory = $('#price-category');
    if (priceSearch && priceCategory) {
        function filterPrices() {
            const term = priceSearch.value.trim().toLocaleLowerCase('id');
            let total = 0;
            $$('[data-price-group]').forEach(group => {
                let count = 0;
                const inCategory = priceCategory.value === 'all' || group.dataset.priceGroup === priceCategory.value;
                $$('[data-price-item]', group).forEach(row => {
                    const match = inCategory && row.dataset.search.includes(term);
                    row.hidden = !match;
                    if (match) count++;
                });
                group.hidden = count === 0;
                total += count;
            });
            $('#price-result-count').textContent = total + ' layanan ditemukan';
            $('#price-empty').hidden = total > 0;
        }
        priceSearch.addEventListener('input', filterPrices);
        priceCategory.addEventListener('change', filterPrices);
        $('#price-reset').addEventListener('click', () => { priceSearch.value = ''; priceCategory.value = 'all'; filterPrices(); priceSearch.focus(); });
    }

    // Build the WhatsApp message entirely in browser memory. Never log or store inputs.
    function localDate() {
        const date = new Date();
        return [date.getFullYear(), String(date.getMonth() + 1).padStart(2, '0'), String(date.getDate()).padStart(2, '0')].join('-');
    }
    $$('.booking-form').forEach(form => {
        const dateInput = $('[name="date"]', form);
        dateInput.min = localDate();
        form.addEventListener('input', () => clearFormFeedback(form));
        form.addEventListener('change', () => clearFormFeedback(form));
        form.addEventListener('submit', event => {
            event.preventDefault();
            clearFormFeedback(form);
            const nameInput = $('[name="name"]', form);
            const phoneInput = $('[name="phone"]', form);
            const serviceInput = $('[name="service"]', form);
            const name = nameInput.value.trim();
            const phone = phoneInput.value.trim();
            const normalizedPhone = phone.replace(/[\s()-]/g, '');
            const errors = [];
            function invalid(field, message) {
                $('[data-error="' + field.name + '"]', form).textContent = message;
                field.setAttribute('aria-invalid', 'true');
                errors.push(field);
            }
            if (!name) invalid(nameInput, 'Nama lengkap wajib diisi.');
            if (!phone) invalid(phoneInput, 'Nomor WhatsApp wajib diisi.');
            else if (!/^\+?\d{9,15}$/.test(normalizedPhone)) invalid(phoneInput, 'Masukkan nomor WhatsApp yang valid (9Ã¢â‚¬â€œ15 digit).');
            if (!serviceInput.value) invalid(serviceInput, 'Silakan pilih layanan terlebih dahulu.');
            if (dateInput.value && dateInput.value < localDate()) invalid(dateInput, 'Pilih tanggal hari ini atau setelahnya.');
            if (errors.length) {
                $('.form-status', form).textContent = 'Periksa kembali kolom yang ditandai.';
                errors[0].focus();
                return;
            }
            const selectedText = serviceInput.selectedOptions[0].textContent;
            const priceSeparator = selectedText.lastIndexOf(' Ã¢â‚¬â€ ');
            const service = priceSeparator >= 0 ? selectedText.slice(0, priceSeparator) : selectedText;
            const date = dateInput.value ? dateInput.value.split('-').reverse().join('/') : 'Belum ditentukan';
            const time = $('[name="time"]', form).value || 'Belum ditentukan';
            const notes = $('[name="notes"]', form).value.trim() || '-';
            const message = 'Halo Klinik Anshani,\n\nSaya ingin mendaftar/konsultasi layanan Klinik Anshani.\n\n'
                + 'Nama: ' + name + '\nNomor WhatsApp: ' + phone + '\nLayanan: ' + service
                + '\nTanggal: ' + date + '\nJam: ' + time + '\nCatatan: ' + notes
                + '\n\nMohon informasi selanjutnya.\n\nTerima kasih.';
            const url = 'https://wa.me/' + form.dataset.whatsapp + '?text=' + encodeURIComponent(message);
            const fallback = $('.whatsapp-fallback', form);
            fallback.href = url;
            fallback.hidden = false;
            window.open(url, '_blank', 'noopener,noreferrer');
            $('.form-status', form).textContent = 'Pesan siap dibuka di WhatsApp. Kirim pesan di sana untuk menghubungi klinik.';
        });
    });
    window.addEventListener('pagehide', () => {
        $$('.booking-form').forEach(form => { form.reset(); clearFormFeedback(form); });
    });
})();
