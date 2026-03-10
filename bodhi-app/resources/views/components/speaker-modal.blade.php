<div id="speaker-modal-root" class="hidden fixed inset-0 z-[100] flex items-center justify-center bg-charcoal/60 backdrop-blur-sm p-4">
    <div class="relative w-full max-w-2xl overflow-hidden rounded-3xl bg-white shadow-2xl">
        <button id="close-modal-btn" class="absolute right-4 top-4 rounded-full bg-gray-100 p-2 text-gray-700 hover:bg-gray-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M10 8.586l4.95-4.95a1 1 0 111.414 1.414L11.414 10l4.95 4.95a1 1 0 11-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10 3.636 5.05a1 1 0 011.414-1.414L10 8.586z" /></svg>
        </button>

        <div class="grid gap-6 p-8 md:grid-cols-3">
            <div class="md:col-span-1">
                <img id="modal-image" class="h-48 w-full rounded-2xl object-cover shadow-md" src="" alt="">
            </div>
            <div class="md:col-span-2 text-center md:text-left">
                <p id="modal-role" class="text-xs font-bold uppercase tracking-widest text-accent"></p>
                <h2 id="modal-name" class="mt-2 text-2xl font-bold text-charcoal"></h2>
                <p id="modal-org" class="mt-1 text-sm font-medium text-gray-500"></p>
                <hr class="my-4 border-gray-100">
                <p id="modal-bio" class="text-sm leading-relaxed text-gray-700 italic"></p>
            </div>
        </div>
    </div>
</div>

<script>
    // Pure JS Listener for the Speaker Popup
    window.addEventListener('open-speaker-modal', (e) => {
        const modal = document.getElementById('speaker-modal-root');
        const speaker = window.SPEAKERS.find(s => String(s.id) === String(e.detail.id));
        
        if (speaker) {
            document.getElementById('modal-image').src = speaker.image_url;
            document.getElementById('modal-name').innerText = speaker.name;
            document.getElementById('modal-role').innerText = speaker.role;
            document.getElementById('modal-org').innerText = speaker.organization;
            document.getElementById('modal-bio').innerText = speaker.bio || "Bio coming soon...";
            
            modal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Stop background scroll
        }
    });

    document.getElementById('close-modal-btn').addEventListener('click', () => {
        document.getElementById('speaker-modal-root').classList.add('hidden');
        document.body.style.overflow = 'auto'; // Re-enable scroll
    });
</script>