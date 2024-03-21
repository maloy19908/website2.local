<?php

use App\Livewire\Products\ProductFetch;
use App\Livewire\Todos\TodoDashboard;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',TodoDashboard::class);
Route::get('/fetch',ProductFetch::class);

