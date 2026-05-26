<?php

use App\Models\Music;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (Request $request) {
    Log::info("Meu dado");
    return "Hello World";
});


Route::get("/musics", function (Request $request) {
    $musics = Music::all();
    return $musics;
});

Route::get("/create-test-music", function (Request $request) {
    Music::create([
        "name" => "Delírios",
        'artist' => 'FBC',
        'album' => 'BAILE',
        'duration' => 100
    ]);

    return "Musica Criada";
});