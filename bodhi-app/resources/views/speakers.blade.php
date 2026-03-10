@include('components.speaker-modal')

<script>
    /* Using standard PHP to bypass the Laravel Blade compiler bug on Vercel.
       This ensures 'window.SPEAKERS' is populated without triggering a 500 error.
    */
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

    // Listener to open the modal when a speaker card is clicked
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