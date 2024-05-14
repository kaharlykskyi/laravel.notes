@props(['type' => 'default', 'note'])

<div class="mb-6">
    <article class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6">

        <a href="{{ route('note.show', $note) }}">
            <h3 class="mt-0.5 text-2xl font-medium text-gray-900 pb-6">
                {{ $type === 'full' ? $note->title : Str::words($note->title, 7, '...') }}
            </h3>
        </a>
        <hr>

        <p class="mt-6 text-sm/relaxed text-gray-700">
            {{ $type === 'full' ? $note->note : Str::words($note->note, 100, '...') }}
        </p>

        <div class="flex justify-between mt-6">
            <div class="flex">
                <p class="inline-flex items-center text-sm text-gray-400">
                    {{ $note->created_at->diffForHumans() }} by {{ Str::words($note->user->name, 1, '') }}
                </p>
            </div>
            <x-notes.buttons :$note></x-notes.buttons>
        </div>
    </article>

</div>
