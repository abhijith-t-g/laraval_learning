@extends('layouts.traditional')

@section('title', 'Traditional Students')


@section('content')
    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-lg shadow">
        <h1 class="text-2xl font-bold text-gray-800">Traditional Student List: {{ count($students) }}</h1>

        <table class="border-collapse border border-gray-800">
            <tr class="border-collapse border border-gray-800 ">
                <th class="border-collapse border border-gray-800 px-2">Name</th>
                <th class="border-collapse border border-gray-800 px-2">Email</th>
                <th class="border-collapse border border-gray-800 px-2">status</th>

                <th class="border-collapse border border-gray-800 px-2">Course</th>
            </tr>
            @foreach ($students as $student)
                <tr class="border-collapse border border-gray-800 ">
                    <td class="border-collapse border border-gray-800 px-2 ">{{ $student->name }}</td>
                    <td class="border-collapse border border-gray-800 px-2">{{ $student->email }}</td>
                    <td id="status" class="border-collapse border border-gray-800 px-2">{{ $student->status }}</td>
                    <td class="border-collapse border border-gray-800 px-2">{{ $student->course }}</td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection

@push('scripts')
    <script type="module">
        $(document).ready(function() {
            var status = $("#status").text();
            if(status == "Active"){
                $("#status").addClass("text-green-500");
            }
            else if(status== "Pending"){
                $("#status").addClass("text-yellow-100");
            }else{
                $("#status").addClass("text-gray-800");
            }
        });
    </script>
@endpush
