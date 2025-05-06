<?php

use App\Models\Images;
use App\Models\MaterialContent;
use App\Models\Material;
use App\Models\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('beranda', [
        'title' => 'Beranda',
        'images' => [
            'profile' => Images::all()->find(2),
        ]
    ]);
});
Route::get('/materi', function () {
    return view('materi', [
        'title' => 'Materi Pembelajaran',
        'materials' => Material::all(),
        'images' => [
            'profile' => Images::all()->find(2),
            'page' => Images::all()->find(1),
        ]
    ]);
});

Route::get('/materi/{material:slug}', function (Material $material) {
    // dd($material->contents);
    return view('isi-materi', [
        'title' => $material->title,
        'page' => 'isi',
        'contents' => $material->contents,
        'images' => [
            'profile' => Images::all()->find(2),
        ]
    ]);
});

Route::get('/video', function () {
    return view('video', [
        'title' => 'Video Pembelajaran',
        'videos' => Video::all(),
        'images' => [
            'profile' => Images::all()->find(2),
        ]
    ]);
});
Route::get('/referensi', function () {
    return view('referensi', [
        'title' => 'Referensi Pembelajaran',
        'images' => [
            'profile' => Images::all()->find(2),
        ]
    ]);
});
Route::get('/kuis', function () {
    return view('kuis', [
        'title' => 'Kuis',
        'images' => [
            'profile' => Images::all()->find(2),
        ]
    ]);
});
