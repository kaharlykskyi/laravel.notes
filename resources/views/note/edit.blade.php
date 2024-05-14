<x-app-layout>
    <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-center font-bold text-2xl">Edit note</h1>
        <form action="{{ route('note.update', $note) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="Title"
                    class="relative block rounded-md border border-gray-200 shadow-sm focus-within:border-blue-600 focus-within:ring-1 focus-within:ring-blue-600">
                    <input type="text" id="Title" name="title"
                        class="w-full peer border-none bg-transparent placeholder-transparent focus:border-transparent focus:outline-none focus:ring-0"
                        placeholder="Title" value="{{ $note->title }}" />

                    <span
                        class="pointer-events-none absolute start-2.5 top-0 -translate-y-1/2 bg-white p-0.5 text-xs text-gray-700 transition-all peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-sm peer-focus:top-0 peer-focus:text-xs">
                        Title
                    </span>
                </label>
            </div>

            @error('title')
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            @enderror

            <div>
                <label class="sr-only" for="note">Message</label>

                <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Message" rows="8" id="note"
                    name="note">{{ $note->note }}</textarea>
            </div>
            @error('note')
                <x-input-error :messages="$errors->get('note')" class="mt-2" />
            @enderror

            <div class="mt-4">
                <a href="{{ route('note.index') }}">
                    <x-secondary-button>Cancel</x-secondary-button>
                </a>
                <x-primary-button type="submit">
                    Save changes
                </x-primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
