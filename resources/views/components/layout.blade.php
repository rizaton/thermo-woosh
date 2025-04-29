<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body class="h-full">
    <div class="min-h-full bg-quiz-light-base dark:bg-quiz-dark-base">
        <x-navbar></x-navbar>
        @if ($title != 'Beranda')
            <x-header>{{ $title }}</x-header>
        @endif
        <div class="border-t border-2 border-quiz-light-button dark:border-quiz-dark-button"></div>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-">
                {{ $slot }}
            </div>
        </main>

        <x-check-student></x-check-student>
    </div>
    <x-footer></x-footer>
    <x-students-script></x-students-script>
</body>

</html>
