<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'showBottomButtons' => true,
    ]);
})->name('home');

Route::get('/reserva-tu-mesa', function () {
    return view('book', [
        'lang' => 'es',
        'showMenuButton' => true,
    ]);
})->name('book_es');

Route::get('/book-a-table', function () {
    return view('book', [
        'lang' => 'en',
        'showMenuButton' => true,
    ]);
})->name('book_en');

Route::get('/carta', function () {
    $menus = App\Models\Menu::orderBy('order')->get();

    return view('menu', [
        'showBookButton' => true,
        'menus' => $menus,
    ]);
})->name('menu');

Route::get('/politica-de-privacidad', function () {
    return view('privacy');
})->name('privacy');


Route::get('/accesibilidad', function () {
    return view('accessibility');
})->name('accessibility');
