<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-black">

    @auth
        <x-sidebar />


        <div class="p-4 sm:ml-64">
            <h1
                class="text-xl sm:text-4xl font-semibold text-gray-800 dark:text-white mb-6 border-b pb-2 border-gray-200 dark:border-gray-700">
                {{ $title }}
            </h1>

            <div class="p-4">

                <x-message />

                {{ $slot }}
            </div>
        </div>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
