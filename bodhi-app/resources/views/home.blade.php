@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-bg to-white shadow-md md:pt-14 mx-4 md:mx-auto max-w-7xl rounded-3xl mt-6">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?auto=format&fit=crop&w=1600&q=80" alt="Kathmandu skyline" class="h-full w-full object-cover opacity-20" />
        </div>
        <div class="relative mx-auto max-w-6xl px-6 py-16 md:py-24 text-center md:text-left">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 rounded-full bg-accent/20 px-4 py-1 text-sm font-semibold text-accent shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-accent"></span>
                    International Conference
                </p>
                <h1 class="mt-6 text-3xl font-extrabold tracking-tight text-charcoal sm:text-6xl drop-shadow-sm leading-tight">
                    BODHI SAMBAD 2026
                </h1>
                <p class="mt-6 text-lg md:text-xl text-gray-800 font-medium">
                    China in South Asia: Navigating geopolitics, economics, and regional cooperation.
                </p>

                <div class="mt-8 flex flex-col sm:flex-row flex-wrap gap-4 items-center justify-center md:justify-start">
                    <a href="#registration" class="w-full sm:w-auto inline-flex items-center justify-center rounded-full bg-accent px-8 py-4 text-sm font-bold tracking-wide text-white shadow-xl shadow-accent/40 transition-transform hover:scale-105 hover:bg-accent/90">
                        Register Now
                    </a>
                    <div class="flex flex-col sm:flex-row items-center gap-4 text-sm font-semibold text-gray-800 bg-white/60 backdrop-blur-md px-6 py-3 rounded-2xl sm:rounded-full shadow-sm">
                        <span class="flex items-center gap-2">
                            <span class="inline-flex h-2.5 w-2.5 rounded-full bg-accent"></span>
                            Jun 18–22, 2026
                        </span>
                        <span class="hidden sm:block border-l border-gray-300 h-4"></span>
                        <span class="flex items-center gap-2">
                            <span class="inline-flex h-2.5 w-2.5 rounded-full bg-accent"></span>
                            Kathmandu, Nepal
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="mx-auto max-w-6xl px-4 mt-20 md:mt-24 scroll-mt-24">
        <div class="grid gap-12 md:grid-cols-2 md:items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-charcoal relative inline-block">
                    Why BODHI SAMBAD?
                    <div class="absolute -bottom-2 left-0 h-1 w-1/3 bg-accent rounded-full"></div>
                </h2>
                <p class="mt-8 text-lg text-gray-700 leading-relaxed">
                    The growing presence of China in South Asia is reshaping geopolitics, economics, and regional connectivity. BODHI SAMBAD 2026 brings together thought leaders, policy makers, and academics to analyse emerging trends and craft actionable insights for the region.
                </p>
                <a href="{{ route('about') }}" target="_blank" rel="noopener" class="mt-8 inline-flex items-center gap-2 rounded-full border-2 border-gray-200 bg-white px-8 py-3 text-sm font-bold text-charcoal shadow-sm transition hover:border-accent hover:text-accent group">
                    Read More
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="order-1 md:order-2 relative overflow-hidden rounded-3xl shadow-2xl aspect-video md:aspect-auto">
                <img src="https://images.unsplash.com/photo-1518676679158-6c2115d5c4c7?auto=format&fit=crop&w=1200&q=80" alt="Conference" class="h-full w-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-charcoal/40 to-transparent opacity-80"></div>
                <div class="absolute bottom-6 left-6 right-6 text-white">
                    <p class="text-xs uppercase tracking-widest font-semibold text-accent">Conference highlight</p>
                    <h3 class="mt-2 text-xl md:text-3xl font-bold">Engage with international experts</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="speakers" class="bg-white py-20 md:py-24 mt-24">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between mb-12">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-charcoal relative inline-block">
                        Featured Speakers
                        <div class="absolute -bottom-2 left-0 h-1 w-1/3 bg-accent rounded-full"></div>
                    </h2>
                    <p class="mt-6 max-w-2xl text-lg text-gray-700 leading-relaxed">Meet the thought leaders who will be guiding the conversations on geopolitics and diplomacy.</p>
                </div>
                <a href="{{ route('speakers') }}" target="_blank" rel="noopener" class="w-full md:w-auto justify-center inline-flex items-center gap-2 rounded-full border-2 border-gray-200 bg-white px-8 py-3 text-sm font-bold text-charcoal shadow-sm transition hover:border-accent hover:text-accent group">
                    View Complete Directory
                </a>
            </div>

            <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                @foreach($speakers as $speaker)
                <article data-speaker-id="{{ $speaker->id }}" role="button" tabindex="0" class="speaker-card group rounded-3xl bg-bg border border-gray-100 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden cursor-pointer focus:outline-none focus:ring-2 focus:ring-accent">
                    <div class="h-56 overflow-hidden">
                        <img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" />
                    </div>
                    <div class="p-6 md:p-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-accent">{{ $speaker->role }}</p>
                        <h3 class="mt-3 text-lg font-bold text-charcoal">{{ $speaker->name }}</h3>
                        <p class="mt-2 text-sm text-gray-600 font-medium leading-relaxed">{{ $speaker->organization }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="registration" class="bg-charcoal text-white py-20 md:py-24 scroll-mt-24">
        <div class="mx-auto max-w-5xl px-4">
            <div class="bg-white/5 rounded-3xl p-6 md:p-12 backdrop-blur-sm border border-white/10 shadow-2xl">
                <div class="grid md:grid-cols-5 gap-12 items-start">
                    <div class="md:col-span-2">
                        <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-center md:text-left">Reserve Your Seat</h2>
                        <p class="mt-6 text-lg text-gray-300 leading-relaxed text-center md:text-left">Join delegates from across the globe. Register your interest and receive comprehensive materials.</p>
                        
                        <div class="mt-10 flex flex-col gap-6 items-center md:items-start">
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-accent/20 flex items-center justify-center text-xl">📅</div>
                                <div>
                                    <p class="font-bold text-white">21–23 May 2026</p>
                                    <p class="text-xs text-gray-400">Main Sessions</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="h-12 w-12 rounded-2xl bg-accent/20 flex items-center justify-center text-xl">📍</div>
                                <div>
                                    <p class="font-bold text-white">Kathmandu, Nepal</p>
                                    <p class="text-xs text-gray-400">In-Person Event</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:col-span-3">
                        <form class="grid gap-5 md:grid-cols-2" onsubmit="event.preventDefault(); alert('Registration submitted successfully!');">
                            <div class="space-y-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">First Name</span>
                                <input required type="text" placeholder="John" class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-4 text-white placeholder-gray-500 focus:border-accent focus:ring-0 transition" />
                            </div>
                            <div class="space-y-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Last Name</span>
                                <input required type="text" placeholder="Doe" class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-4 text-white placeholder-gray-500 focus:border-accent focus:ring-0 transition" />
                            </div>
                            <div class="md:col-span-2 space-y-2">
                                <span class="text-xs font-bold uppercase tracking-wider text-gray-400 ml-1">Email Address</span>
                                <input required type="email" placeholder="john@example.com" class="w-full rounded-2xl border border-white/10 bg-white/5 px-4 py-4 text-white focus:border-accent focus:ring-0 transition" />
                            </div>
                            <div class="md:col-span-2 mt-4">
                                <button type="submit" class="w-full rounded-full bg-accent px-8 py-5 text-lg font-bold tracking-wide text-white shadow-lg shadow-accent/40 hover:-translate-y-1 transition active:translate-y-0">
                                    Confirm Registration
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.speaker-modal')

    <script>
        /* FAIL-SAFE: Using standard PHP to bypass the Laravel 12 Blade compiler bug */
        window.SPEAKERS = <?php echo json_encode($speakers->map(function($s) {
            return [
                'id' => $s->id,
                'name' => $s->name,
                'role' => $s->role,
                'organization' => $s->organization,
                'bio' => $s->bio,
                'image_url' => $s->image_url,
            ];
        })->toArray()); ?>;

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.speaker-card').forEach(card => {
                card.addEventListener('click', () => {
                    const id = card.getAttribute('data-speaker-id');
                    window.dispatchEvent(new CustomEvent('open-speaker-modal', { 
                        detail: { id: id } 
                    }));
                });
            });
        });
    </script>
@endsection