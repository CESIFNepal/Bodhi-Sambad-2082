<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BODHI SAMBAD 2026 — China in South Asia</title>
    <meta name="description" content="BODHI SAMBAD 2026 International Conference on China in South Asia | CESIF" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        bg: '#F7F4EF',
                        accent: '#D9A441',
                        charcoal: '#1D1D1B'
                    },
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif']
                    },
                    animation: {
                        marquee: 'marquee 25s linear infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        html { scroll-behavior: smooth; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Stop background scroll when modal or menu is open */
        body.lock-scroll { overflow: hidden; }

        /* Fallback for x-cloak */
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="min-h-screen bg-bg text-charcoal font-sans leading-relaxed flex flex-col">
    
    <header class="sticky top-0 z-[100] bg-white border-b border-gray-100 shadow-sm">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-lg font-bold">
                <span class="inline-block h-8 w-8 rounded-full bg-accent"></span>
                <span class="tracking-tight uppercase">BODHI SAMBAD 2026</span>
            </a>

            <button id="nav-toggle-btn" class="md:hidden p-2 rounded-lg bg-gray-50 border border-gray-200 focus:outline-none transition-colors active:bg-gray-200" aria-label="Toggle Menu">
                <svg id="svg-open" class="h-6 w-6 text-charcoal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="svg-close" class="hidden h-6 w-6 text-charcoal" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <nav class="hidden md:flex gap-8 text-sm font-bold uppercase tracking-widest">
                <a href="{{ route('home') }}#about" class="hover:text-accent transition">About</a>
                <a href="{{ route('home') }}#speakers" class="hover:text-accent transition">Speakers</a>
                <a href="{{ route('home') }}#schedule" class="hover:text-accent transition">Schedule</a>
                <a href="{{ route('home') }}#registration" class="bg-accent px-6 py-2 rounded-full text-white shadow-lg shadow-accent/20 transition hover:bg-accent/90">Register</a>
            </nav>
        </div>

        <div id="nav-menu-container" style="display: none;" class="md:hidden fixed inset-0 top-[70px] bg-white z-[110] overflow-y-auto">
            <nav class="flex flex-col p-8 space-y-8">
                <a href="{{ route('home') }}#about" class="mob-link text-2xl font-black text-charcoal border-b border-gray-100 pb-4">About</a>
                <a href="{{ route('home') }}#speakers" class="mob-link text-2xl font-black text-charcoal border-b border-gray-100 pb-4">Speakers</a>
                <a href="{{ route('home') }}#schedule" class="mob-link text-2xl font-black text-charcoal border-b border-gray-100 pb-4">Schedule</a>
                <a href="{{ route('home') }}#registration" class="mob-link w-full py-5 bg-accent text-white text-center rounded-2xl text-xl font-bold shadow-xl shadow-accent/40">Register Now</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 bg-white py-12 mt-auto">
        <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 md:flex-row md:items-start md:justify-between">
            <div class="max-w-md">
                <h3 class="text-lg font-bold text-charcoal leading-tight">Centre for Social Innovation and Foreign Policy (CESIF)</h3>
                <p class="mt-4 text-sm text-gray-600">Kathmandu, Nepal</p>
                <div class="mt-4 space-y-2 text-sm">
                    <p>Email: <a href="mailto:info@cesifnepal.org" class="text-accent font-bold hover:underline">info@cesifnepal.org</a></p>
                    <p>Web: <a href="https://www.cesifnepal.org" target="_blank" class="text-accent font-bold hover:underline">cesifnepal.org</a></p>
                </div>
            </div>
            <div class="text-sm text-gray-500 flex flex-col items-start md:items-end">
                <p class="font-bold text-charcoal mb-1 tracking-tight">BODHI SAMBAD 2026</p>
                <p>© {{ date('Y') }} CESIF. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // 1. HAMBURGER MENU LOGIC
            const toggleBtn = document.getElementById('nav-toggle-btn');
            const menuBox = document.getElementById('nav-menu-container');
            const openIcon = document.getElementById('svg-open');
            const closeIcon = document.getElementById('svg-close');
            const navLinks = document.querySelectorAll('.mob-link');

            if (toggleBtn && menuBox) {
                toggleBtn.addEventListener('click', function() {
                    if (menuBox.style.display === 'none' || menuBox.style.display === '') {
                        menuBox.style.display = 'block';
                        openIcon.classList.add('hidden');
                        closeIcon.classList.remove('hidden');
                        document.body.classList.add('lock-scroll');
                    } else {
                        menuBox.style.display = 'none';
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                        document.body.classList.remove('lock-scroll');
                    }
                });

                // Close menu when a link is clicked
                navLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        menuBox.style.display = 'none';
                        openIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                        document.body.classList.remove('lock-scroll');
                    });
                });
            }

            // 2. SPEAKER POPUP GLOBAL LISTENER
            window.addEventListener('open-speaker-modal', function(e) {
                const modal = document.getElementById('speaker-modal-root');
                if (!modal || !window.SPEAKERS) return;

                const speaker = window.SPEAKERS.find(s => String(s.id) === String(e.detail.id));
                
                if (speaker) {
                    const mImg = document.getElementById('modal-image');
                    const mName = document.getElementById('modal-name');
                    const mRole = document.getElementById('modal-role');
                    const mOrg = document.getElementById('modal-org');
                    const mBio = document.getElementById('modal-bio');

                    if(mImg) mImg.src = speaker.image_url;
                    if(mName) mName.innerText = speaker.name;
                    if(mRole) mRole.innerText = speaker.role;
                    if(mOrg) mOrg.innerText = speaker.organization;
                    if(mBio) mBio.innerText = speaker.bio || 'Biography coming soon...';
                    
                    modal.classList.remove('hidden');
                    document.body.classList.add('lock-scroll');
                }
            });

            // 3. GO TO TOP LOGIC
            const goToTopBtn = document.getElementById('go-to-top');
            if (goToTopBtn) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        goToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
                    } else {
                        goToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
                    }
                });

                goToTopBtn.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }
        });
    </script>
    
    <!-- Go To Top Button -->
    <button id="go-to-top" class="fixed bottom-6 right-6 z-40 p-3 rounded-full bg-accent text-white shadow-xl shadow-accent/40 opacity-0 pointer-events-none translate-y-4 transition-all duration-300 hover:bg-accent/90 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-accent" aria-label="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script src="{{ asset('js/site.js') }}"></script>
</body>
</html>