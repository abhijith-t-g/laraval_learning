<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-traditional', function () {
    return view('test-traditional');
});

Route::get('/test-modern', function () {
    return view('test-modern');
});


$students = [
    [
        'id' => 1,
        'name' => 'Alice Johnson',
        'email' => 'alice@example.com',
        'course' => 'Computer Science',
        'status' => 'Active',
        'bio' => 'Alice is specializing in AI and Machine Learning. GPA: 3.9',
    ],
    [
        'id' => 2,
        'name' => 'Bob Smith',
        'email' => 'bob@example.com',
        'course' => 'Web Development',
        'status' => 'Pending',
        'bio' => 'Bob is currently completing the Laravel & Vue certification path.',
    ],
    [
        'id' => 3,
        'name' => 'Charlie Davis',
        'email' => 'charlie@example.com',
        'course' => 'Data Science',
        'status' => 'Inactive',
        'bio' => 'On leave for an industry internship at Acme Corp.',
    ],
    [
        'id' => 4,
        'name' => 'Dana Lee',
        'email' => 'dana@example.com',
        'course' => 'Computer Science',
        'status' => 'Active',
        'bio' => 'Leading the open-source developer club on campus.',
    ],
];

$students = collect($students)->map(fn($item) => (object) $item);

Route::get('/students-traditional', function () use ($students) {
    return view('students.traditional', ['students' => $students]);
});

Route::get('/students-modern', function () use ($students) {
    return view('students.modern', ['students' => $students]);
});
