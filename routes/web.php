<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/rekod', function () {
    return view('rekod');
});

Route::get('/cuti', function () {
    return view('cuti');
});

Route::get('/notifikasi', function () {
    return view('notifikasi');
});

Route::get('/profil', function () {
    return view('profil');
});





//kerja rumah
// buat 2 rute baru
//1.nama page=blog
//isi blog=2 buah artikel,judul dan isi
//2.nama page /contact
//isi page contact= email, social medi