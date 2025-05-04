<?php

use App\Models\MaterialContent;
use App\Models\Material;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', ['title' => 'Beranda']);
});
Route::get('/materi', function () {
    return view('materi', [
        'title' => 'Materi Pembelajaran',
        'materials' => Material::all(),
    ]);
});

Route::get('/materi/{material:slug}', function (Material $material) {
    // dd($material->contents);
    return view('isi-materi', [
        'title' => $material->title,
        'page' => 'isi',
        'contents' => $material->contents,
    ]);
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
