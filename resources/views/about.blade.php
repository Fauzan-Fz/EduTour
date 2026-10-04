@php
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



    $values = [
        [
            'icon' => 'shield',
            'title' => 'Keamanan & SOP Terstandar',
            'description' => 'Setiap destinasi dan armada transportasi melalui verifikasi ketat untuk memastikan keselamatan dan kenyamanan seluruh peserta didik.',
        ],
        [
            'icon' => 'book',
            'title' => 'Pembelajaran Kontekstual',
            'description' => 'Kunjungan diselaraskan dengan capaian kurikulum nyata, sehingga siswa tidak sekadar berwisata melainkan mengamati dan mempraktikkan ilmu.',
        ],
        [
            'icon' => 'check',
            'title' => 'Kemudahan Tanpa Repot',
            'description' => 'Mulai dari kurasi lokasi, perizinan, pengaturan transportasi, konsumsi, hingga lembar kerja siswa dikelola dalam satu platform terpadu.',
        ],
    ];

    $supporters = [
        ['image' => 'partner-jhic.webp', 'name' => 'JHIC Innovation'],
        ['image' => 'partner-jagoan-hosting.webp', 'name' => 'Jagoan Hosting'],
        ['image' => 'partner-komdigi.webp', 'name' => 'KOMDIGI'],
        ['image' => 'partner-garuda-spark.webp', 'name' => 'Garuda Spark'],
        ['image' => 'partner-ngalup.webp', 'name' => 'NGALUP.CO'],
    ];
@endphp
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tentang EduTour — Platform eduwisata terpadu yang menghubungkan pembelajaran sekolah dengan pengalaman nyata di industri, budaya, dan alam.">
    <title>Tentang Kami — EduTour</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;600&family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}?v={{ filemtime(public_path('css/about.css')) }}">
</head>
<body class="about-page">
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
                <a href="{{ route('destinations.index') }}">Destinasi</a>
                <a href="{{ route('how-it-works') }}">Cara Kerja</a>
                <a class="active" href="{{ route('about') }}">Tentang Kami</a>
            </nav>
            <a class="button button-small" href="{{ route('home') }}#masuk">Masuk</a>
        </div>
    </header>

    <main class="about-shell">
        {{-- Hero Section --}}
        <section class="about-hero">
            <div class="about-hero-content">
                <span class="about-eyebrow">TENTANG EDUTOUR</span>
                <h1>Menghubungkan Pembelajaran di Kelas dengan Pengalaman Nyata di Lapangan</h1>
                <p class="lead">
                    EduTour hadir untuk mendampingi sekolah dalam merancang dan menyelenggarakan kunjungan edukatif yang aman, terencana dengan baik, dan relevan dengan materi belajar siswa.
                </p>
                <div class="about-hero-actions">
                    <a href="{{ route('destinations.index') }}" class="btn-primary-pill">Jelajahi Destinasi</a>
                    <a href="{{ route('how-it-works') }}" class="btn-secondary-pill">Pelajari Cara Kerja</a>
                </div>
            </div>

            <div class="about-hero-visual">
                <div class="about-hero-card">
                    <div class="about-hero-img-wrap">
                        <img src="{{ asset('images/figma/hero-otsuka.webp') }}" alt="Kegiatan kunjungan edukasi siswa ke mitra industri" width="512" height="280" fetchpriority="high">
                    </div>
                    <div class="about-hero-caption">
                        <h3>Pengalaman Belajar Nyata untuk Siswa</h3>
                        <p>Menjadikan kegiatan di luar kelas sebagai sarana pengamatan langsung dan pemahaman materi yang berkesan.</p>
                    </div>
                </div>
            </div>
        </section>



        {{-- Story & Vision Section --}}
        <section class="about-story-section">
            <div class="about-story-header">
                <span class="about-eyebrow">LATAR BELAKANG KAMI</span>
                <h2>Membantu Guru dan Sekolah Menghidupkan Materi Pelajaran</h2>
            </div>
            <div class="about-story-body">
                <p>
                    Kami memahami bahwa merencanakan perjalanan belajar di luar kelas sering kali menuntut waktu dan tenaga ekstra bagi guru, mulai dari mencari mitra lokasi yang aman, menyusun lembar tugas yang sesuai kurikulum, hingga mengoordinasikan logistik perjalanan.
                </p>
                <p>
                    EduTour menjembatani kebutuhan tersebut dengan menyediakan kurasi destinasi terverifikasi, penyusunan rute kunjungan yang efisien, dan panduan lembar observasi siap pakai, sehingga para guru dapat berfokus mendampingi antusiasme belajar siswa.
                </p>
            </div>
        </section>

        {{-- Values Section --}}
        <section class="about-values-section">
            <div class="about-section-header">
                <span class="about-eyebrow">PRINSIP & NILAI KAMI</span>
                <h2>Komitmen Kami untuk Kualitas Pembelajaran</h2>
                <p>Setiap program kunjungan dibangun di atas standar keselamatan yang jelas dan kesinambungan materi edukasi.</p>
            </div>

            <div class="about-values-grid">
                @foreach ($values as $val)
                    <article class="about-value-card">
                        <div class="value-icon-wrap">
                            @if ($val['icon'] === 'shield')
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            @elseif ($val['icon'] === 'book')
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1-2.5-2.5Z"/><path d="M6 6h10"/><path d="M6 10h10"/></svg>
                            @elseif ($val['icon'] === 'check')
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                            @endif
                        </div>
                        <h3>{{ $val['title'] }}</h3>
                        <p>{{ $val['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Supporters Section --}}
        <section class="about-supporters-section">
            <span class="about-eyebrow">DIDUKUNG OLEH</span>
            <div class="about-supporters-grid">
                @foreach ($supporters as $sup)
                    <div class="about-supporter-item">
                        <img src="{{ asset('images/figma/' . $sup['image']) }}" alt="{{ $sup['name'] }}" loading="lazy">
                    </div>
                @endforeach
            </div>
        </section>

        {{-- CTA Banner --}}
        <section class="about-cta-banner">
            <div class="about-cta-content">
                <h2>Siap Merancang Kunjungan Edukasi Terbaik Bersama Kami?</h2>
                <p>Konsultasikan kebutuhan sekolah Anda untuk mendapatkan rekomendasi rute, destinasi edukatif, dan paket perjalanan yang terencana dengan baik.</p>
            </div>
            <div class="about-cta-actions">
                <a href="{{ route('destinations.index') }}" class="btn-cta-white">Jelajahi Destinasi</a>
                <a href="{{ route('how-it-works') }}" class="btn-cta-outline">Lihat Cara Kerja</a>
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

    <script src="{{ asset('js/landing.js') }}" defer></script>
</body>
</html>
