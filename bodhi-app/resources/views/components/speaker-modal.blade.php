<div id="speaker-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 p-4">
    <div class="relative w-full max-w-2xl overflow-hidden rounded-3xl bg-white shadow-xl">
        <button id="speaker-modal-close" class="absolute right-4 top-4 rounded-full bg-white/80 p-2 text-gray-700 transition hover:bg-white">
            <span class="sr-only">Close</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 8.586l4.95-4.95a1 1 0 111.414 1.414L11.414 10l4.95 4.95a1 1 0 11-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10 3.636 5.05a1 1 0 011.414-1.414L10 8.586z" clip-rule="evenodd" />
            </svg>
        </button>
        <div class="grid gap-6 p-8 md:grid-cols-3">
            <div class="md:col-span-1">
                <img id="speaker-modal-image" class="h-48 w-full rounded-2xl object-cover" src="" alt="" />
            </div>
            <div class="md:col-span-2">
                <p id="speaker-modal-role" class="text-sm font-semibold text-accent"></p>
                <h2 id="speaker-modal-name" class="mt-2 text-2xl font-semibold text-charcoal"></h2>
                <p id="speaker-modal-title" class="mt-2 text-sm text-gray-700"></p>
                <hr class="my-4 border-gray-200" />
                <p id="speaker-modal-bio" class="text-sm text-gray-700"></p>
            </div>
        </div>
    </div>
</div>
