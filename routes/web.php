<?php

use Illuminate\Support\Facades\Route;
use Italofantone\Media\Models\Media;

Route::get('/', function () {
    $media = Media::all();
    
    return view('welcome', ['media' => $media]);
});
