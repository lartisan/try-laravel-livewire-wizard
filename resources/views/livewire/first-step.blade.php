<div class="flex flex-col gap-24">
    <h1>1st Step - {{ $offer->departure_name }} - {{ $offer->destination_name }}</h1>

    <div class="flex items-center gap-12">
        <button
                wire:click="nextStep()"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-gray-400"
        >Next</button>
    </div>
</div>