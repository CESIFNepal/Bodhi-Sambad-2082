@extends('layouts.app')

@section('content')
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-4xl font-extrabold tracking-tight text-charcoal sm:text-5xl">
                Full Conference Agenda
            </h1>
            <p class="mt-4 max-w-2xl text-xl text-gray-600 mx-auto">
                Detailed breakdown of the 3-day programme taking place in Kathmandu.
            </p>
        </div>

        <div class="space-y-16">
            @php $daysGrouped = $schedules->groupBy('day'); @endphp
            @foreach(['Day 1', 'Day 2', 'Day 3'] as $index => $dayKey)
            
            <div class="bg-bg rounded-3xl p-8 md:p-12 shadow-sm border border-gray-100">
                <div class="border-b-2 border-gray-200 pb-6 mb-8 flex items-end justify-between">
                    <div>
                        <h2 class="text-3xl font-bold text-charcoal">{{ $dayKey }}</h2>
                        <p class="text-gray-500 font-medium mt-1">May {{ 21 + $index }}, 2026</p>
                    </div>
                    <div class="h-12 w-12 rounded-full bg-accent/20 text-accent flex items-center justify-center font-bold text-2xl shadow-inner">
                        {{ $index + 1 }}
                    </div>
                </div>

                <div class="space-y-8">
                    @if(isset($daysGrouped[$dayKey]))
                        @foreach($daysGrouped[$dayKey] as $item)
                        <div class="md:grid md:grid-cols-4 md:gap-8 bg-white p-6 rounded-2xl shadow-sm hover:shadow-md transition">
                            <div class="md:col-span-1 border-r border-gray-100 pr-4">
                                <span class="text-lg font-extrabold text-accent border-l-4 border-accent pl-3">{{ $item->time_slot }}</span>
                            </div>
                            <div class="md:col-span-3 mt-4 md:mt-0">
                                <h3 class="text-xl font-bold text-charcoal">{{ $item->title }}</h3>
                                <p class="mt-3 text-gray-600 leading-relaxed">{{ $item->description }}</p>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p class="text-gray-500 italic">Sessions for this day are currently being finalized.</p>
                    @endif
                </div>
            </div>

            @endforeach
        </div>
    </div>
</div>
@endsection
