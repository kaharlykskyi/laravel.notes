<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="note-container">
        <div class="flex justify-end pb-6">
            <a href="{{ route('note.create') }}">
                <x-primary-button>
                    Create new note
                </x-primary-button>
            </a>
        </div>
        <div class="notes">
            @foreach ($notes as $note)
                <x-notes.list :$note></x-notes.list>
            @endforeach
        </div>
        {{ $notes->links() }}
    </div>
</x-app-layout>
