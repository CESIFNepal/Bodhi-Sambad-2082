@extends('layouts.app')

@section('content')
@php
    /* FORCE OVERRIDE: 
       We unset the variable from the Controller to ensure the 
       hard-coded list below is the only one the website sees.
    */
    unset($speakers); 

    $speakers = collect([
        (object) [
            'id' => 'sujan-aryal', 
            'name' => 'Sujan Aryal', 
            'role' => 'Speaker', 
            'organization' => 'CESIF', 
            'image_url' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=900&q=80', 
            'bio' => 'Dr. Sujan’s research focuses on regional diplomacy, governance reform, and the economic impact of infrastructure initiatives across South Asia.'
        ],
        (object) [
            'id' => 'li-wei', 
            'name' => 'Mr. Li Wei', 
            'role' => 'Keynote Speaker', 
            'organization' => 'Senior Research Fellow, Asia Policy Institute', 
            'image_url' => 'https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80', 
            'bio' => 'Mr. Li brings deep insight into policy trends, strategic frameworks, and multilateral diplomacy shaping China’s engagement in the region.'
        ],
        (object) [
            'id' => 'ayesha-patel', 
            'name' => 'Dr. Ayesha Patel', 
            'role' => 'Panelist', 
            'organization' => 'Economist, Regional Development Council', 
            'image_url' => 'https://images.unsplash.com/photo-1525097487452-6278ff080c31?auto=format&fit=crop&w=900&q=80', 
            'bio' => 'Ayesha explores regional economic integration strategies, trade diplomacy challenges, and the future of cross-border infrastructure finance.'
        ],
        (object) [
            'id' => 'rajiv-thapa', 
            'name' => 'Mr. Rajiv Thapa', 
            'role' => 'Panelist', 
            'organization' => 'Senior Analyst, Global Affairs Forum', 
            'image_url' => 'https://images.unsplash.com/photo-1524503033411-c9566986fc8f?auto=format&fit=crop&w=900&q=80', 
            'bio' => 'Rajiv’s analysis focuses on strategic alliances, risk assessment, and policy coherence across South Asia in light of global power shifts.'
        ],
        // ADD OR EDIT MORE SPEAKERS HERE...
        (object) [
            'id' => 'nisha-gupta', 
            'name' => 'Dr. Nisha Gupta', 
            'role' => 'Speaker', 
            'organization' => 'Director, South Asia Economic Institute', 
            'image_url' => 'https://images.unsplash.com/photo-1524503145539-992f7ca0a644?auto=format&fit=crop&w=900&q=80', 
            'bio' => 'Dr. Gupta researches economic corridors, supply chain resilience, and the digital transformation of regional trade.'
        ],
    ]);
@endphp

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

        <div class="mt-16 grid gap-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach($speakers as $speaker)
            <div data-speaker-id="{{ $speaker->id }}" role="button" tabindex="0" class="speaker-card bg-white rounded-3xl shadow-xl overflow-hidden hover:-translate-y-1 hover:shadow-xl transition duration-300 border border-gray-100 flex flex-col cursor-pointer focus:outline-none focus:ring-2 focus:ring-accent focus:ring-offset-2 focus:ring-offset-white">
                <div class="h-56 overflow-hidden relative group border-b-4 border-accent">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" src="{{ $speaker->image_url }}" alt="{{ $speaker->name }}" />
                    <div class="absolute bottom-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-[10px] font-bold text-charcoal shadow-sm uppercase tracking-wider">
                        {{ $speaker->role }}
                    </div>
                </div>
                <div class="p-6 flex-grow flex flex-col justify-center text-center">
                    <h3 class="text-xl font-bold text-charcoal">{{ $speaker->name }}</h3>
                    <div class="h-1 w-10 bg-accent rounded-full mx-auto my-3"></div>
                    <p class="text-sm text-gray-600 font-medium leading-relaxed">{{ $speaker->organization }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Include the modal component --}}
@include('components.speaker-modal')

<script>
    /* Pass the new list to Javascript for the modal popups */
    window.SPEAKERS = <?php echo json_encode($speakers->map(function($s) {
        return [
            'id' => $s->id,
            'name' => $s->name,
            'role' => $s->role,
            'organization' => $s->organization,
            'bio' => $s->bio ?? null,
            'image_url' => $s->image_url,
        ];
    })->toArray()); ?>;

    document.addEventListener('DOMContentLoaded', () => {
        document.body.addEventListener('click', (e) => {
            const card = e.target.closest('.speaker-card');
            if (card) {
                const id = card.getAttribute('data-speaker-id');
                window.dispatchEvent(new CustomEvent('open-speaker-modal', { 
                    detail: { id: id } 
                }));
            }
        });
    });
</script>
@endsection