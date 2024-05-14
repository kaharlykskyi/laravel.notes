<div class="mb-6">
    <article class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6">

        <p class="mt-2 text-sm/relaxed text-gray-500">
            {{ $note->note }}
        </p>

        <a href="#">
            <h3 class="mt-4 text-md font-medium text-gray-900">
                Created: {{ $note->created_at->diffForHumans() }} by Mike
            </h3>
        </a>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('note.edit', $note) }}"
                class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-orange-400">Edit
            </a>
            <a href="#" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-red-600">Delete
            </a>
        </div>

    </article>

</div>
