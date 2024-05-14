<x-layout>
    <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
        <h1 class="text-center font-bold text-2xl">Create new note</h1>
        <form action="{{ route('note.store') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label class="sr-only" for="note">Message</label>

                <textarea class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Message" rows="8" id="note" name="note"></textarea>
            </div>

            <div class="mt-4">
                <a href="{{ route('note.index') }}"
                    class="inline-block w-full rounded-lg bg-white px-5 py-3 font-medium text-black sm:w-auto">
                    Cancel
                </a>
                <button type="submit"
                    class="inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto">
                    Publish
                </button>
            </div>
        </form>
    </div>
</x-layout>
