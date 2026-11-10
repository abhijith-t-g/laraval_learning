@props(['title' => 'Project Tracker'])
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{ $styles ?? '' }}
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen">
    <nav class="bg-white border-b border-gray-200 px-6 py-4 shadow-sm flex items-center justify-between">
        <h1 class="text-xl font-bold text-indigo-600">TaskFlow (Modern)</h1>
        <div class="text-sm text-gray-500">Blade Components + Alpine.js</div>
    </nav>

    {{-- Optional named slot for page header --}}
    @isset($header)
        <header class="bg-white border-b border-gray-200 shadow-sm py-4 px-6 mb-6">
            <div class="max-w-4xl mx-auto">
                {{ $header }}
            </div>
        </header>
    @endisset

 

    {{-- Main content slot --}}
    <main class="max-w-4xl mx-auto p-6">
        {{ $slot }}
    </main>

    {{-- Optional named slot for scripts --}}
    {{ $scripts ?? '' }}
</body>

</html>
