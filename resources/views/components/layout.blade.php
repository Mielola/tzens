<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    <title>Home Page</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-nav-list></x-nav-list>

        <x-header>
            {{ $title }}
        </x-header>

        <main>
            <div class="mx-auto w-full bg-[#D9EDF8] dark:bg-slate-900 dark:text-white">
                {{ $slot }}
            </div>
        </main>
    </div>

</body>

</html>
