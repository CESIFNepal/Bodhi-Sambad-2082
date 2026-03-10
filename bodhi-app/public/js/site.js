// Site-wide JavaScript for smooth scrolling and speaker detail modal
// -----------------------------------------------------------------------------

function safeQuerySelector(selector) {
    try {
        return document.querySelector(selector);
    } catch {
        return null;
    }
}

function safeQuerySelectorAll(selector) {
    try {
        return Array.from(document.querySelectorAll(selector));
    } catch {
        return [];
    }
}

function scrollToHashOnLoad() {
    if (!window.location.hash) return;
    const id = window.location.hash;
    const target = safeQuerySelector(id);
    if (!target) return;

    // Ensure the page has rendered before scrolling.
    window.setTimeout(() => {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 80);
}

function setupSmoothScroll() {
    const links = safeQuerySelectorAll('a[href^="#"]');
    links.forEach((link) => {
        link.addEventListener('click', (event) => {
            const href = link.getAttribute('href');
            if (!href || href === '#') return;

            // If this is a same-page anchor, prevent full navigation.
            const isSamePage = link.pathname === window.location.pathname;
            const isHashLink = href.startsWith('#');
            if (isHashLink || isSamePage) {
                const target = safeQuerySelector(href);
                if (!target) return;

                event.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });

                // Update hash so the back button works.
                history.replaceState(null, '', href);
            }
        });
    });
}

function setupMobileMenu() {
    const toggle = safeQuerySelector('#mobile-menu-toggle');
    const menu = safeQuerySelector('#mobile-menu');
    if (!toggle || !menu) return;

    const setExpanded = (open) => {
        toggle.setAttribute('aria-expanded', String(open));
    };

    toggle.addEventListener('click', () => {
        const isOpen = !menu.classList.contains('hidden');
        menu.classList.toggle('hidden');
        setExpanded(!isOpen);
    });

    // Close menu on navigation link click
    const links = safeQuerySelectorAll('#mobile-menu a');
    links.forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            setExpanded(false);
        });
    });

    // Close menu on Escape key
    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !menu.classList.contains('hidden')) {
            menu.classList.add('hidden');
            setExpanded(false);
        }
    });
}

function getSpeakerMap() {
    const list = window.SPEAKERS || [];
    return Array.isArray(list) ? list.reduce((acc, speaker) => {
        if (speaker && speaker.id) acc[speaker.id] = speaker;
        return acc;
    }, {}) : {};
}

function openSpeakerModal(speakerId) {
    const speakerMap = getSpeakerMap();
    const speaker = speakerMap[speakerId];
    if (!speaker) return;

    const modal = safeQuerySelector('#speaker-modal');
    const image = safeQuerySelector('#speaker-modal-image');
    const roleEl = safeQuerySelector('#speaker-modal-role');
    const nameEl = safeQuerySelector('#speaker-modal-name');
    const titleEl = safeQuerySelector('#speaker-modal-title');
    const bioEl = safeQuerySelector('#speaker-modal-bio');

    if (!modal || !image || !roleEl || !nameEl || !titleEl || !bioEl) return;

    image.src = speaker.image_url || '';
    image.alt = speaker.name || '';
    roleEl.textContent = speaker.role || '';
    nameEl.textContent = speaker.name || '';
    titleEl.textContent = speaker.organization || '';
    bioEl.textContent = speaker.bio || '';

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeSpeakerModal() {
    const modal = safeQuerySelector('#speaker-modal');
    if (!modal) return;
    modal.classList.add('hidden');
    document.body.style.overflow = '';
}

function setupSpeakerModalInteractions() {
    const speakerCards = safeQuerySelectorAll('[data-speaker-id]');
    speakerCards.forEach((card) => {
        const speakerId = card.getAttribute('data-speaker-id');
        if (!speakerId) return;

        card.addEventListener('click', () => openSpeakerModal(speakerId));
        card.addEventListener('keydown', (event) => {
            if (event.key === 'Enter' || event.key === ' ') {
                event.preventDefault();
                openSpeakerModal(speakerId);
            }
        });
    });

    const modal = safeQuerySelector('#speaker-modal');
    const closeBtn = safeQuerySelector('#speaker-modal-close');

    if (modal) {
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                closeSpeakerModal();
            }
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeSpeakerModal);
    }

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeSpeakerModal();
        }
    });
}

function init() {
    setupSmoothScroll();
    scrollToHashOnLoad();
    setupSpeakerModalInteractions();
    setupMobileMenu();
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
} else {
    init();
}
