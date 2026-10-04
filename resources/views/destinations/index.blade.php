{{-- Data lokal menjaga struktur view tetap mudah dipindahkan ke controller atau query saat backend katalog siap. --}}
@php
    $subjects = [
        'Pendidikan Agama',
        'Pendidikan Pancasila',
        'Bahasa Indonesia',
        'Matematika',
        'IPAS',
        'Bahasa Inggris',
        'Seni Rupa',
        'Pendidikan Jasmani',
    ];

    // Nama file harus cocok dengan aset di public/images/figma agar gambar kartu tetap terpetakan.
    $destinations = [
        [
            'image' => 'filter-sd-kampung-jamur.webp',
            'title' => 'Kampung Jamur Edukatif',
            'location' => 'Batu, Jawa Timur',
            'rating' => '4.8',
            'price' => 'Rp75.000',
            'description' => 'Pelajari siklus hidup jamur, cara budidaya modern, dan pentingnya agrikultur berkelanjutan.',
            'tags' => ['SD', 'SMP'],
            'subjects' => ['Pendidikan Agama', 'IPAS', 'Bahasa Indonesia', 'Pendidikan Pancasila'],
        ],
        [
            'image' => 'filter-sd-museum-tubuh.webp',
            'title' => 'Museum Tubuh Interaktif',
            'location' => 'Surabaya, Jawa Timur',
            'rating' => '4.9',
            'price' => 'Rp120.000',
            'description' => 'Eksplorasi anatomi manusia secara interaktif. Museum terbesar di Asia yang menampilkan tubuh manusia.',
            'tags' => ['SD', 'SMP', 'SMA/SMK'],
            'subjects' => ['Pendidikan Agama', 'IPAS', 'Pendidikan Jasmani', 'Matematika'],
        ],
        [
            'image' => 'filter-sd-pabrik-perak.webp',
            'title' => 'Pabrik Perak Kotagede',
            'location' => 'Yogyakarta',
            'rating' => '4.7',
            'price' => 'Rp50.000',
            'description' => 'Kunjungan industri untuk memahami proses manufaktur kerajinan perak dari desain hingga produksi.',
            'tags' => ['SD', 'SMP', 'SMA/SMK'],
            'subjects' => ['Pendidikan Agama', 'Seni Rupa', 'Matematika', 'Pendidikan Pancasila'],
        ],
        [
            'image' => 'filter-sd-pusat-budaya.webp',
            'title' => 'Pusat Budaya Jawa',
            'location' => 'Surakarta, Jawa Tengah',
            'rating' => '4.6',
            'price' => 'Rp85.000',
            'description' => 'Program imersif mempelajari seni membatik, bermain gamelan, dan memahami nilai-nilai luhur.',
            'tags' => ['SD', 'SMP', 'SMA/SMK'],
            'subjects' => ['Pendidikan Agama', 'Seni Rupa', 'Pendidikan Pancasila', 'Bahasa Indonesia'],
        ],
    ];

    $footerColumns = [
        'Related Pages' => [
            ['label' => 'Beranda', 'route' => 'home'],
            ['label' => 'Destinasi', 'route' => 'destinations.index'],
            ['label' => 'Cara Kerja', 'route' => 'how-it-works'],
            ['label' => 'Tentang Kami', 'route' => 'about'],
        ],
    ];
@endphp
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jelajahi katalog destinasi edukatif EduTour berdasarkan jenjang, mata pelajaran, lokasi, dan kisaran harga.">
    <title>Destinasi — EduTour</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@500;600&family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}?v={{ filemtime(public_path('css/landing.css')) }}">
    <link rel="stylesheet" href="{{ asset('css/destinations.css') }}?v={{ filemtime(public_path('css/destinations.css')) }}">
</head>
<body class="destinations-page">
    {{-- Header memakai struktur yang sama dengan beranda agar navigasi dan spacing tetap konsisten. --}}
    <header class="site-header">
        <div class="nav-shell">
            <a class="brand" href="{{ route('home') }}" aria-label="EduTour beranda"><img src="{{ asset('images/figma/logo.png') }}" alt="" width="32" height="32"><span>EduTour</span></a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="main-navigation"><span></span><span></span><span></span><span class="sr-only">Buka menu</span></button>
            <nav id="main-navigation" class="main-navigation" aria-label="Navigasi utama"><a href="{{ route('home') }}">Beranda</a><a class="active" href="{{ route('destinations.index') }}">Destinasi</a><a href="{{ route('how-it-works') }}">Cara Kerja</a><a href="{{ route('about') }}">Tentang Kami</a></nav>
            <a class="button button-small" href="{{ route('destinations.index') }}">Katalog</a>
        </div>
    </header>

    {{-- Katalog memisahkan filter dan hasil; detail layout-nya dikelola oleh destinations.css. --}}
    <main class="destination-main">
        <section class="destination-catalog" id="katalog">
            <div class="shell destination-shell">
                <div class="destination-intro">
                    <span class="eyebrow">KATALOG DESTINASI EDUKATIF</span>
                    <h1>Jelajahi Destinasi</h1>
                    <p>Temukan pengalaman belajar nyata yang sesuai dengan jenjang, mata pelajaran, dan kebutuhan sekolah Anda.</p>
                </div>

                <div class="destination-layout">
                    <aside class="filter-card" aria-label="Filter destinasi">
                        <label class="filter-search">
                            <span class="sr-only">Cari destinasi</span>
                            <input type="search" id="catalog-search" placeholder="Cari destinasi..." autocomplete="off">
                            <span aria-hidden="true">⌕</span>
                        </label>

                        <fieldset class="filter-group">
                            <legend>JENJANG</legend>
                            <div class="level-options">
                                <button type="button" data-level="TK">TK</button>
                                <button type="button" class="selected" data-level="SD">SD</button>
                                <button type="button" data-level="SMP">SMP</button>
                                <button type="button" data-level="SMA/SMK">SMA/SMK</button>
                            </div>
                        </fieldset>

                        <fieldset class="filter-group">
                            <legend>MATA PELAJARAN</legend>
                            <div class="check-options">
                                @foreach ($subjects as $index => $subject)
                                    <label><input type="checkbox" data-subject="{{ $subject }}" @checked($index === 0)><span>{{ $subject }}</span></label>
                                @endforeach
                            </div>
                        </fieldset>

                        <fieldset class="filter-group">
                            <legend>LOKASI</legend>
                            <label class="select-control"><span class="sr-only">Pilih lokasi</span><select id="catalog-location"><option value="Semua Lokasi">Semua Lokasi</option><option value="Jawa Timur">Jawa Timur</option><option value="Yogyakarta">Yogyakarta</option><option value="Jawa Tengah">Jawa Tengah</option></select><span aria-hidden="true">⌄</span></label>
                        </fieldset>

                        <fieldset class="filter-group price-group">
                            <div class="filter-label-row"><legend>KISARAN HARGA</legend><button type="button" id="btn-reset-filter">Reset</button></div>
                            <div class="price-fields">
                                <label><span>Mulai</span><span class="price-input"><input type="text" id="price-min" placeholder="Rp 0"><b>⌾</b></span></label>
                                <label><span>Hingga</span><span class="price-input"><input type="text" id="price-max" placeholder="Rp 200.000"><b>⌾</b></span></label>
                            </div>
                        </fieldset>
                    </aside>

                    <section class="destination-results" aria-labelledby="destination-results-heading">
                        <div class="results-heading">
                            <div>
                                <span class="results-kicker" id="results-kicker">REKOMENDASI UNTUK SD</span>
                                <h2 id="destination-results-heading">Destinasi Terpilih</h2>
                            </div>
                            <span class="results-count" id="results-count">1.800+ destinasi</span>
                        </div>

                        <div class="destination-card-grid">
                            {{-- Setiap item data menghasilkan satu kartu; ubah data katalog di atas sebelum mengubah markup ini. --}}
                            @foreach ($destinations as $destination)
                                <article class="catalog-card" onclick="window.location.href='{{ route('destinations.show') }}'" data-title="{{ strtolower($destination['title']) }}" data-location="{{ strtolower($destination['location']) }}" data-price="{{ (int) preg_replace('/\D/', '', $destination['price']) }}" data-tags="{{ implode(',', $destination['tags']) }}" data-subjects="{{ implode(',', $destination['subjects'] ?? ['Pendidikan Agama']) }}">
                                    <a href="{{ route('destinations.show') }}" class="catalog-image-wrap" aria-label="{{ $destination['title'] }}">
                                        <img src="{{ asset('images/figma/' . $destination['image']) }}" alt="{{ $destination['title'] }}" class="catalog-image" width="406" height="192" loading="lazy" decoding="async">
                                        <div class="catalog-tags">@foreach ($destination['tags'] as $tag)<span>{{ $tag }}</span>@endforeach</div>
                                        <span class="catalog-rating">★ {{ $destination['rating'] }}</span>
                                    </a>
                                    <div class="catalog-card-body">
                                        <h3><a href="{{ route('destinations.show') }}">{{ $destination['title'] }}</a></h3>
                                        <p class="catalog-location"><img src="{{ asset('images/figma/location-muted.svg') }}" alt="" width="12" height="12">{{ $destination['location'] }}</p>
                                        <p class="catalog-description">{{ $destination['description'] }}</p>
                                        <div class="catalog-card-footer">
                                            <span>Mulai dari<strong>{{ $destination['price'] }}<small>/siswa</small></strong></span>
                                            <a href="{{ route('destinations.show') }}">Lihat Detail</a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            <div id="catalog-empty-state" class="catalog-empty-state" style="display: none;">
                                <p>Tidak ada destinasi yang cocok dengan filter yang dipilih.</p>
                                <button type="button" id="btn-empty-reset">Reset Filter</button>
                            </div>
                        </div>

                        <nav class="pagination" aria-label="Pagination destinasi">
                            <a href="#katalog" aria-label="Halaman sebelumnya">‹</a>
                            <a href="#katalog" class="current" aria-current="page">1</a>
                            <a href="#katalog">2</a>
                            <a href="#katalog">3</a>
                            <span>…</span>
                            <a href="#katalog">8</a>
                            <a href="#katalog" aria-label="Halaman berikutnya">›</a>
                        </nav>
                    </section>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer memakai komponen bersama dari landing.css sebagai acuan halaman beranda. --}}
    <footer class="site-footer">
        <div class="footer-main shell">
            <div class="footer-brand"><img src="{{ asset('images/figma/logo.png') }}" alt="EduTour" width="40" height="40"><h2>Solusi Perjalanan Edukasi<br>Terpadu untuk Sekolah Anda.</h2><span>EduTour, 2026.</span></div>
            <div class="footer-links">
                @foreach ($footerColumns as $heading => $items)
                    <div>
                        <h3>{{ $heading }}</h3>
                        @foreach ($items as $item)
                            <a href="{{ isset($item['route']) ? route($item['route']) : $item['url'] }}">{{ $item['label'] }}</a>
                        @endforeach
                    </div>
                @endforeach
                <div><h3>Social Media</h3><div class="social-links"><a href="#instagram" aria-label="Instagram"><img src="{{ asset('images/figma/instagram.svg') }}" alt="" width="20" height="20"></a><a href="#facebook" aria-label="Facebook"><img src="{{ asset('images/figma/facebook.svg') }}" alt="" width="20" height="20"></a><a href="#twitter" aria-label="Twitter"><img src="{{ asset('images/figma/twitter.svg') }}" alt="" width="20" height="20"></a></div></div>
            </div>
        </div>
        <div class="footer-legal"><span>© 2026 EduTour. All rights reserved.</span><div><a href="#terms">Terms of Service</a><a href="#privacy">Privacy Policy</a><a href="#cookies">Cookies</a></div></div>
    </footer>
    <script src="{{ asset('js/landing.js') }}" defer></script>
    <script src="{{ asset('js/destinations.js') }}" defer></script>
</body>
</html>
