@extends('layouts.app')

@section('content')
<div class="bg-bg py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-charcoal sm:text-5xl">
                Speaker Directory
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                Discover the international experts, policymakers, and academics joining us at BODHI SAMBAD 2026.
            </p>
        </div>

        <div class="mt-16 grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($speakers as $speaker)
            <div data-speaker-id="{{ $speaker->id }}" role="button" tabindex="0" class="speaker-card bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-2 transition duration-500 border border-gray-100 flex flex-col cursor-pointer focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-white">
                <div class="h-80 overflow-hidden relative group border-b-4 border-accent">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" />
                    <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-bold text-charcoal shadow-sm uppercase tracking-wider">
                        {{ $speaker->role }}
                    </div>
                </div>
                <div class="p-8 flex-grow flex flex-col justify-center text-center">
                    <h3 class="text-2xl font-bold text-charcoal">{{ $speaker->name }}</h3>
                    <div class="h-1 w-10 bg-accent rounded-full mx-auto my-4"></div>
                    <p class="text-gray-600 font-medium leading-relaxed">{{ $speaker->organization }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@include('components.speaker-modal')

<script>
    window.SPEAKERS = @json($speakers->map(function($s) {
        return [
            'id' => $s->id,
            'name' => $s->name,
            'role' => $s->role,
            'organization' => $s->organization,
            'bio' => $s->bio,
            'image_url' => $s->image_url,
        ];
    }));
</script>
@endsection
