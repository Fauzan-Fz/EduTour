{{-- Data halaman beranda dikelompokkan di awal view agar isi dapat diganti tanpa mengubah struktur section. --}}
@php


    $steps = [
        ['number' => '01', 'title' => 'Pilih Materi & Jenjang', 'description' => 'Guru memilih mata pelajaran, jenjang kelas, dan topik capaian pembelajaran yang ingin dipraktikkan siswa di lapangan.', 'note' => 'Sesuai capaian Kurikulum Merdeka', 'icon' => 'feature-1.svg'],
        ['number' => '02', 'title' => 'Rute Kunjungan & Biaya', 'description' => 'Sistem menyusun beberapa lokasi kunjungan dalam satu rute searah yang efisien, lengkap estimasi sewa bus dan konsumsi.', 'note' => 'Hemat waktu perjalanan & biaya', 'icon' => 'feature-2.svg'],
        ['number' => '03', 'title' => 'Lembar Kerja & Laporan', 'description' => 'Siswa mengerjakan lembar observasi langsung di lapangan. Absensi kehadiran dan laporan kegiatan tersusun rapi saat pulang.', 'note' => 'Format rapi siap untuk laporan sekolah', 'icon' => 'feature-3.svg'],
    ];

    $destinations = [
        ['image' => 'image-1.png', 'category' => 'Industri & Bio', 'rating' => '4.9', 'name' => 'PT Yakult Indonesia', 'location' => 'Ngoro, Mojokerto', 'price' => 'Rp75.000'],
        ['image' => 'image-2.png', 'category' => 'Biologi & Medis', 'rating' => '4.95', 'name' => 'Museum Anatomi & Tubuh', 'location' => 'Kota Wisata Batu', 'price' => 'Rp75.000'],
        ['image' => 'image-3.png', 'category' => 'Budaya & IT', 'rating' => '4.8', 'name' => 'Kampoeng Cyber Heritage', 'location' => 'Kraton, Yogyakarta', 'price' => 'Rp75.000'],
        ['image' => 'image-4.png', 'category' => 'Vokasi & Kriya', 'rating' => '4.85', 'name' => 'Seni Logam Kotagede', 'location' => 'Kotagede, Yogyakarta', 'price' => 'Rp75.000'],
    ];

    $categories = [
        ['icon' => 'icon-21.svg', 'title' => 'Industry & Business', 'description' => 'Manufaktur modern, otomotif presisi, sistem logistik, dan industri pangan skala internasional.', 'link' => '420 Destinasi Terkurasi'],
        ['icon' => 'icon-22.svg', 'title' => 'Science & Technology', 'description' => 'Observatorium antariksa, laboratorium robotika & IoT, instalasi PLTA, serta pusat bioteknologi.', 'link' => '195 Laboratorium Alam & Riset'],
        ['icon' => 'icon-23.svg', 'title' => 'Culture & Heritage', 'description' => 'Candi bersejarah nusantara, museum arkeologi interaktif, keraton budaya, dan komunitas adat tradisi.', 'link' => '310 Cagar Budaya Resmi'],
    ];

    $routeStops = [
        ['label' => 'TITIK AWAL', 'name' => 'SMAN 1 Surabaya', 'time' => '06:30 WIB', 'icon' => 'icon-4.svg', 'tone' => 'muted'],
        ['label' => 'STOP 1 • INDUSTRI', 'name' => 'PT Yakult Ngoro', 'time' => '08:30 - 10:30 WIB', 'icon' => 'icon-5.svg', 'tone' => 'blue'],
        ['label' => 'STOP 2 • SEJARAH', 'name' => 'Museum Majapahit', 'time' => '12:00 - 13:45 WIB', 'icon' => 'icon-6.svg', 'tone' => 'slate'],
        ['label' => 'STOP 3 • AGRO', 'name' => 'Desa Wisata Claket', 'time' => '15:00 - 17:00 WIB', 'icon' => 'icon-8.svg', 'tone' => 'green'],
    ];

    $footerColumns = [
        'Menu Utama' => [
            ['label' => 'Beranda', 'route' => 'home'],
            ['label' => 'Katalog Destinasi', 'route' => 'destinations.index'],
            ['label' => 'Alur Cara Kerja', 'route' => 'how-it-works'],
            ['label' => 'Tentang Kami', 'route' => 'about'],
        ],
        'Program Belajar' => [
            ['label' => 'Agrikultur & Alam', 'url' => route('destinations.index')],
            ['label' => 'Kunjungan Industri', 'url' => route('destinations.index')],
            ['label' => 'Cagar Budaya & Sejarah', 'url' => route('destinations.index')],
            ['label' => 'Simulasi Rute Bus', 'url' => route('home') . '#rute'],
        ],
        'Bantuan & Kontak' => [
            ['label' => 'Panduan Perjalanan', 'url' => route('how-it-works')],
            ['label' => 'Konsultasi Sekolah', 'url' => 'https://wa.me/6281234567890'],
            ['label' => 'Dukungan Pelaksanaan', 'url' => route('about')],
        ],
    ];
@endphp
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EduTour membantu sekolah menemukan destinasi edukatif terbaik dan menyusun rute pembelajaran dalam satu perjalanan.">
    <title>EduTour — Satu Perjalanan, Banyak Pengalaman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&family=Lato:wght@400;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
</head>
<body>
    <header class="site-header">
        <div class="nav-shell">
            <a class="brand" href="{{ route('home') }}#beranda" aria-label="EduTour beranda"><img src="{{ asset('images/figma/logo.png') }}" alt="" width="32" height="32"><span>EduTour</span></a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-navigation"><span></span><span></span><span></span><span class="sr-only">Buka menu</span></button>
            <nav id="main-navigation" class="main-navigation" aria-label="Navigasi utama"><a class="active" href="#beranda">Beranda</a><a href="{{ route('destinations.index') }}">Destinasi</a><a href="{{ route('how-it-works') }}">Cara Kerja</a><a href="{{ route('about') }}">Tentang Kami</a></nav>
            <a class="button button-small" href="#masuk">Masuk</a>
        </div>
    </header>

    <main>
        <section id="beranda" class="hero-section">
            <div class="hero-glow hero-glow-blue"></div><div class="hero-glow hero-glow-yellow"></div>
            <div class="hero-shell shell">
                <div class="hero-copy"><span class="eyebrow eyebrow-green">Platform Eduwisata</span><h1>Satu <span>Perjalanan</span><br>Banyak Pengalaman.</h1><p>EduTour membantu sekolah menemukan destinasi edukatif terbaik dan menyusun rute pembelajaran & wisata yang terhubung dalam satu perjalanan.</p><div class="hero-actions"><a class="button" href="{{ route('destinations.index') }}">Jelajahi Destinasi <img src="{{ asset('images/figma/arrow-right.svg') }}" alt="" width="12" height="12"></a><a class="button button-outline" href="#rute">Rencanakan Perjalanan</a></div></div>
                <div class="hero-art" aria-label="Ilustrasi siswa dan guru dalam perjalanan edukasi" role="img">
                    <div class="art-circle art-circle-one"><img src="{{ asset('images/figma/circle-1.svg') }}" alt="" width="532" height="532"></div>
                    <div class="art-circle art-circle-two"><img src="{{ asset('images/figma/circle-2.svg') }}" alt="" width="431" height="430"></div>
                    <div class="art-circle art-circle-three"><img src="{{ asset('images/figma/circle-3.svg') }}" alt="" width="344" height="344"></div>
                    <picture class="hero-people">
                        <source srcset="{{ asset('images/figma/hero.webp') }}" type="image/webp">
                        <img src="{{ asset('images/figma/hero.png') }}" alt="Siswa dan pendamping dalam aktivitas edukasi" width="1120" height="1583" fetchpriority="high">
                    </picture>
                    <span class="art-dot art-dot-yellow"></span>
                    <span class="art-dot art-dot-blue"></span>
                    <div class="floating-bus"><img src="{{ asset('images/figma/bus.svg') }}" alt="" width="31" height="31"></div>
                    <article class="floating-place floating-place-main">
                        <img src="{{ asset('images/figma/hero-otsuka.webp') }}" alt="Rombongan siswa di depan fasilitas Pocari Sweat PT Otsuka" width="640" height="425" decoding="async">
                        <strong>PT Otsuka</strong>
                        <small><img src="{{ asset('images/figma/location.svg') }}" alt="" width="12" height="12"> Jawa Timur, Indonesia</small>
                    </article>
                    <article class="floating-place floating-place-mini"><img src="{{ asset('images/figma/hero-kampung-jamur.webp') }}" alt="Gerbang Kampung Jamur" width="320" height="240" loading="lazy"><strong>Kampung Jamur</strong><small><img src="{{ asset('images/figma/location.svg') }}" alt="" width="10" height="10"> Jawa Barat, Indonesia</small></article>
                </div>
            </div>
        </section>

        <section class="supporters-section" aria-label="Pendukung EduTour"><div class="shell"><p class="eyebrow">DIDUKUNG OLEH</p><div class="supporters-grid"><span class="supporter-card"><img src="{{ asset('images/figma/partner-jhic.webp') }}" alt="JHIC Innovation" width="372" height="226" loading="lazy"></span><span class="supporter-card"><img src="{{ asset('images/figma/partner-jagoan-hosting.webp') }}" alt="Jagoan Hosting" width="504" height="158" loading="lazy"></span><span class="supporter-card"><img src="{{ asset('images/figma/partner-komdigi.webp') }}" alt="KOMDIGI" width="252" height="183" loading="lazy"></span><span class="supporter-card"><img src="{{ asset('images/figma/partner-garuda-spark.webp') }}" alt="Garuda Spark" width="384" height="210" loading="lazy"></span><span class="supporter-card"><img src="{{ asset('images/figma/partner-ngalup.webp') }}" alt="NGALUP.CO" width="435" height="69" loading="lazy"></span></div></div></section>

        <section id="cara-kerja" class="section section-soft how-section"><div class="shell"><div class="section-heading centered-heading"><span class="eyebrow">ALUR TIGA LANGKAH</span><h2>Bagaimana EduTour Mempermudah<br>Kunjungan Belajar Anda</h2><p>Dari pemilihan materi di kelas hingga laporan kegiatan siswa, semuanya teratur tanpa repot mengurus jadwal dan transportasi.</p></div><div class="steps-grid">@foreach ($steps as $step)<article class="step-card"><div class="step-topline"><span class="step-number">{{ $step['number'] }}</span><img src="{{ asset('images/figma/' . $step['icon']) }}" alt="" width="22" height="22"></div><div class="step-copy"><h3>{{ $step['title'] }}</h3><p>{{ $step['description'] }}</p></div><div class="step-note"><span>✦</span>{{ $step['note'] }}</div></article>@endforeach</div></div></section>



        <section id="tentang" class="section curriculum-section"><div class="shell curriculum-grid"><article class="case-card"><img class="case-image" src="{{ asset('images/figma/image.png') }}" alt="Siswa mengunjungi fasilitas industri" width="512" height="279" loading="lazy"><div class="case-body"><span class="small-label">STUDI KASUS DESTINASI TERVERIFIKASI</span><h3>PT Yakult Indonesia Persada</h3><span class="field-label">MATA PELAJARAN DIDUKUNG:</span><div class="tag-list"><span>Biologi (Mikrobiologi & Probiotik)</span><span>Kewirausahaan (Distribusi & Mutu)</span><span>IPAS Terapan</span></div><div class="case-divider"></div><span class="field-label">KOMPETENSI YANG DIASAH:</span><div class="skill-list"><span><img src="{{ asset('images/figma/feature-4.svg') }}" alt="" width="15" height="15"> Observasi Fermentasi</span><span><img src="{{ asset('images/figma/feature-5.svg') }}" alt="" width="15" height="15"> Critical Thinking Riset</span><span><img src="{{ asset('images/figma/icon-14.svg') }}" alt="" width="15" height="15"> Higienitas Industri</span><span><img src="{{ asset('images/figma/icon-15.svg') }}" alt="" width="15" height="15"> Cold-Chain Supply</span></div></div></article><div class="curriculum-copy"><span class="eyebrow">PEMBELAJARAN SESUAI TEMA</span><h2>Bukan Sekadar Jalan-Jalan, Tapi Benar-Benar Belajar di Luar Kelas</h2><p>EduTour mencocokkan materi pelajaran sekolah dengan aktivitas nyata di setiap lokasi tujuan, sehingga guru tidak perlu repot merancang lembar tugas dari nol.</p><div class="benefit-list"><article><span class="benefit-icon">♧</span><div><h3>Aktivitas Belajar Bertahap</h3><p>Kegiatan dirancang agar siswa mengamati, mencoba langsung, dan memahami materi dengan menyenangkan.</p></div></article><article><span class="benefit-icon">✓</span><div><h3>Lembar Tugas Siap Pakai</h3><p>Panduan observasi dan rubrik penilaian siswa sudah disiapkan agar guru tinggal menggunakan di lapangan.</p></div></article></div><a class="button" href="#rute">Lihat Simulasi Rute Sekolah Anda <span>⌁</span></a></div></div></section>

        <section id="rute" class="section section-soft route-section"><div class="shell"><div class="route-heading"><div><span class="eyebrow">SIMULASI PERJALANAN</span><h2>Simulasi Rute Kunjungan Seharian yang Rapi</h2><p>Hubungkan beberapa lokasi kunjungan sekaligus tanpa khawatir jadwal bentrok dan waktu terbuang di jalan.</p></div><span class="mode-pill">Mode: 1 Hari Ekspedisi</span></div><div class="route-panel"><div class="route-stops">@foreach ($routeStops as $stop)<article class="route-stop {{ $stop['tone'] }}"><img src="{{ asset('images/figma/' . $stop['icon']) }}" alt="" width="24" height="24"><span class="route-label">{{ $stop['label'] }}</span><strong>{{ $stop['name'] }}</strong><small>{{ $stop['time'] }}</small></article>@endforeach</div><div class="route-summary"><div><span class="summary-icon">⌁</span><span><small>Total Jarak Efektif</small><strong>118 km <em>(Searah)</em></strong></span></div><div><span class="summary-icon">▣</span><span><small>Estimasi Biaya / Siswa</small><strong>Rp135.000 <em>(All-in)</em></strong></span></div><div><span class="summary-icon">◆</span><span><small>Kompetensi Tuntas</small><strong>3 Mata Pelajaran</strong></span></div><div><span class="summary-icon">▤</span><span><small>Rekomendasi Armada</small><strong>2 Medium Bus (35 Seat)</strong></span></div></div></div></div></section>

        <section id="destinasi" class="section section-soft destinations-section"><div class="shell"><div class="section-heading destination-heading"><div><span class="eyebrow">KATALOG REKOMENDASI</span><h2>Destinasi Populer</h2><p>Memenuhi standar SOP keamanan siswa, ketersediaan edukator.</p></div></div><div class="destination-grid">@foreach ($destinations as $destination)<article class="destination-card"><a href="{{ route('destinations.show') }}" aria-label="{{ $destination['name'] }}"><img class="destination-image" src="{{ asset('images/figma/' . $destination['image']) }}" alt="{{ $destination['name'] }}" width="512" height="279" loading="lazy"></a><div class="destination-body"><div class="destination-meta"><span>{{ $destination['category'] }}</span><b>★ {{ $destination['rating'] }}</b></div><h3><a href="{{ route('destinations.show') }}">{{ $destination['name'] }}</a></h3><p class="location"><img src="{{ asset('images/figma/location-muted.svg') }}" alt="" width="12" height="12"> {{ $destination['location'] }}</p><div class="destination-divider"></div><div class="destination-footer"><span>Mulai dari<strong>{{ $destination['price'] }}<small>/siswa</small></strong></span><a href="{{ route('destinations.show') }}">Lihat Detail</a></div></div></article>@endforeach</div><div class="center-action"><a class="button" href="{{ route('destinations.index') }}">Lihat Semua Destinasi <img src="{{ asset('images/figma/arrow-right.svg') }}" alt="" width="12" height="12"></a></div></div></section>

        <section class="section categories-section"><div class="shell"><div class="category-heading"><div><span class="eyebrow">KATEGORI EKSPEDISI</span><h2>Pilih Bidang Pembelajaran Luar Kelas</h2><p>Eksplorasi ribuan laboratorium nyata yang telah disinkronkan dengan kebutuhan pembelajaran vokasi maupun umum.</p></div><a href="{{ route('destinations.index') }}">Lihat Semua 1.800+ Destinasi <span>→</span></a></div><div class="category-grid">@foreach ($categories as $category)<article class="category-card"><span class="category-icon"><img src="{{ asset('images/figma/' . $category['icon']) }}" alt="" width="22" height="22"></span><h3>{{ $category['title'] }}</h3><p>{{ $category['description'] }}</p><a href="{{ route('destinations.index') }}">{{ $category['link'] }} <span>›</span></a></article>@endforeach</div></div></section>
    </main>

    {{-- Footer beranda menjadi referensi struktur bersama untuk halaman destinasi. --}}
    <footer id="masuk" class="site-footer"><div class="footer-main shell"><div class="footer-brand"><img src="{{ asset('images/figma/logo.png') }}" alt="EduTour" width="40" height="40"><h2>Solusi Perjalanan Edukasi<br>Terpadu untuk Sekolah Anda.</h2><span>EduTour, 2026.</span></div><div class="footer-links">@foreach ($footerColumns as $heading => $items)
                    <div>
                        <h3>{{ $heading }}</h3>
                        @foreach ($items as $item)
                            <a href="{{ isset($item['route']) ? route($item['route']) : $item['url'] }}">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                @endforeach
                <div><h3>Social Media</h3><div class="social-links"><a href="#instagram" aria-label="Instagram"><img src="{{ asset('images/figma/instagram.svg') }}" alt="" width="20" height="20"></a><a href="#facebook" aria-label="Facebook"><img src="{{ asset('images/figma/facebook.svg') }}" alt="" width="20" height="20"></a><a href="#twitter" aria-label="Twitter"><img src="{{ asset('images/figma/twitter.svg') }}" alt="" width="20" height="20"></a></div></div></div></div><div class="footer-legal"><span>© 2026 EduTour. All rights reserved.</span><div><a href="#terms">Terms of Service</a><a href="#privacy">Privacy Policy</a><a href="#cookies">Cookies</a></div></div></footer>
    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
