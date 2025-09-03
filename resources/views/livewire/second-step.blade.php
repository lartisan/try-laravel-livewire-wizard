@php
    // $offer = \App\DTO\VerifiedOffer::from($offer);
@endphp

<div class="flex flex-col gap-24">
    <h1>2nd Step - {{ $offer['departure_name'] }} - {{ $offer['destination_name'] }}</h1>

    <div class="flex items-center gap-12">
        <button
                wire:click="previousStep()"
                class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400"
        >Prev</button>

        <button
                wire:click="nextStep()"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-gray-400"
        >Next</button>
    </div>
</div>