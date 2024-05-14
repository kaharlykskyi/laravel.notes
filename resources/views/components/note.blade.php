<div class="mb-6">
    <article class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6">
        <span class="inline-block rounded bg-blue-600 p-2 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M12 14l9-5-9-5-9 5 9 5z" />
                <path
                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
        </span>

        <a href="#">
            <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                Note text
            </h3>
        </a>

        <p class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
            {{ Str::words($note->note, 70, '...') }}
        </p>

        <div class="flex justify-end space-x-4">
            <a href="{{ route('note.show', $note) }}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">View
            </a>
            <a href="{{ route('note.edit', $note) }}" class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-orange-400">Edit
            </a>
            <form action="{{ route('note.destroy', $note) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-red-600">Delete
                </a>
            </form>
        </div>
    </article>

</div>
