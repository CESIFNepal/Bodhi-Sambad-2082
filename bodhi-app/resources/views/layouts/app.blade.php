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
<body class="min-h-screen bg-bg text-charcoal font-sans leading-relaxed flex flex-col pb-24 md:pb-0">
    
    <header class="sticky top-0 z-[100] bg-white border-b border-gray-100 shadow-sm">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-lg font-bold">
                <span class="inline-block h-8 w-8 rounded-full bg-accent"></span>
                <span class="tracking-tight uppercase">BODHI SAMBAD 2026</span>
            </a>

            <nav class="hidden md:flex gap-8 text-sm font-bold uppercase tracking-widest">
                <a href="{{ route('home') }}#about" class="hover:text-accent transition">About</a>
                <a href="{{ route('home') }}#speakers" class="hover:text-accent transition">Speakers</a>
                <a href="{{ route('home') }}#schedule" class="hover:text-accent transition">Schedule</a>
                <a href="{{ route('home') }}#registration" class="bg-accent px-6 py-2 rounded-full text-white shadow-lg shadow-accent/20 transition hover:bg-accent/90">Register</a>
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
            
            // 1. MOBILE DOCK SMOOTH SCROLL LOGIC
            const dockLinks = document.querySelectorAll('.dock-link');
            dockLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Only smooth scroll if we are on the home page (where targets exist).
                    if(window.location.pathname === '/' || window.location.pathname === '') {
                        const targetId = this.getAttribute('href').split('#')[1];
                        if (targetId) {
                            const targetElement = document.getElementById(targetId);
                            if (targetElement) {
                                e.preventDefault();
                                const headerOffset = 70;
                                const elementPosition = targetElement.getBoundingClientRect().top;
                                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
                                
                                window.scrollTo({
                                    top: offsetPosition,
                                    behavior: 'smooth'
                                });
                            }
                        }
                    }
                });
            });

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

    <!-- Mobile Bottom Navigation Dock -->
    <nav id="mobile-bottom-dock" class="md:hidden fixed bottom-0 left-0 right-0 z-[100] bg-white/90 backdrop-blur-md border-t border-gray-200">
        <ul class="flex items-center justify-around px-2 py-3">
            <li>
                <a href="{{ route('home') }}#about" class="dock-link flex flex-col items-center gap-1 text-charcoal hover:text-accent transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-[10px] font-bold uppercase tracking-wider">About</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}#speakers" class="dock-link flex flex-col items-center gap-1 text-charcoal hover:text-accent transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="text-[10px] font-bold uppercase tracking-wider">Speakers</span>
                </a>
            </li>
            <li>
                <a href="{{ route('home') }}#schedule" class="dock-link flex flex-col items-center gap-1 text-charcoal hover:text-accent transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span class="text-[10px] font-bold uppercase tracking-wider">Schedule</span>
                </a>
            </li>
            <li class="pl-2 border-l border-gray-200">
                <a href="{{ route('home') }}#registration" class="dock-link flex flex-col items-center justify-center rounded-xl bg-charcoal px-4 py-2 text-white shadow-sm hover:bg-gray-800 transition-colors">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-accent">Register</span>
                </a>
            </li>
        </ul>
    </nav>
    
    <!-- Go To Top Button (Hidden on Mobile) -->
    <button id="go-to-top" class="hidden md:block fixed bottom-6 right-6 z-40 p-3 rounded-full bg-accent text-white shadow-xl shadow-accent/40 opacity-0 pointer-events-none translate-y-4 transition-all duration-300 hover:bg-accent/90 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-accent" aria-label="Go to top">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 15l7-7 7 7" />
        </svg>
    </button>

    <script src="{{ asset('js/site.js') }}"></script>
</body>
</html>