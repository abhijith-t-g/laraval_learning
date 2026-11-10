<x-layouts.app title="Modern Test">
    <x-slot:header>
        <h2 class="text-xl font-semibold text-gray-800">Layout Component with Named Header Slot</h2>
    </x-slot:header>

    <div class="p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800">Modern Layout Test</h1>
        <p class="mt-2 text-gray-600">Testing Blade Component & Alpine.js:</p>

        <div x-data="{ count: 0, message: '' }" class="mt-4">
            <button @click="count++; message = '🎉 Alpine.js reactive clicks: ' + count"
                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded transition">
                Click Me (Alpine Test)
            </button>
            <p x-text="message" class="mt-3 text-indigo-600 font-semibold"></p>
        </div>

        <div x-data="{ open: false }">
            <button @click="open = !open"
                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded transition">
                Click Me (Alpine Test)
            </button>
            <p x-text="open ? 'Open' : 'Closed'" class="mt-3 text-indigo-600 font-semibold"></p>
        </div>
    </div>
</x-layouts.app>
