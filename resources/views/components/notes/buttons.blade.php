<div class="flex justify-end space-x-4">
    <a href="{{ route('note.show', $note) }}"
        class="group inline-flex items-center gap-1 text-sm font-medium text-blue-600">View
    </a>
    <a href="{{ route('note.edit', $note) }}"
        class="group inline-flex items-center gap-1 text-sm font-medium text-orange-400">Edit
    </a>
    <form action="{{ route('note.destroy', $note) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="group inline-flex items-center gap-1 text-sm font-medium text-red-600">Delete
            </a>
    </form>
</div>
