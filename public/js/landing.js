document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (!toggle || !navigation) return;

    // Sinkronkan status menu dengan class open/is-open dan ARIA
    toggle.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = navigation.classList.toggle('open');
        navigation.classList.toggle('is-open', isOpen);
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    // Tutup menu jika pengguna mengklik di luar area navigasi
    document.addEventListener('click', (e) => {
        if (!navigation.contains(e.target) && !toggle.contains(e.target)) {
            navigation.classList.remove('open');
            navigation.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Tutup menu setelah berpindah halaman atau link
    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navigation.classList.remove('open');
            navigation.classList.remove('is-open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
});
