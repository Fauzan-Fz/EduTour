document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('.nav-toggle');
    const navigation = document.querySelector('.main-navigation');

    if (!toggle || !navigation) return;

    // Sinkronkan status menu dengan ARIA agar perubahan navigasi mobile terbaca oleh teknologi bantu.
    toggle.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    // Tutup menu setelah berpindah anchor agar konten tujuan tidak tertutup panel mobile.
    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            navigation.classList.remove('open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
});
