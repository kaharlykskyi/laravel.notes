<x-layout>
    <div class="note-container">
        <div class="notes">
            @foreach ($notes as $note)
                <x-note :$note></x-note>
            @endforeach
        </div>
        {{ $notes->links() }}
    </div>
</x-layout>
