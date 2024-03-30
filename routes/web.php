<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/borrowers', function () {
    return view('borrowers');
})->name('borrowers');

Route::get('/lenders', function () {
    return view('lenders');
})->name('lenders');

Route::get('/support', function () {
    return view('support');
})->name('support');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
