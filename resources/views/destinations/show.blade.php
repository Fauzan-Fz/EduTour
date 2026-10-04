@php
    $footerColumns = [
        'Related Pages' => [
            ['label' => 'Beranda', 'route' => 'home'],
            ['label' => 'Destinasi', 'route' => 'destinations.index'],
            ['label' => 'Cara Kerja', 'route' => 'how-it-works'],
            ['label' => 'Tentang Kami', 'route' => 'about'],
        ],
    ];

    $similarDestinations = [
        [
            'image' => 'similar-hidroponik.webp',
            'category' => 'SAINS ALAM',
            'rating' => '4.7',
            'title' => 'Kebun Hidroponik Lestari',
            'location' => 'Bandung, Jawa Barat',
        ],
        [
            'image' => 'similar-sapi.webp',
            'category' => 'PETERNAKAN',
            'rating' => '4.9',
            'title' => 'Peternakan Sapi Perah Mega',
            'location' => 'Pangalengan, Jawa Barat',
        ],
        [
            'image' => 'similar-teh.webp',
            'category' => 'INDUSTRI OLAHAN',
            'rating' => '4.6',
            'title' => 'Pabrik Pengolahan Teh Hijau',
            'location' => 'Ciwidey, Jawa Barat',
        ],
    ];
@endphp
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Detail destinasi Kampung Jamur Eduwisata - Pengalaman belajar interaktif agrikultur, budidaya jamur modern, dan modul Kurikulum Merdeka di Lembang, Jawa Barat.">
    <title>Kampung Jamur Eduwisata — EduTour</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;600&family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/destination-detail.css') }}?v={{ filemtime(public_path('css/destination-detail.css')) }}">
</head>
<body class="detail-page">
    <header class="site-header">
        <div class="nav-shell">
            <a class="brand" href="{{ route('home') }}" aria-label="EduTour beranda">
                <img src="{{ asset('images/figma/logo.png') }}" alt="" width="32" height="32">
                <span>EduTour</span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-navigation">
                <span></span><span></span><span></span>
                <span class="sr-only">Buka menu</span>
            </button>
            <nav id="main-navigation" class="main-navigation" aria-label="Navigasi utama">
                <a href="{{ route('home') }}">Beranda</a>
                <a class="active" href="{{ route('destinations.index') }}">Destinasi</a>
                <a href="{{ route('how-it-works') }}">Cara Kerja</a>
                <a href="{{ route('about') }}">Tentang Kami</a>
            </nav>
            <a class="button button-small" href="{{ route('home') }}#masuk">Masuk</a>
        </div>
    </header>

    <main class="detail-shell">
        {{-- Breadcrumbs --}}
        <nav class="detail-breadcrumbs" aria-label="Breadcrumb">
            <a href="{{ route('destinations.index') }}">Destinasi</a>
            <span class="separator">›</span>
            <span class="current" aria-current="page">Kampung Jamur Eduwisata</span>
        </nav>

        {{-- Photo Gallery Grid --}}
        <section class="detail-gallery" aria-label="Galeri Foto Destinasi">
            <div class="gallery-col detail-gallery-main">
                <div class="gallery-item" style="height: 100%;">
                    <img src="{{ asset('images/figma/detail-gallery-1.webp') }}" alt="Area outdoor Kampung Jamur Eduwisata" width="560" height="420" fetchpriority="high">
                </div>
            </div>
            <div class="gallery-col detail-gallery-col-2">
                <div class="gallery-item">
                    <img src="{{ asset('images/figma/detail-gallery-2.webp') }}" alt="Siswa belajar mengamati jamur tiram" width="320" height="240" loading="lazy" decoding="async">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/figma/detail-gallery-3.webp') }}" alt="Ruang edukasi dan display Fungi Life Cycle" width="320" height="140" loading="lazy" decoding="async">
                </div>
            </div>
            <div class="gallery-col detail-gallery-col-3">
                <div class="gallery-item">
                    <img src="{{ asset('images/figma/detail-gallery-4.webp') }}" alt="Siklus hidup jamur - Fungi Life Cycle" width="282" height="334" loading="lazy" decoding="async">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('images/figma/detail-gallery-5.webp') }}" alt="Pemandangan dome rumah kaca Kampung Jamur" width="282" height="139" loading="lazy" decoding="async">
                </div>
            </div>
        </section>

        {{-- Title & Meta Header --}}
        <section class="detail-title-row">
            <div class="detail-heading">
                <div class="detail-badges">
                    <span class="badge-agrikultur">Agrikultur</span>
                    <span class="badge-level">SD - SMA</span>
                </div>
                <h1>Kampung Jamur Eduwisata</h1>
                <div class="detail-meta-line">
                    <span class="detail-rating"><span class="star">★</span> 4.8 <span>(124 Ulasan)</span></span>
                    <span class="detail-location">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        Lembang, Jawa Barat
                    </span>
                </div>
            </div>
            <div class="detail-price-box">
                <span class="price-label">Mulai dari</span>
                <div>
                    <span class="price-value" id="unit-price-display">Rp 75.000</span>
                    <span class="price-unit">/siswa</span>
                </div>
            </div>
        </section>

        {{-- Main Layout (Content Left, Sticky Booking Right) --}}
        <div class="detail-main-layout">
            {{-- Left Column: Tabs and Details --}}
            <div class="detail-content-area">
                <div class="detail-tabs-nav" role="tablist" aria-label="Informasi Destinasi">
                    <button class="detail-tab-btn active" role="tab" aria-selected="true" aria-controls="pane-deskripsi" id="tab-deskripsi">Deskripsi</button>
                    <button class="detail-tab-btn" role="tab" aria-selected="false" aria-controls="pane-fasilitas" id="tab-fasilitas">Fasilitas</button>
                    <button class="detail-tab-btn" role="tab" aria-selected="false" aria-controls="pane-ulasan" id="tab-ulasan">Ulasan</button>
                </div>

                {{-- Pane 1: Deskripsi --}}
                <div class="tab-pane active" id="pane-deskripsi" role="tabpanel" aria-labelledby="tab-deskripsi">
                    <h2>Tentang Destinasi</h2>
                    <p class="lead">
                        Kampung Jamur Eduwisata menawarkan pengalaman belajar interaktif mengenai siklus hidup fungi, teknik budidaya modern, dan pentingnya agrikultur berkelanjutan. Siswa akan diajak berkeliling fasilitas, praktik langsung membuat media tanam, hingga memanen jamur tiram putih.
                    </p>

                    {{-- EduQuest Box --}}
                    <div class="eduquest-card">
                        <div class="eduquest-header">
                            <span class="eduquest-badge-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                            </span>
                            <span>EduQuest: Misi Siswa</span>
                        </div>
                        <p class="eduquest-intro">Siswa akan diberikan buku jurnal untuk menyelesaikan misi berikut selama kunjungan:</p>
                        <div class="eduquest-tasks-grid">
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-green">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Identifikasi Fungi</h3>
                                    <p>Temukan dan catat 3 jenis jamur berbeda yang dibudidayakan di area rumah kaca.</p>
                                </div>
                            </div>
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-amber">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2v7.31L4.75 20.12A1.5 1.5 0 0 0 6.09 22h11.82a1.5 1.5 0 0 0 1.34-1.88L14 9.31V2"/><line x1="8" y1="2" x2="16" y2="2"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Analisis Media Tanam</h3>
                                    <p>Ukur suhu dan kelembaban baglog jamur, catat pada jurnal pengamatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Fasilitas & Termasuk --}}
                    <div class="included-facilities">
                        <h3>Fasilitas & Termasuk</h3>
                        <div class="included-list">
                            <div class="included-item">
                                <span class="included-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                                </span>
                                <span>Pemandu Edukasi</span>
                            </div>
                            <div class="included-item">
                                <span class="included-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10"/><path d="M6 10h10"/></svg>
                                </span>
                                <span>Modul & Jurnal Siswa</span>
                            </div>
                            <div class="included-item">
                                <span class="included-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 2v20"/><path d="M18 2a3 3 0 0 0-3 3v4a3 3 0 0 0 3 3"/><path d="M6 2v6a3 3 0 0 0 6 0V2"/><path d="M9 14v8"/></svg>
                                </span>
                                <span>Makan Siang</span>
                            </div>
                            <div class="included-item">
                                <span class="included-icon">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a4 4 0 0 0 8 0v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7Z"/><path d="M9 21h6"/></svg>
                                </span>
                                <span>Bibit Jamur Bawa Pulang</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pane 2: Fasilitas --}}
                <div class="tab-pane" id="pane-fasilitas" role="tabpanel" aria-labelledby="tab-fasilitas">
                    <h2>Fasilitas</h2>
                    <p class="lead">
                        Fasilitas yang tersedia meliputi area budidaya jamur, rumah produksi, ruang edukasi, area praktik, serta pendampingan oleh pengelola. Siswa dapat belajar secara langsung mengenai proses budidaya, pengelolaan usaha, dan pemanfaatan hasil panen dalam kegiatan yang interaktif dan aplikatif.
                    </p>

                    <h2>Fasilitas Utama</h2>
                    <div class="facilities-main-grid">
                        <div class="facility-pill">
                            <span class="fac-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17a4 4 0 0 0 8 0v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7Z"/></svg>
                            </span>
                            <span>Area Budidaya Jamur</span>
                        </div>
                        <div class="facility-pill">
                            <span class="fac-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
                            </span>
                            <span>Edukasi & Pendampingan</span>
                        </div>
                        <div class="facility-pill">
                            <span class="fac-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 2v20"/><path d="M18 2a3 3 0 0 0-3 3v4a3 3 0 0 0 3 3"/><path d="M6 2v6a3 3 0 0 0 6 0V2"/><path d="M9 14v8"/></svg>
                            </span>
                            <span>Gerai Makanan</span>
                        </div>
                        <div class="facility-pill">
                            <span class="fac-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="5" r="2"/><path d="m9 20 3-6 3 6"/><path d="M6 8a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v7h-3v5h-6v-5H6Z"/></svg>
                            </span>
                            <span>Toilet</span>
                        </div>
                        <div class="facility-pill">
                            <span class="fac-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m2 7 4.41-4.41A2 2 0 0 1 7.83 2h8.34a2 2 0 0 1 1.42.59L22 7"/><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><path d="M15 22v-4a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2v4"/><path d="M2 7h20"/></svg>
                            </span>
                            <span>Galeri Produk Olahan Jamur</span>
                        </div>
                    </div>

                    {{-- EduQuest card also in Fasilitas tab --}}
                    <div class="eduquest-card">
                        <div class="eduquest-header">
                            <span class="eduquest-badge-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                            </span>
                            <span>EduQuest: Misi Siswa</span>
                        </div>
                        <p class="eduquest-intro">Siswa akan diberikan buku jurnal untuk menyelesaikan misi berikut selama kunjungan:</p>
                        <div class="eduquest-tasks-grid">
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-green">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Identifikasi Fungi</h3>
                                    <p>Temukan dan catat 3 jenis jamur berbeda yang dibudidayakan di area rumah kaca.</p>
                                </div>
                            </div>
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-amber">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2v7.31L4.75 20.12A1.5 1.5 0 0 0 6.09 22h11.82a1.5 1.5 0 0 0 1.34-1.88L14 9.31V2"/><line x1="8" y1="2" x2="16" y2="2"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Analisis Media Tanam</h3>
                                    <p>Ukur suhu dan kelembaban baglog jamur, catat pada jurnal pengamatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Pane 3: Ulasan --}}
                <div class="tab-pane" id="pane-ulasan" role="tabpanel" aria-labelledby="tab-ulasan">
                    <h2>Ulasan</h2>
                    <div class="reviews-list">
                        <article class="review-card">
                            <div class="review-header">
                                <div class="review-author-info">
                                    <img class="review-avatar" src="{{ asset('images/figma/avatar-sri.webp') }}" alt="Ibu Sri Wahyuni" width="44" height="44" loading="lazy">
                                    <div>
                                        <h4>Ibu Sri Wahyuni</h4>
                                        <span>Guru Biologi SMP Tunas Harapan</span>
                                    </div>
                                </div>
                                <span class="review-rating"><span class="star">★</span> 5.0</span>
                            </div>
                            <p class="review-text">"Kunjungan ke Kampung Jamur Eduwisata sangat berkesan. Siswa-siswa sangat antusias saat praktik langsung menanam baglog. Pendampingan dari pengelola sangat profesional dan menjelaskan proses budidaya dengan detail."</p>
                        </article>

                        <article class="review-card">
                            <div class="review-header">
                                <div class="review-author-info">
                                    <img class="review-avatar" src="{{ asset('images/figma/avatar-rafi.webp') }}" alt="Rafi Alamsyah" width="44" height="44" loading="lazy">
                                    <div>
                                        <h4>Rafi Alamsyah</h4>
                                        <span>Siswa Kelas 8 SMP Trisakti</span>
                                    </div>
                                </div>
                                <span class="review-rating"><span class="star">★</span> 4.8</span>
                            </div>
                            <p class="review-text">"Saya suka banget saat melihat jamur tiram yang baru tumbuh. Makanan di gerai juga enak-enak, terutama olahan jamur krispi. Eduwisata ini sangat menyenangkan dan bermanfaat."</p>
                        </article>

                        <article class="review-card">
                            <div class="review-header">
                                <div class="review-author-info">
                                    <img class="review-avatar" src="{{ asset('images/figma/avatar-lestari.webp') }}" alt="Dra. Lestari" width="44" height="44" loading="lazy">
                                    <div>
                                        <h4>Dra. Lestari</h4>
                                        <span>Kepala Sekolah SD Mentari</span>
                                    </div>
                                </div>
                                <span class="review-rating"><span class="star">★</span> 5.0</span>
                            </div>
                            <p class="review-text">"Proses booking dan konfirmasi sangat mudah. EduTour membantu kami dalam mengelola logistik sehingga kunjungan berjalan lancar tanpa hambatan. Terima kasih!"</p>
                        </article>
                    </div>

                    {{-- EduQuest card also in Ulasan tab --}}
                    <div class="eduquest-card">
                        <div class="eduquest-header">
                            <span class="eduquest-badge-icon">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"/></svg>
                            </span>
                            <span>EduQuest: Misi Siswa</span>
                        </div>
                        <p class="eduquest-intro">Siswa akan diberikan buku jurnal untuk menyelesaikan misi berikut selama kunjungan:</p>
                        <div class="eduquest-tasks-grid">
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-green">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Identifikasi Fungi</h3>
                                    <p>Temukan dan catat 3 jenis jamur berbeda yang dibudidayakan di area rumah kaca.</p>
                                </div>
                            </div>
                            <div class="eduquest-task-item">
                                <span class="task-icon-circle task-icon-amber">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M10 2v7.31L4.75 20.12A1.5 1.5 0 0 0 6.09 22h11.82a1.5 1.5 0 0 0 1.34-1.88L14 9.31V2"/><line x1="8" y1="2" x2="16" y2="2"/></svg>
                                </span>
                                <div class="task-content">
                                    <h3>Analisis Media Tanam</h3>
                                    <p>Ukur suhu dan kelembaban baglog jamur, catat pada jurnal pengamatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Sticky Booking Widget Card --}}
            <aside class="booking-sidebar">
                <form class="booking-card" id="booking-form" onsubmit="event.preventDefault(); alert('Pengajuan jadwal kunjungan berhasil dicatat! Tim EduTour akan menghubungi Anda dalam 1x24 jam.');">
                    <div class="booking-card-header">
                        <h2>Rencanakan Kunjungan</h2>
                    </div>

                    <div class="booking-field">
                        <label class="booking-label" for="booking-date">Tanggal Rencana</label>
                        <div class="booking-date-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            <input type="date" id="booking-date" required style="border:none; outline:none; background:transparent; font:inherit; color:#0f172a; width:100%; cursor:pointer;">
                        </div>
                    </div>

                    <div class="booking-field">
                        <label class="booking-label" for="student-stepper">Jumlah Peserta (Min. 20)</label>
                        <div class="booking-stepper" id="student-stepper">
                            <button type="button" class="stepper-btn" id="btn-decrease" aria-label="Kurangi jumlah peserta">−</button>
                            <span class="stepper-val" id="participant-count-display">40 Siswa</span>
                            <button type="button" class="stepper-btn" id="btn-increase" aria-label="Tambah jumlah peserta">+</button>
                        </div>
                        <input type="hidden" id="participant-count" name="participants" value="40">
                    </div>

                    <div class="booking-field">
                        <label class="booking-label" for="grade-select">Tingkat Sekolah</label>
                        <select class="booking-select" id="grade-select" name="grade">
                            <option value="SD">SD</option>
                            <option value="SMP" selected>SMP</option>
                            <option value="SMA">SMA / SMK</option>
                        </select>
                    </div>

                    <div class="booking-total-row">
                        <span class="total-label">Estimasi Total</span>
                        <span class="total-amount" id="total-price-display">Rp 3.000.000</span>
                    </div>

                    <button type="submit" class="booking-submit-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                        <span>Ajukan Jadwal</span>
                    </button>

                    <p class="booking-footnote">Pembayaran dilakukan setelah konfirmasi jadwal.</p>
                </form>
            </aside>
        </div>

        {{-- Eksplorasi Serupa --}}
        <section class="similar-destinations-section">
            <h2>Eksplorasi Serupa</h2>
            <div class="similar-grid">
                @foreach ($similarDestinations as $item)
                    <article class="similar-card" onclick="window.location.href='{{ route('destinations.show') }}'">
                        <a href="{{ route('destinations.show') }}" class="similar-card-img-wrap" aria-label="{{ $item['title'] }}">
                            <img src="{{ asset('images/figma/' . $item['image']) }}" alt="{{ $item['title'] }}" width="380" height="180" loading="lazy" decoding="async">
                            <span class="similar-rating-badge"><span class="star">★</span> {{ $item['rating'] }}</span>
                        </a>
                        <div class="similar-card-body">
                            <span class="similar-category-tag">{{ $item['category'] }}</span>
                            <h3><a href="{{ route('destinations.show') }}" style="color:inherit; text-decoration:none;">{{ $item['title'] }}</a></h3>
                            <p class="similar-location">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                                {{ $item['location'] }}
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-main shell">
            <div class="footer-brand">
                <img src="{{ asset('images/figma/logo.png') }}" alt="EduTour" width="40" height="40">
                <h2>Solusi Perjalanan Edukasi<br>Terpadu untuk Sekolah Anda.</h2>
                <span>EduTour, 2026.</span>
            </div>
            <div class="footer-links">
                @foreach ($footerColumns as $heading => $items)
                    <div>
                        <h3>{{ $heading }}</h3>
                        @foreach ($items as $item)
                            <a href="{{ isset($item['route']) ? route($item['route']) : $item['url'] }}">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                @endforeach
                <div>
                    <h3>Social Media</h3>
                    <div class="social-links">
                        <a href="#instagram" aria-label="Instagram"><img src="{{ asset('images/figma/instagram.svg') }}" alt="" width="20" height="20"></a>
                        <a href="#facebook" aria-label="Facebook"><img src="{{ asset('images/figma/facebook.svg') }}" alt="" width="20" height="20"></a>
                        <a href="#twitter" aria-label="Twitter"><img src="{{ asset('images/figma/twitter.svg') }}" alt="" width="20" height="20"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-legal">
            <span>© 2026 EduTour. All rights reserved.</span>
            <div>
                <a href="#terms">Terms of Service</a>
                <a href="#privacy">Privacy Policy</a>
                <a href="#cookies">Cookies</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile navigation toggle
            const navToggle = document.querySelector('.nav-toggle');
            const mainNav = document.getElementById('main-navigation');
            if (navToggle && mainNav) {
                navToggle.addEventListener('click', function () {
                    const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
                    navToggle.setAttribute('aria-expanded', !isExpanded);
                    mainNav.classList.toggle('is-open');
                });
            }

            // Interactive Tabs
            const tabButtons = document.querySelectorAll('.detail-tab-btn');
            const tabPanes = document.querySelectorAll('.tab-pane');
            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active');
                        btn.setAttribute('aria-selected', 'false');
                    });
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    button.classList.add('active');
                    button.setAttribute('aria-selected', 'true');
                    const targetId = button.getAttribute('aria-controls');
                    const targetPane = document.getElementById(targetId);
                    if (targetPane) {
                        targetPane.classList.add('active');
                    }
                });
            });

            // Stepper and live price calculation
            const unitPrice = 75000;
            let participantCount = 40;
            const countDisplay = document.getElementById('participant-count-display');
            const hiddenInput = document.getElementById('participant-count');
            const totalDisplay = document.getElementById('total-price-display');
            const btnDecrease = document.getElementById('btn-decrease');
            const btnIncrease = document.getElementById('btn-increase');

            function formatRupiah(num) {
                return 'Rp ' + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            function updatePricing() {
                countDisplay.textContent = participantCount + ' Siswa';
                hiddenInput.value = participantCount;
                totalDisplay.textContent = formatRupiah(participantCount * unitPrice);
                btnDecrease.disabled = participantCount <= 20;
                btnDecrease.style.opacity = participantCount <= 20 ? '0.4' : '1';
            }

            btnDecrease.addEventListener('click', function () {
                if (participantCount > 20) {
                    participantCount -= 5;
                    updatePricing();
                }
            });

            btnIncrease.addEventListener('click', function () {
                if (participantCount < 500) {
                    participantCount += 5;
                    updatePricing();
                }
            });

            updatePricing();
        });
    </script>
</body>
</html>
