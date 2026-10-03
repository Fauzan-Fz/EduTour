document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('catalog-search');
    const levelButtons = document.querySelectorAll('.level-options button');
    const subjectCheckboxes = document.querySelectorAll('.check-options input[type="checkbox"]');
    const locationSelect = document.getElementById('catalog-location');
    const priceMinInput = document.getElementById('price-min');
    const priceMaxInput = document.getElementById('price-max');
    const resetBtn = document.getElementById('btn-reset-filter');
    const cards = Array.from(document.querySelectorAll('.catalog-card'));
    const resultsKicker = document.getElementById('results-kicker');
    const resultsCount = document.getElementById('results-count');
    const emptyState = document.getElementById('catalog-empty-state');

    let activeLevel = 'SD'; // Default matches design

    function parsePrice(val) {
        if (!val) return null;
        const num = parseInt(val.replace(/\D/g, ''), 10);
        return isNaN(num) ? null : num;
    }

    function formatRupiahInput(input) {
        const val = input.value.replace(/\D/g, '');
        if (!val) {
            input.value = '';
            return;
        }
        input.value = 'Rp ' + parseInt(val, 10).toLocaleString('id-ID');
    }

    function applyFilters() {
        const query = searchInput ? searchInput.value.trim().toLowerCase() : '';
        const selectedLocation = locationSelect ? locationSelect.value.toLowerCase() : 'semua lokasi';
        
        const activeSubjects = [];
        subjectCheckboxes.forEach(cb => {
            if (cb.checked) {
                const subj = cb.getAttribute('data-subject') || cb.closest('label').innerText.trim();
                activeSubjects.push(subj.toLowerCase());
            }
        });

        const minPrice = priceMinInput ? parsePrice(priceMinInput.value) : null;
        const maxPrice = priceMaxInput ? parsePrice(priceMaxInput.value) : null;

        let visibleCount = 0;

        cards.forEach(card => {
            const title = (card.getAttribute('data-title') || '').toLowerCase();
            const location = (card.getAttribute('data-location') || '').toLowerCase();
            const description = (card.querySelector('.catalog-description')?.innerText || '').toLowerCase();
            const price = parseInt(card.getAttribute('data-price') || '0', 10);
            const tags = (card.getAttribute('data-tags') || '').split(',').map(t => t.trim());
            const subjects = (card.getAttribute('data-subjects') || '').toLowerCase().split(',').map(s => s.trim());

            // 1. Search Query filter
            let matchesQuery = true;
            if (query) {
                matchesQuery = title.includes(query) || location.includes(query) || description.includes(query);
            }

            // 2. Jenjang / Level filter
            let matchesLevel = true;
            if (activeLevel && activeLevel !== 'SEMUA') {
                matchesLevel = tags.some(tag => {
                    if (activeLevel === 'SMA/SMK') {
                        return tag.includes('SMA') || tag.includes('SMK');
                    }
                    return tag.toUpperCase() === activeLevel.toUpperCase();
                });
            }

            // 3. Location filter
            let matchesLocation = true;
            if (selectedLocation && selectedLocation !== 'semua lokasi') {
                matchesLocation = location.includes(selectedLocation);
            }

            // 4. Subject filter (if subjects checked, match at least one)
            let matchesSubject = true;
            if (activeSubjects.length > 0) {
                matchesSubject = activeSubjects.some(sub => subjects.includes(sub));
            }

            // 5. Price range filter
            let matchesPrice = true;
            if (minPrice !== null && price < minPrice) matchesPrice = false;
            if (maxPrice !== null && price > maxPrice) matchesPrice = false;

            const isVisible = matchesQuery && matchesLevel && matchesLocation && matchesSubject && matchesPrice;

            if (isVisible) {
                card.style.display = '';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Update kicker
        if (resultsKicker) {
            resultsKicker.textContent = activeLevel ? `REKOMENDASI UNTUK ${activeLevel}` : 'SEMUA REKOMENDASI';
        }

        // Update results counter
        if (resultsCount) {
            resultsCount.textContent = `${visibleCount} destinasi ditemukan`;
        }

        // Empty state toggle
        if (emptyState) {
            emptyState.style.display = visibleCount === 0 ? 'block' : 'none';
        }
    }

    // Event listeners
    if (searchInput) {
        searchInput.addEventListener('input', applyFilters);
    }

    levelButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const level = btn.getAttribute('data-level') || btn.textContent.trim();
            if (btn.classList.contains('selected')) {
                btn.classList.remove('selected');
                activeLevel = null;
            } else {
                levelButtons.forEach(b => b.classList.remove('selected'));
                btn.classList.add('selected');
                activeLevel = level;
            }
            applyFilters();
        });
    });

    subjectCheckboxes.forEach(cb => {
        cb.addEventListener('change', applyFilters);
    });

    if (locationSelect) {
        locationSelect.addEventListener('change', applyFilters);
    }

    let priceDebounceTimer = null;

    function handlePriceInput() {
        clearTimeout(priceDebounceTimer);
        // Menunggu jeda 1.5 detik (1-3 detik) setelah pengguna berhenti mengetik
        priceDebounceTimer = setTimeout(() => {
            if (priceMinInput) formatRupiahInput(priceMinInput);
            if (priceMaxInput) formatRupiahInput(priceMaxInput);
            applyFilters();
        }, 1500);
    }

    function handlePriceCommit() {
        clearTimeout(priceDebounceTimer);
        if (priceMinInput) formatRupiahInput(priceMinInput);
        if (priceMaxInput) formatRupiahInput(priceMaxInput);
        applyFilters();
    }

    if (priceMinInput) {
        priceMinInput.addEventListener('input', handlePriceInput);
        priceMinInput.addEventListener('blur', handlePriceCommit);
        priceMinInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                handlePriceCommit();
            }
        });
    }

    if (priceMaxInput) {
        priceMaxInput.addEventListener('input', handlePriceInput);
        priceMaxInput.addEventListener('blur', handlePriceCommit);
        priceMaxInput.addEventListener('keydown', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                handlePriceCommit();
            }
        });
    }

    function resetAllFilters() {
        clearTimeout(priceDebounceTimer);
        if (searchInput) searchInput.value = '';
        if (locationSelect) locationSelect.value = 'Semua Lokasi';
        if (priceMinInput) priceMinInput.value = '';
        if (priceMaxInput) priceMaxInput.value = '';
        
        subjectCheckboxes.forEach((cb, idx) => {
            cb.checked = idx === 0;
        });

        levelButtons.forEach(btn => {
            const level = btn.getAttribute('data-level') || btn.textContent.trim();
            if (level === 'SD') {
                btn.classList.add('selected');
                activeLevel = 'SD';
            } else {
                btn.classList.remove('selected');
            }
        });

        applyFilters();
    }

    if (resetBtn) {
        resetBtn.addEventListener('click', resetAllFilters);
    }

    const resetFilterAction = document.getElementById('btn-empty-reset');
    if (resetFilterAction) {
        resetFilterAction.addEventListener('click', resetAllFilters);
    }

    applyFilters();
});
