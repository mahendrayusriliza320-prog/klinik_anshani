<?php
// PUSAT DATA. Ganti isi di sini; tampilan di semua halaman mengikuti otomatis.
// Sumber harga: https://klinikanshani.jimdofree.com/ dibaca 14 September 2026.
// Harga adalah informasi referensi, bukan jaminan harga/jadwal saat kunjungan.
$clinic = [
    'name' => 'Klinik Anshani',
    'description' => 'Klinik Anshani menyediakan berbagai layanan pemeriksaan, konsultasi, dan pelayanan kesehatan dengan proses yang mudah dan nyaman.',
    'whatsapp_display' => '083114969136',
    'whatsapp_number' => '6283114969136',
    'address' => 'Alamat Klinik Anshani',
    'opening_hours' => 'SeninÃ¢â‚¬â€œMinggu | 08.00Ã¢â‚¬â€œ21.00',
    'location_is_placeholder' => true, // Ubah false setelah alamat dan jam dikonfirmasi.
    'maps_embed' => 'GOOGLE_MAP_EMBED_URL', // Google Maps > Bagikan > Sematkan peta > salin nilai src.
    'maps_link' => 'https://www.google.com/maps/search/?api=1&query=Klinik%20Anshani',
    'maps_fallback' => 'https://maps.google.com/maps?q=Indonesia&z=5&output=embed',
    'site_url' => '', // Contoh https://domain-anda.id (tanpa slash akhir); kosong di localhost.
];

$navigation = ['index.php' => 'Home', 'tentang.php' => 'Tentang', 'layanan.php' => 'Layanan', 'pricelist.php' => 'Pricelist', 'galeri.php' => 'Galeri', 'kontak.php' => 'Kontak'];

$about = [
    'intro' => 'Klinik Anshani memberikan layanan kesehatan dengan mengutamakan kenyamanan, privasi, profesionalitas, dan kemudahan akses bagi pasien.',
    'history' => 'Informasi sejarah, tahun berdiri, dan perjalanan Klinik Anshani akan ditambahkan setelah data resmi tersedia.',
    'vision' => 'Menjadi tempat pelayanan kesehatan yang nyaman, mudah diakses, dan dipercaya oleh masyarakat.',
    'mission' => ['Memberikan pelayanan yang profesional dan berorientasi pada kebutuhan pasien.', 'Menjaga privasi serta kenyamanan dalam setiap proses pelayanan.', 'Memudahkan akses informasi layanan, harga, dan jadwal kunjungan.'],
];

$banners = [
    ['title' => 'Kesehatan Anda, perhatian kami.', 'label' => 'Klinik Anshani', 'text' => 'Pelayanan kesehatan yang nyaman, profesional, dan terpercaya. Mulai dari pemeriksaan hingga konsultasi, kami siap membantu.', 'image' => 'assets/images/banners/banner-1.png'],
    ['title' => 'Kenali kebutuhan kesehatan Anda.', 'label' => 'Layanan Pemeriksaan Kesehatan', 'text' => 'Pemeriksaan dan konsultasi dengan pelayanan yang nyaman. Temukan informasi layanan dan harga dalam satu tempat.', 'image' => 'assets/images/banners/banner-2.jpg'],
    ['title' => 'Konsultasi jadi lebih mudah.', 'label' => 'Konsultasikan Kebutuhan Kesehatan Anda', 'text' => 'Hubungi Klinik Anshani untuk mendapatkan informasi layanan dan merencanakan kunjungan Anda.', 'image' => 'assets/images/banners/banner-3.jpg'],
];

$gallery = [];
for ($i = 1; $i <= 5; $i++) {
    $gallery[] = ['image' => "assets/images/clinic/clinic-$i.jpg", 'title' => "Foto Klinik $i", 'alt' => "Foto Klinik Anshani $i"];
}
$videos = [];
for ($i = 1; $i <= 4; $i++) {
    $videos[] = ['file' => "assets/videos/video-$i.mp4", 'title' => "Video Klinik $i", 'poster' => "assets/images/clinic/clinic-$i.jpg"];
}

$categories = [
    'laboratorium' => ['name' => 'Laboratorium', 'icon' => 'lab', 'description' => 'Informasi pemeriksaan darah, tes narkoba, dan pemeriksaan laboratorium lainnya.', 'detail' => 'Tersedia pemeriksaan gula darah, asam urat, kolesterol, dan pilihan laboratorium lainnya. Hubungi klinik untuk persiapan pemeriksaan dan estimasi waktu hasil.'],
    'pemeriksaan-ims' => ['name' => 'Pemeriksaan IMS', 'icon' => 'shield', 'description' => 'Pilihan pemeriksaan IMS dengan perhatian pada kenyamanan dan privasi Anda.', 'detail' => 'Pilihan rapid test, paket STI, swab, dan pemeriksaan PCR. Konsultasikan jenis pemeriksaan serta jadwal yang sesuai dengan kebutuhan Anda.'],
    'pengobatan-ims' => ['name' => 'Pengobatan IMS', 'icon' => 'heart', 'description' => 'Konsultasi kebutuhan penanganan IMS bersama tenaga kesehatan.', 'detail' => 'Jenis tindakan ditentukan melalui pemeriksaan dan penilaian tenaga kesehatan. Pemilihan di website merupakan permintaan konsultasi, bukan resep atau persetujuan tindakan.'],
    'fisioterapi' => ['name' => 'Fisioterapi', 'icon' => 'activity', 'description' => 'Diskusikan kebutuhan layanan fisioterapi dan jadwal kunjungan.', 'detail' => 'Hubungi klinik untuk informasi sesi fisioterapi, penilaian awal, dan ketersediaan jadwal. Rencana pelayanan disesuaikan setelah konsultasi.'],
    'nebulizer' => ['name' => 'Nebulizer', 'icon' => 'air', 'description' => 'Informasi layanan nebulizer untuk anak dan dewasa.', 'detail' => 'Layanan nebulizer mengikuti hasil penilaian tenaga kesehatan. Konfirmasikan kebutuhan pemeriksaan dan jadwal sebelum datang.'],
    'sunat-modern' => ['name' => 'Sunat Modern', 'icon' => 'cross', 'description' => 'Informasi sunat modern untuk anak dan dewasa.', 'detail' => 'Konsultasikan metode, persiapan, biaya, serta perawatan setelah tindakan langsung dengan klinik. Jadwal dikonfirmasi melalui WhatsApp.'],
    'suntik-vitamin' => ['name' => 'Suntik Vitamin', 'icon' => 'drop', 'description' => 'Pilihan layanan vitamin sesuai penilaian tenaga kesehatan.', 'detail' => 'Tersedia informasi vitamin C dan vitamin B kompleks. Kesesuaian pemberian dan jenis vitamin dibahas saat konsultasi.'],
    'infus-vitamin' => ['name' => 'Infus Vitamin', 'icon' => 'drop', 'description' => 'Informasi pilihan infus vitamin 100 ml dan 500 ml.', 'detail' => 'Lihat pilihan serta harga referensi di pricelist. Kebutuhan infus ditentukan tenaga kesehatan setelah pemeriksaan.'],
    'infus-penyakit' => ['name' => 'Layanan Infus', 'icon' => 'heart', 'description' => 'Konsultasi layanan infus berdasarkan keluhan dan hasil pemeriksaan.', 'detail' => 'Nama paket mengikuti informasi pada website referensi. Tindakan dan biaya akhir dikonfirmasi setelah tenaga kesehatan menilai kondisi pasien.'],
    'homecare' => ['name' => 'Homecare', 'icon' => 'home', 'description' => 'Tanyakan ketersediaan kunjungan rumah di area layanan klinik.', 'detail' => 'Referensi menyebut tambahan biaya Rp100.000 untuk area dekat klinik: Jakarta Barat, Karang Tengah, dan Cipondoh. Biaya ini di luar layanan utama; cakupan serta jadwal perlu dikonfirmasi.'],
    'vaksinasi' => ['name' => 'Vaksinasi', 'icon' => 'shield', 'description' => 'Tanyakan informasi vaksin influenza, HPV, dan ketersediaannya.', 'detail' => 'Layanan vaksin disebutkan di website referensi tanpa rincian harga. Hubungi klinik untuk jenis vaksin, stok, syarat, jadwal, dan biaya terkini.'],
];

// [id, nama, harga, catatan opsional]. Harga null = hubungi klinik, bukan gratis.
$priceGroups = [
    'laboratorium' => [
        ['skbn-6p', 'SKBN 6P Rapid Tes Narkoba', 100000],
        ['gula-darah', 'Rapid Gula Darah Sewaktu', 20000],
        ['asam-urat', 'Rapid Asam Urat', 30000],
        ['kolesterol', 'Rapid Kolesterol', 40000],
        ['rapid-sepaket', 'Rapid Sepaket', 65000, 'Konfirmasikan isi paket kepada klinik.'],
        ['antigen', 'Rapid Antigen', 50000],
        ['tbc', 'Rapid TBC', 200000],
    ],
    'pemeriksaan-ims' => [
        ['rapid-hiv-gen-1-2', 'Rapid HIV Gen 1/2', 150000],
        ['rapid-hiv-gen-4', 'Rapid HIV Gen 4', 300000, 'AB & AG'],
        ['sifilis', 'Rapid Sifilis', 150000],
        ['hepatitis-b', 'Rapid Hepatitis B', 150000],
        ['hepatitis-c', 'Rapid Hepatitis C', 150000],
        ['hepatitis-a', 'Rapid Hepatitis A IgM', 200000],
        ['paket-3-sti', 'Paket 3 STI', 400000, 'HIV, sifilis, hepatitis B'],
        ['paket-4-sti', 'Paket 4 STI', 500000, 'HIV, sifilis, hepatitis B dan C'],
        ['rapid-gonore', 'Rapid Gonore', 300000],
        ['rapid-chlamydia', 'Rapid Chlamydia', 300000],
        ['ibu-hamil', 'Paket Pemeriksaan Ibu Hamil', 150000, '7 parameter sesuai daftar referensi; konfirmasi rincian dengan klinik.'],
        ['swab-vagina', 'Swab Vagina', 550000],
        ['pcr-hpv', 'PCR HPV', 800000, 'Vagina / uretra'],
        ['pcr-12', 'PCR Urin Uretra / Swab Vagina 12 Penyakit', 2400000],
        ['vdrl-express', 'VDRL Express', 440000, 'Estimasi hasil hari yang sama, konfirmasi klinik.'],
        ['vdrl', 'VDRL', 300000, 'Estimasi hasil 1Ã¢â‚¬â€œ3 hari'],
        ['tpha', 'TPHA', 300000, 'Estimasi hasil 1Ã¢â‚¬â€œ3 hari'],
        ['pcr-hiv-rna', 'PCR HIV RNA', 1800000, 'Referensi menyebut hasil 12 jam; konfirmasi ketersediaan.'],
    ],
    'pengobatan-ims' => [
        ['suntik-gonore', 'Suntik Gonore', 400000], ['infus-gonore', 'Infus Gonore', 500000],
        ['infus-chlamydia', 'Infus Chlamydia', 500000], ['suntik-sifilis', 'Suntik Sifilis', 500000],
        ['infus-bakteri-vagina', 'Infus Bakteri Vagina', 500000], ['infus-jamur', 'Infus Jamur', 500000],
    ],
    'fisioterapi' => [['fisioterapi', 'Fisioterapi', 350000]],
    'nebulizer' => [['nebulizer', 'Nebulizer', 100000, 'Anak & dewasa']],
    'sunat-modern' => [['sunat-anak', 'Sunat Modern Anak', 1500000], ['sunat-dewasa', 'Sunat Modern Dewasa', 1700000]],
    'suntik-vitamin' => [
        ['suntik-c', 'Suntik Vitamin C 1000 mg', 100000],
        ['suntik-b3', 'Suntik B Kompleks Ã¢â‚¬â€ 3 Vitamin', 80000, 'B1, B6, B12'],
        ['suntik-b6', 'Suntik B Kompleks Ã¢â‚¬â€ 6 Vitamin', 140000, 'B1, B2, B3, B5, B6, B12'],
        ['suntik-c-b', 'Suntik Vitamin C 1000 mg + B Kompleks', 140000, 'B1, B6, B12'],
    ],
    'infus-vitamin' => [],
    'infus-penyakit' => [
        ['vertigo-1', 'Infus Vertigo Ã¢â‚¬â€ Tanpa Mual / Muntah', 400000],
        ['vertigo-2', 'Infus Vertigo Ã¢â‚¬â€ Disertai Mual', 445000],
        ['vertigo-3', 'Infus Vertigo Ã¢â‚¬â€ Muntah Hebat & Lemas', 780000],
        ['hamil-muntah', 'Infus Ibu Hamil Ã¢â‚¬â€ Muntah Hebat', 589000],
        ['lambung-ringan', 'Infus Lambung Ringan', 400000],
        ['lambung-berat', 'Infus Lambung SedangÃ¢â‚¬â€œBerat', 630000],
        ['kolik-1', 'Infus Nyeri Perut Kolik Ã¢â‚¬â€ Tanpa Mual', 300000],
        ['kolik-2', 'Infus Nyeri Perut Kolik Ã¢â‚¬â€ Muntah & Demam', 780000],
        ['diare-1', 'Infus Diare Ã¢â‚¬â€ Tanpa Mual', 506000],
        ['diare-2', 'Infus Diare & Muntah', 561000],
        ['nyeri-kaki', 'Infus Nyeri Kaki', 308000],
    ],
    'homecare' => [['homecare', 'Tambahan Biaya Homecare', 100000, 'Di luar biaya layanan utama. Cakupan area dan jadwal dikonfirmasi klinik.']],
    'vaksinasi' => [['vaksin-flu', 'Vaksin Influenza', null], ['vaksin-hpv', 'Vaksin HPV', null]],
];
$infusionOptions = [
    ['c', 'Vitamin C 1000 mg', 170000, 240000],
    ['c-b3', 'Vitamin C + B Kompleks (B1, B6, B12)', 200000, 275000],
    ['c-b2', 'Vitamin C + B Kompleks (B3, B5)', 200000, 275000],
    ['c-b6', 'Vitamin C + B Kompleks (B1, B2, B3, B5, B6, B12)', 350000, 425000],
    ['multivitamin', 'Vitamin A, B Kompleks, C, D, E, K', 500000, 575000],
    ['fe', 'Fe Zat Besi', 400000, 475000],
    ['fe-b', 'Fe Zat Besi + B Kompleks', 450000, 525000],
];
foreach ([100 => 2, 500 => 3] as $volume => $column) {
    foreach ($infusionOptions as $option) {
        $priceGroups['infus-vitamin'][] = ['infus-' . $option[0] . '-' . $volume, 'Infus ' . $option[1] . ' Ã¢â‚¬â€ ' . $volume . ' ml', $option[$column]];
    }
}
$services = [];
foreach ($priceGroups as $categoryId => $items) {
    foreach ($items as $item) {
        $services[] = ['id' => $item[0], 'name' => $item[1], 'category_id' => $categoryId, 'category' => $categories[$categoryId]['name'], 'price' => $item[2], 'note' => $item[3] ?? ''];
    }
}
$featuredServices = ['rapid-hiv-gen-1-2', 'rapid-hiv-gen-4', 'paket-3-sti', 'pcr-hpv'];
$advantages = [
    ['icon' => 'shield', 'title' => 'Pelayanan Profesional', 'text' => 'Kebutuhan Anda dibahas bersama tenaga kesehatan.'],
    ['icon' => 'lock', 'title' => 'Privasi Pasien', 'text' => 'Kenyamanan dan privasi menjadi perhatian kami.'],
    ['icon' => 'price', 'title' => 'Informasi Harga Transparan', 'text' => 'Pelajari pilihan biaya sebelum merencanakan kunjungan.'],
    ['icon' => 'chat', 'title' => 'Konsultasi Mudah', 'text' => 'Hubungi klinik langsung melalui WhatsApp.'],
    ['icon' => 'clock', 'title' => 'Pelayanan Cepat', 'text' => 'Persiapkan pilihan layanan sebelum datang.'],
    ['icon' => 'pin', 'title' => 'Lokasi Mudah Ditemukan', 'text' => 'Minta petunjuk lokasi langsung kepada klinik.'],
];
$steps = ['Pilih layanan', 'Isi data', 'Lanjut ke WhatsApp', 'Konfirmasi jadwal', 'Datang ke Klinik Anshani'];
// DUMMY: wajib diganti testimonial asli dengan izin pasien sebelum publikasi.
$testimonials = [
    ['name' => 'Pengunjung A (contoh)', 'quote' => 'Informasi layanan tersusun rapi sehingga mudah dipelajari.'],
    ['name' => 'Pengunjung B (contoh)', 'quote' => 'Pilihan jadwal bisa ditanyakan terlebih dahulu melalui WhatsApp.'],
];
