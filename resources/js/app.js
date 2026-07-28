/*
|--------------------------------------------------------------------------
| RS UMMI Landing Page — JavaScript
|--------------------------------------------------------------------------
|
| Entry point untuk:
| - Alpine.js (interaktivitas ringan)
| - Bootstrap JS (navbar toggler, dropdowns)
|
*/

// Bootstrap JS (includes Popper)
import * as bootstrap from 'bootstrap';

// Alpine.js
import Alpine from 'alpinejs';

// ─── ALPINE COMPONENTS ─────────────────────────────────────────────────────────

/**
 * Navbar: Menambahkan shadow saat user scroll ke bawah.
 * Menggunakan Alpine.js x-data untuk reactive state.
 */
Alpine.data('navbar', () => ({
    scrolled: false,

    init() {
        // Check initial scroll position (e.g. user refreshed mid-page)
        this.scrolled = window.scrollY > 50;

        // Listen for scroll events with passive flag for performance
        window.addEventListener('scroll', () => {
            this.scrolled = window.scrollY > 50;
        }, { passive: true });
    }
}));

// ─── START ALPINE ───────────────────────────────────────────────────────────────

window.Alpine = Alpine;
Alpine.start();
