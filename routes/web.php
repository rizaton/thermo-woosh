<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});
Route::get('/materi', function () {
    return view('materi', ['title' => 'Materi Pembelajaran']);
});
Route::get('/video', function () {
    return view('video', ['title' => 'Video Pembelajaran']);
});
Route::get('/referensi', function () {
    return view('referensi', ['title' => 'Referensi Pembelajaran']);
});
Route::get('/kuis', function () {
    return view('kuis', ['title' => 'Kuis']);
});
