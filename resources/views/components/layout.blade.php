<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Project Tracker' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen">
    <nav class="bg-white border-b border-gray-200 px-6 py-4 shadow-sm">
        <h1 class="text-xl font-bold text-indigo-600">TaskFlow</h1>
    </nav>

    <main class="max-w-4xl mx-auto p-6">
        {{ $slot }}
    </main>
</body>

</html>