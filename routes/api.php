<?php

use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/get_contacts', [ContactController::class, 'getContacts']);
Route::post('/del_contact', [ContactController::class, 'delContact']);
Route::post('/add_contact', [ContactController::class, 'addContact']);
Route::post('/edit_contact', [ContactController::class, 'editContact']);

