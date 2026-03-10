@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-br from-white via-bg to-white shadow-md md:pt-14 mx-4 md:mx-auto max-w-7xl rounded-3xl mt-6">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1509395176047-4a66953fd231?auto=format&fit=crop&w=1600&q=80" alt="Kathmandu skyline" class="h-full w-full object-cover opacity-20" />
        </div>
        <div class="relative mx-auto max-w-6xl px-6 py-16 md:py-24">
            <div class="max-w-3xl">
                <p class="inline-flex items-center gap-2 rounded-full bg-accent/20 px-4 py-1 text-sm font-semibold text-accent shadow-sm">
                    <span class="h-2 w-2 rounded-full bg-accent"></span>
                    International Conference
                </p>
                <h1 class="mt-6 text-4xl font-extrabold tracking-tight text-charcoal sm:text-6xl drop-shadow-sm">
                    BODHI SAMBAD 2026
                </h1>
                <p class="mt-6 text-xl text-gray-800 font-medium">
                    China in South Asia: Navigating geopolitics, economics, and regional cooperation.
                </p>

                <div class="mt-8 flex flex-wrap gap-4 items-center">
                    <a href="#registration" class="inline-flex items-center justify-center rounded-full bg-accent px-8 py-4 text-sm font-bold tracking-wide text-white shadow-xl shadow-accent/40 transition-transform hover:scale-105 hover:bg-accent/90">
                        Register Now
                    </a>
                    <div class="inline-flex items-center gap-4 text-sm font-semibold text-gray-800 bg-white/60 backdrop-blur-md px-6 py-3 rounded-full shadow-sm">
                        <span class="flex items-center gap-2">
                            <span class="inline-flex h-2.5 w-2.5 rounded-full bg-accent"></span>
                            May 21–23, 2026
                        </span>
                        <span class="flex items-center gap-2 border-l border-gray-300 pl-4">
                            <span class="inline-flex h-2.5 w-2.5 rounded-full bg-accent"></span>
                            Kathmandu, Nepal
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Snippet -->
    <section id="about" class="mx-auto max-w-6xl px-4 mt-24 scroll-mt-24">
        <div class="grid gap-12 md:grid-cols-2 md:items-center">
            <div>
                <h2 class="text-4xl font-extrabold tracking-tight text-charcoal relative inline-block">
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
            <div class="relative overflow-hidden rounded-3xl shadow-2xl transform hover:-translate-y-2 transition duration-500">
                <img src="https://images.unsplash.com/photo-1518676679158-6c2115d5c4c7?auto=format&fit=crop&w=1200&q=80" alt="Conference" class="h-full w-full object-cover" />
                <div class="absolute inset-0 bg-gradient-to-t from-charcoal via-charcoal/40 to-transparent opacity-80"></div>
                <div class="absolute bottom-8 left-8 right-8 text-white">
                    <p class="text-sm uppercase tracking-widest font-semibold text-accent">Conference highlight</p>
                    <h3 class="mt-2 text-3xl font-bold">Engage with international experts</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Speakers Snippet -->
    <section id="speakers" class="bg-white py-24 mt-24">
        <div class="mx-auto max-w-7xl px-4">
            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between mb-12">
                <div>
                    <h2 class="text-4xl font-extrabold tracking-tight text-charcoal relative inline-block">
                        Featured Speakers
                        <div class="absolute -bottom-2 left-0 h-1 w-1/3 bg-accent rounded-full"></div>
                    </h2>
                    <p class="mt-6 max-w-2xl text-lg text-gray-700 leading-relaxed">Meet the thought leaders who will be guiding the conversations on geopolitics, diplomacy, and regional cooperation.</p>
                </div>
                <a href="{{ route('speakers') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full border-2 border-gray-200 bg-white px-8 py-3 text-sm font-bold text-charcoal shadow-sm transition hover:border-accent hover:text-accent group whitespace-nowrap">
                    View Complete Directory
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>

            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($speakers as $speaker)
                <article data-speaker-id="{{ $speaker->id }}" role="button" tabindex="0" class="speaker-card group rounded-3xl bg-bg border border-gray-100 shadow-sm transition-all duration-300 hover:-translate-y-2 hover:shadow-xl overflow-hidden cursor-pointer focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-white">
                    <div class="h-64 overflow-hidden">
                        <img class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" />
                    </div>
                    <div class="p-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-accent">{{ $speaker->role }}</p>
                        <h3 class="mt-3 text-2xl font-bold text-charcoal">{{ $speaker->name }}</h3>
                        <p class="mt-2 text-sm text-gray-600 font-medium leading-relaxed">{{ $speaker->organization }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Schedule Snippet -->
    <section id="schedule" class="mx-auto max-w-7xl px-4 py-24 scroll-mt-24">
        <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between mb-12">
            <div>
                <h2 class="text-4xl font-extrabold tracking-tight text-charcoal relative inline-block">
                    Conference Schedule
                    <div class="absolute -bottom-2 left-0 h-1 w-1/3 bg-accent rounded-full"></div>
                </h2>
                <p class="mt-6 max-w-2xl text-lg text-gray-700 leading-relaxed">A strategic snapshot of the overarching themes over the three-day programme.</p>
            </div>
            <a href="{{ route('schedule') }}" target="_blank" rel="noopener" class="inline-flex items-center gap-2 rounded-full border-2 border-gray-200 bg-white px-8 py-3 text-sm font-bold text-charcoal shadow-sm transition hover:border-accent hover:text-accent group whitespace-nowrap">
                View Full Agenda
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>

        <div class="grid gap-8 md:grid-cols-3">
            @php $days = $schedules->groupBy('day'); @endphp
            @foreach(['Day 1', 'Day 2', 'Day 3'] as $index => $dayKey)
            <article class="rounded-3xl bg-white p-8 shadow-lg border border-gray-100 hover:border-accent/30 transition-colors">
                <div class="flex items-center gap-4 mb-6">
                    <div class="h-12 w-12 rounded-full bg-bg text-accent flex items-center justify-center font-bold text-xl border-2 border-accent/20">
                        {{ $index + 1 }}
                    </div>
                    <h3 class="text-3xl font-bold text-charcoal">{{ $dayKey }}</h3>
                </div>
                
                <ul class="space-y-6">
                    @if(isset($days[$dayKey]))
                        @foreach($days[$dayKey]->take(3) as $item)
                        <li class="relative pl-6 before:inline-block before:absolute before:left-0 before:top-2 before:h-2 before:w-2 before:rounded-full before:bg-accent/60">
                            <span class="block text-sm font-bold tracking-wide text-accent mb-1">{{ $item->time_slot }}</span>
                            <strong class="block text-gray-900 font-semibold mb-1 text-lg">{{ $item->title }}</strong>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ $item->description }}</p>
                        </li>
                        @endforeach
                    @else
                        <p class="text-sm text-gray-500 italic">Schedule pending...</p>
                    @endif
                </ul>
            </article>
            @endforeach
        </div>
    </section>

    <!-- Sponsors Carousel -->
    <section id="sponsors" class="bg-white py-16 scroll-mt-24 overflow-hidden border-y border-gray-100">
        <div class="mx-auto max-w-7xl px-4 mb-10 text-center">
            <h2 class="text-sm uppercase tracking-widest font-bold text-gray-500 mb-2">Supported By</h2>
            <div class="h-1 w-16 bg-accent mx-auto rounded-full"></div>
        </div>

        <!-- Borderless Carousel Container -->
        <div class="relative flex overflow-x-hidden group">
            <div class="py-4 animate-marquee whitespace-nowrap flex items-center">
                @foreach($sponsors as $sponsor)
                <img class="mx-12 h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300 pointer-events-none" src="{{ $sponsor->logo_url }}" alt="{{ $sponsor->name }}" />
                @endforeach
                <!-- Duplicate for seamless looping -->
                @foreach($sponsors as $sponsor)
                <img class="mx-12 h-16 w-auto object-contain opacity-60 grayscale hover:grayscale-0 hover:opacity-100 transition duration-300 pointer-events-none" src="{{ $sponsor->logo_url }}" alt="{{ $sponsor->name }}" />
                @endforeach
            </div>
            
            <!-- Optional fade edges -->
            <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent"></div>
            <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent"></div>
        </div>
    </section>

    <!-- Registration -->
    <section id="registration" class="bg-charcoal text-white py-24 scroll-mt-24">
        <div class="mx-auto max-w-5xl px-4">
            <div class="bg-white/5 rounded-3xl p-8 md:p-12 backdrop-blur-sm border border-white/10 shadow-2xl">
                <div class="grid md:grid-cols-5 gap-12 items-center">
                    <div class="md:col-span-2">
                        <h2 class="text-4xl font-extrabold tracking-tight">Reserve Your Seat</h2>
                        <p class="mt-6 text-lg text-gray-300 leading-relaxed">Join delegates from across the globe at BODHI SAMBAD 2026. Register your interest below and receive comprehensive conference materials.</p>
                        
                        <div class="mt-8 space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">📅</div>
                                <div>
                                    <p class="font-bold text-white">21–23 May 2026</p>
                                    <p class="text-sm text-gray-400">Three Days</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="h-10 w-10 rounded-full bg-accent/20 flex items-center justify-center text-accent">📍</div>
                                <div>
                                    <p class="font-bold text-white">Kathmandu, Nepal</p>
                                    <p class="text-sm text-gray-400">Regional Hub</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="md:col-span-3">
                        <form class="grid gap-6 md:grid-cols-2" onsubmit="event.preventDefault(); alert('Registration submitted successfully! This is a dynamic demo.');">
                            <label class="grid gap-2">
                                <span class="text-sm font-semibold text-gray-300">First Name</span>
                                <input required type="text" name="firstName" placeholder="John" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-base text-white placeholder-gray-500 shadow-inner focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/50 transition" />
                            </label>

                            <label class="grid gap-2">
                                <span class="text-sm font-semibold text-gray-300">Last Name</span>
                                <input required type="text" name="lastName" placeholder="Doe" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-base text-white placeholder-gray-500 shadow-inner focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/50 transition" />
                            </label>

                            <label class="md:col-span-2 grid gap-2">
                                <span class="text-sm font-semibold text-gray-300">Email Address</span>
                                <input required type="email" name="email" placeholder="john@example.com" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-base text-white placeholder-gray-500 shadow-inner focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/50 transition" />
                            </label>

                            <label class="md:col-span-2 grid gap-2">
                                <span class="text-sm font-semibold text-gray-300">Organization / Institution</span>
                                <input type="text" name="organization" placeholder="Your University or Think Tank" class="w-full rounded-xl border border-white/20 bg-white/10 px-4 py-3 text-base text-white placeholder-gray-500 shadow-inner focus:border-accent focus:outline-none focus:ring-2 focus:ring-accent/50 transition" />
                            </label>

                            <div class="md:col-span-2 mt-4">
                                <button type="submit" class="w-full rounded-full bg-accent px-8 py-4 text-lg font-bold tracking-wide text-white shadow-lg shadow-accent/40 transition-transform hover:-translate-y-1 hover:bg-accent/90 focus:outline-none focus:ring-4 focus:ring-accent/50">
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
        window.SPEAKERS = @json($speakers->map(fn($s) => [
            'id' => $s->id,
            'name' => $s->name,
            'role' => $s->role,
            'organization' => $s->organization,
            'bio' => $s->bio,
            'image_url' => $s->image_url,
        ]));
    </script>
@endsection
