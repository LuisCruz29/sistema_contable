<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/principal', function () {
    return view('principal');
});

Route::get('/balancecomprobacion', function () {
    return view('balancecomprobacion');
});

Route::get('/balancegeneral', function () {
    return view('balancegeneral');
});

Route::get('/consultarasientodiario', function () {
    return view('consultarasientodiario');
});

Route::get('/estadocapital', function () {
    return view('estadocapital');
});

Route::get('/estadoresultado', function () {
    return view('estadoresultados');
});

Route::get('/registrodiario', function () {
    return view('registrodiario');
});