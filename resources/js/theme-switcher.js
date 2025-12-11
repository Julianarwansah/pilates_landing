// Theme Switcher for Light/Dark Mode
(function () {
    const THEME_KEY = 'pilates-theme';
    const DARK_CLASS = 'dark';

    // Get saved theme or default to dark
    const savedTheme = localStorage.getItem(THEME_KEY) || 'dark';

    // Apply theme on page load
    if (savedTheme === 'dark') {
        document.documentElement.classList.add(DARK_CLASS);
    }

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('theme-toggle');

        if (toggleBtn) {
            // Update button icon based on current theme
            updateToggleIcon(toggleBtn, savedTheme);

            // Add click handler
            toggleBtn.addEventListener('click', function () {
                const isDark = document.documentElement.classList.contains(DARK_CLASS);

                if (isDark) {
                    document.documentElement.classList.remove(DARK_CLASS);
                    localStorage.setItem(THEME_KEY, 'light');
                    updateToggleIcon(toggleBtn, 'light');
                } else {
                    document.documentElement.classList.add(DARK_CLASS);
                    localStorage.setItem(THEME_KEY, 'dark');
                    updateToggleIcon(toggleBtn, 'dark');
                }
            });
        }
    });

    function updateToggleIcon(btn, theme) {
        if (theme === 'dark') {
            btn.innerHTML = `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                </svg>
            `;
        } else {
            btn.innerHTML = `
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                </svg>
            `;
        }
    }
})();
