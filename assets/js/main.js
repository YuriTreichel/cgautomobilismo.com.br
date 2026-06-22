document.addEventListener('DOMContentLoaded', () => {
    // ----------------------------------------------------
    // 1. Mobile Menu Toggling
    // ----------------------------------------------------
    const menuToggle = document.getElementById('menu-toggle');
    const mainNav = document.getElementById('main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.contains('open');
            mainNav.classList.toggle('open');
            menuToggle.classList.toggle('open');
            menuToggle.setAttribute('aria-expanded', !isOpen);
        });
    }

    // Header Shrink on Scroll
    const header = document.getElementById('site-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // ----------------------------------------------------
    // 2. Accessibility Widget Logic & Persistence
    // ----------------------------------------------------
    const widgetBtn = document.getElementById('access-widget-btn');
    const panel = document.getElementById('accessibility-panel');
    
    // Toggle panel view
    if (widgetBtn && panel) {
        widgetBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = panel.classList.contains('open');
            panel.classList.toggle('open');
            widgetBtn.setAttribute('aria-expanded', !isOpen);
        });

        // Close panel if clicked outside
        document.addEventListener('click', (e) => {
            if (!panel.contains(e.target) && e.target !== widgetBtn && !widgetBtn.contains(e.target)) {
                panel.classList.remove('open');
                widgetBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // High Contrast Setup
    const btnContrastNormal = document.getElementById('acc-contrast-normal');
    const btnContrastHigh = document.getElementById('acc-contrast-high');

    function setContrastMode(isHigh) {
        if (isHigh) {
            document.body.classList.add('high-contrast');
            if (btnContrastHigh) btnContrastHigh.classList.add('active');
            if (btnContrastNormal) btnContrastNormal.classList.remove('active');
            localStorage.setItem('accessibility-contrast', 'high');
        } else {
            document.body.classList.remove('high-contrast');
            if (btnContrastNormal) btnContrastNormal.classList.add('active');
            if (btnContrastHigh) btnContrastHigh.classList.remove('active');
            localStorage.setItem('accessibility-contrast', 'normal');
        }
    }

    if (btnContrastNormal && btnContrastHigh) {
        btnContrastNormal.addEventListener('click', () => setContrastMode(false));
        btnContrastHigh.addEventListener('click', () => setContrastMode(true));
    }

    // Font Size Resizing Setup
    const btnFontDec = document.getElementById('acc-font-decrease');
    const btnFontNorm = document.getElementById('acc-font-normal');
    const btnFontInc = document.getElementById('acc-font-increase');
    
    let fontScale = parseFloat(localStorage.getItem('accessibility-font-scale')) || 1.0;

    function applyFontScale(scale) {
        fontScale = scale;
        document.documentElement.style.setProperty('--font-scale', fontScale);
        localStorage.setItem('accessibility-font-scale', fontScale);
        
        // Adjust active button state in widget
        if (btnFontDec && btnFontNorm && btnFontInc) {
            btnFontDec.classList.remove('active');
            btnFontNorm.classList.remove('active');
            btnFontInc.classList.remove('active');

            if (fontScale < 1.0) btnFontDec.classList.add('active');
            else if (fontScale > 1.0) btnFontInc.classList.add('active');
            else btnFontNorm.classList.add('active');
        }
    }

    if (btnFontDec && btnFontNorm && btnFontInc) {
        btnFontDec.addEventListener('click', () => applyFontScale(Math.max(0.8, fontScale - 0.1)));
        btnFontNorm.addEventListener('click', () => applyFontScale(1.0));
        btnFontInc.addEventListener('click', () => applyFontScale(Math.min(1.4, fontScale + 0.1)));
    }

    // Dyslexic Font Setup
    const btnFontStd = document.getElementById('acc-font-std');
    const btnFontDys = document.getElementById('acc-font-dyslexic');

    function setDyslexicFont(isDyslexic) {
        if (isDyslexic) {
            document.body.classList.add('dyslexic-friendly');
            if (btnFontDys) btnFontDys.classList.add('active');
            if (btnFontStd) btnFontStd.classList.remove('active');
            localStorage.setItem('accessibility-dyslexic', 'true');
        } else {
            document.body.classList.remove('dyslexic-friendly');
            if (btnFontStd) btnFontStd.classList.add('active');
            if (btnFontDys) btnFontDys.classList.remove('active');
            localStorage.setItem('accessibility-dyslexic', 'false');
        }
    }

    if (btnFontStd && btnFontDys) {
        btnFontStd.addEventListener('click', () => setDyslexicFont(false));
        btnFontDys.addEventListener('click', () => setDyslexicFont(true));
    }

    // Load saved accessibility presets
    if (localStorage.getItem('accessibility-contrast') === 'high') {
        setContrastMode(true);
    }
    if (fontScale !== 1.0) {
        applyFontScale(fontScale);
    }
    if (localStorage.getItem('accessibility-dyslexic') === 'true') {
        setDyslexicFont(true);
    }

    // Keyboard Access Keys (Alt + 1, Alt + 2, etc.)
    window.addEventListener('keydown', (e) => {
        // Alt + 1: Home
        if (e.altKey && e.key === '1') {
            window.location.href = 'index.html';
        }
        // Alt + 2: Sobre
        if (e.altKey && e.key === '2') {
            window.location.href = 'sobre.html';
        }
        // Alt + 3: Transparência
        if (e.altKey && e.key === '3') {
            window.location.href = 'transparencia.html';
        }
        // Alt + 4: Patrocinadores
        if (e.altKey && e.key === '4') {
            window.location.href = 'patrocinadores.html';
        }
        // Alt + 5: Acessibilidade
        if (e.altKey && e.key === '5') {
            window.location.href = 'acessibilidade.html';
        }
        // Alt + 6: Contato
        if (e.altKey && e.key === '6') {
            window.location.href = 'contato.html';
        }
        // Alt + C: Toggle Contrast
        if (e.altKey && (e.key === 'c' || e.key === 'C')) {
            const isHigh = document.body.classList.contains('high-contrast');
            setContrastMode(!isHigh);
        }
    });

    // ----------------------------------------------------
    // 3. Transparency Accordions
    // ----------------------------------------------------
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    accordionHeaders.forEach(header => {
        header.addEventListener('click', () => {
            const item = header.parentElement;
            const content = header.nextElementSibling;
            const isOpen = item.classList.contains('active');
            
            // Close all items first (optional, for accordion effect)
            document.querySelectorAll('.accordion-item').forEach(accItem => {
                accItem.classList.remove('active');
                accItem.querySelector('.accordion-content').style.maxHeight = null;
                accItem.querySelector('.accordion-header').setAttribute('aria-expanded', 'false');
            });
            
            if (!isOpen) {
                item.classList.add('active');
                content.style.maxHeight = content.scrollHeight + 'px';
                header.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // ----------------------------------------------------
    // 4. Newsletter Form Action
    // ----------------------------------------------------
    const newsletterForm = document.getElementById('newsletter-form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', () => {
            const emailInput = document.getElementById('newsletter-email');
            alert(`Obrigado! O e-mail ${emailInput.value} foi cadastrado com sucesso.`);
            emailInput.value = '';
        });
    }
});
