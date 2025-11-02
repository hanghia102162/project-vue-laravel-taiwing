<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NguoiDungController;

Route::get('/', function () {
    return view('welcome');
});

