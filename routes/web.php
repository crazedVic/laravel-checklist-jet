<?php

use App\Http\Livewire\Home;
use App\Http\Livewire\Workflow\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', \App\Http\Livewire\Workflow::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/', Home::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/workflows', Index::class)->name('dashboard');
