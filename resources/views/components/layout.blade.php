<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black/5">
    <header>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="text-center sm:text-left">
                    <h1 class="text-2xl font-bold text-gray-900 sm:text-3xl"><a href="/">Welcome Back, Barry!</a></h1>

                    <p class="mt-1.5 text-sm text-gray-500">Let's write a new note! 🎉</p>
                </div>

                <div class="mt-4 flex flex-col gap-4 sm:mt-0 sm:flex-row sm:items-center">

                    <a href="{{ route('note.create') }}"
                        class="block rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white transition hover:bg-indigo-700 focus:outline-none focus:ring"
                        type="button">
                        New note
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        @session('message')
            <x-alert :message="session('message')" ></x-alert>
        @endsession
        {{ $slot }}
    </div>

</body>

</html>
