<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BODHI SAMBAD 2026 — China in South Asia</title>
    <meta name="description" content="BODHI SAMBAD 2026 International Conference on China in South Asia | CESIF" />

    <!-- Tailwind via CDN -->
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
        html {
            scroll-behavior: smooth;
        }

        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="min-h-screen bg-bg text-charcoal font-sans leading-relaxed flex flex-col">
    <header class="sticky top-0 z-30 bg-white/80 backdrop-blur">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-lg font-semibold tracking-wide">
                <span class="inline-block h-10 w-10 rounded-full bg-accent/90"></span>
                <span>BODHI SAMBAD 2026</span>
            </a>

            <nav class="hidden gap-6 text-sm font-medium md:flex">
                <a href="{{ route('home') }}#about" class="text-charcoal hover:text-accent transition">About</a>
                <a href="{{ route('home') }}#speakers" class="text-charcoal hover:text-accent transition">Speakers</a>
                <a href="{{ route('home') }}#schedule" class="text-charcoal hover:text-accent transition">Schedule</a>
                <a href="{{ route('home') }}#registration" class="rounded-full bg-accent px-4 py-2 text-sm font-semibold text-white shadow-sm shadow-accent/30 transition hover:bg-accent/90">Register</a>
            </nav>

            <button id="mobile-menu-toggle" class="md:hidden rounded-lg border border-gray-200 p-2 text-charcoal focus:outline-none focus:ring-2 focus:ring-accent" aria-label="Toggle navigation" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <div id="mobile-menu" class="hidden border-t border-gray-200 bg-white/95 px-4 pb-4">
            <nav class="flex flex-col gap-3 pt-4">
                <a href="{{ route('home') }}#about" class="text-base font-medium text-charcoal hover:text-accent">About</a>
                <a href="{{ route('home') }}#speakers" class="text-base font-medium text-charcoal hover:text-accent">Speakers</a>
                <a href="{{ route('home') }}#schedule" class="text-base font-medium text-charcoal hover:text-accent">Schedule</a>
                <a href="{{ route('home') }}#registration" class="inline-flex w-full items-center justify-center rounded-full bg-accent px-4 py-2 text-base font-semibold text-white shadow-sm shadow-accent/30">Register</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="border-t border-gray-200 bg-white py-10 mt-auto">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-4 md:flex-row md:items-start md:justify-between">
            <div>
                <h3 class="text-lg font-semibold text-charcoal">Centre for Social Innovation and Foreign Policy (CESIF)</h3>
                <p class="mt-3 text-sm text-gray-700">Kathmandu, Nepal</p>
                <p class="mt-1 text-sm text-gray-700">Email: <a href="mailto:info@cesifnepal.org" class="text-accent hover:underline">info@cesifnepal.org</a></p>
                <p class="mt-1 text-sm text-gray-700">Web: <a href="https://www.cesifnepal.org" class="text-accent hover:underline" target="_blank" rel="noopener">www.cesifnepal.org</a></p>
            </div>
            <div class="text-sm text-gray-500">
                <p>© {{ date('Y') }} CESIF. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/site.js') }}"></script>
</body>
</html>
