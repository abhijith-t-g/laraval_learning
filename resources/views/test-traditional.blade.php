@extends('layouts.traditional')

@section('title', 'Traditional Test')

@section('content')
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800">Traditional Layout Test</h1>
        <p class="mt-2 text-gray-600">Testing Layout Inheritance & jQuery:</p>

        <button id="jquery-btn"
            class="mt-4 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded transition">
            Click Me (jQuery Test)
        </button>
        <p id="jquery-output" class="mt-3 text-green-600 font-semibold"></p>
    </div>
@endsection

@push('scripts')
    <script type="module">
        $(document).ready(function() {
            $('#jquery-btn').on('click', function() {
                $('#jquery-output').text('🎉 jQuery is loaded and working!');
            });
        });
    </script>
@endpush
