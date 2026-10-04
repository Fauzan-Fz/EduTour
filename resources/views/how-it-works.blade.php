@php
    $footerColumns = [
        'Related Pages' => [
            ['label' => 'Beranda', 'route' => 'home'],
            ['label' => 'Destinasi', 'route' => 'destinations.index'],
            ['label' => 'Cara Kerja', 'route' => 'how-it-works'],
            ['label' => 'Tentang Kami', 'route' => 'about'],
        ],
    ];

    $steps = [
        [
            'number' => '1',
            'title' => 'Konsultasi Tujuan',
            'description' => 'Diskusikan tujuan belajar, kelas, dan preferensi destinasi bersama tim EduTour untuk menemukan paket yang paling sesuai.',
            'tags' => ['Tujuan belajar', 'Paket destinasi'],
        ],
        [
            'number' => '2',
            'title' => 'Kelola Peserta & Dokumen',
            'description' => 'Daftarkan siswa, guru, dan pendamping, lalu unggah dokumen pendukung melalui dashboard yang mudah dipahami.',
            'tags' => ['Daftar peserta', 'Dokumen sekolah'],
        ],
        [
            'number' => '3',
            'title' => 'Eksekusi & Dukungan',
            'description' => 'EduTour menyiapkan logistik, akomodasi, dan pendampingan lapangan agar kegiatan berjalan aman dan terarah.',
            'tags' => ['Logistik', 'Pendampingan'],
        ],
    ];

    $benefits = [
        [
            'icon' => 'calendar',
            'title' => 'Perencanaan Lebih Cepat',
            'description' => 'EduTour membantu sekolah menentukan destinasi, jadwal, dan kebutuhan logistik dengan proses yang lebih singkat.',
        ],
        [
            'icon' => 'shield',
            'title' => 'Pengelolaan Lebih Aman',
            'description' => 'Semua data peserta, dokumen, dan konfirmasi kegiatan dapat dipantau dalam satu dashboard yang aman.',
        ],
        [
            'icon' => 'users',
            'title' => 'Dukungan 24/7',
            'description' => 'Tim EduTour siap membantu sebelum, saat, dan setelah kegiatan untuk memastikan kegiatan berjalan lancar.',
        ],
    ];
@endphp
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cara kerja EduTour yang mudah, terstruktur, dan siap digunakan oleh sekolah. Rencanakan, kelola, dan eksekusi perjalanan edukasi dengan lancar.">
    <title>Cara Kerja — EduTour</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;600&family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/how-it-works.css') }}?v={{ filemtime(public_path('css/how-it-works.css')) }}">
</head>
<body class="how-it-works-page">
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
                <a class="active" href="{{ route('how-it-works') }}">Cara Kerja</a>
                <a href="{{ route('home') }}#tentang">Tentang Kami</a>
            </nav>
            <a class="button button-small" href="{{ route('home') }}#masuk">Masuk</a>
        </div>
    </header>

    <main class="how-it-works-shell">
        {{-- Hero Section --}}
        <section class="how-hero">
            <div class="how-hero-content">
                <span class="tag-eyebrow">ALUR KERJA</span>
                <h1>Cara kerja EduTour yang mudah, terstruktur, dan siap digunakan oleh sekolah.</h1>
                <p class="lead">
                    EduTour membantu tim sekolah merencanakan, mengelola, dan mengeksekusi perjalanan edukasi dengan lebih cepat, transparan, dan terintegrasi.
                </p>
                <div class="how-hero-actions">
                    <a href="{{ route('destinations.index') }}" class="btn-primary-pill">Mulai Konsultasi</a>
                    <a href="{{ route('destinations.index') }}#katalog" class="btn-secondary-pill">Lihat Paket</a>
                </div>

                <div class="how-stats-grid">
                    <div class="how-stat-card">
                        <span class="how-stat-number">3</span>
                        <h2 class="how-stat-title">Langkah utama</h2>
                        <p class="how-stat-desc">Mulai dari konsultasi hingga eksekusi.</p>
                    </div>
                    <div class="how-stat-card">
                        <span class="how-stat-number">24/7</span>
                        <h2 class="how-stat-title">Dukungan operasional</h2>
                        <p class="how-stat-desc">Tim pendukung siap membantu sebelum, saat, dan setelah kegiatan.</p>
                    </div>
                    <div class="how-stat-card">
                        <span class="how-stat-number">1</span>
                        <h2 class="how-stat-title">Dashboard terpadu</h2>
                        <p class="how-stat-desc">Kelola destinasi, peserta, dan dokumen dalam satu tempat.</p>
                    </div>
                </div>
            </div>

            <div class="how-hero-visual">
                <div class="how-mockup-card">
                    <div class="how-mockup-img-wrap">
                        <img src="{{ asset('images/figma/cara-kerja-dashboard.webp') }}" alt="Dashboard terpadu untuk sekolah" width="456" height="388" fetchpriority="high">
                    </div>
                    <div class="how-mockup-caption">
                        <h3>Dashboard terpadu untuk sekolah</h3>
                        <p>Pantau destinasi, peserta, dan dokumen dengan mudah tanpa perlu berpindah aplikasi.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section 2: 3-Step Process --}}
        <section class="how-steps-section">
            <div class="how-section-header">
                <span class="tag-eyebrow">ALUR KERJA</span>
                <h2>Bagaimana EduTour membantu sekolah Anda?</h2>
                <p>Kami menyederhanakan proses perencanaan, pengelolaan, dan eksekusi perjalanan edukasi agar tim sekolah bisa fokus pada pengalaman belajar siswa.</p>
            </div>

            <div class="how-steps-grid">
                @foreach ($steps as $step)
                    <article class="how-step-card">
                        <span class="how-step-badge">{{ $step['number'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['description'] }}</p>
                        <div class="how-step-tags">
                            @foreach ($step['tags'] as $tag)
                                <span class="how-step-tag">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- Section 3: Benefits --}}
        <section class="how-benefits-section">
            <div class="how-section-header">
                <span class="tag-eyebrow">MANFAAT UNTUK SEKOLAH</span>
                <h2>Lebih cepat, lebih transparan, dan lebih terstruktur.</h2>
            </div>

            <div class="how-benefits-grid">
                @foreach ($benefits as $benefit)
                    <article class="how-benefit-card">
                        <div class="benefit-icon-wrap">
                            @if ($benefit['icon'] === 'calendar')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="18" height="18" x="3" y="4" rx="2" ry="2"/><line x1="16" x2="16" y1="2" y2="6"/><line x1="8" x2="8" y1="2" y2="6"/><line x1="3" x2="21" y1="10" y2="10"/></svg>
                            @elseif ($benefit['icon'] === 'shield')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            @elseif ($benefit['icon'] === 'users')
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                            @endif
                        </div>
                        <h3>{{ $benefit['title'] }}</h3>
                        <p>{{ $benefit['description'] }}</p>
                    </article>
                @endforeach
            </div>
        </section>

        {{-- CTA Banner --}}
        <section class="how-cta-banner">
            <div class="how-cta-content">
                <h2>Siap membawa perjalanan edukasi sekolah Anda ke level berikutnya?</h2>
                <p>Mulai konsultasi gratis untuk menemukan paket destinasi dan layanan pendukung yang paling sesuai dengan kebutuhan sekolah Anda.</p>
            </div>
            <div class="how-cta-actions">
                <a href="{{ route('destinations.index') }}" class="btn-cta-white">Konsultasi Sekarang</a>
                <a href="{{ route('destinations.index') }}#katalog" class="btn-cta-outline">Lihat Paket</a>
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
