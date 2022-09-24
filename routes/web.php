<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiczeProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::prefix('admin')->group(function () {
    // Route::get('/', function () {
    //     return view('welcome');
    // });

    Route::get('/welcome', WelcomeController::class);

    Route::controller(ContactController::class)->name('contacts.')->group(function () {
        Route::get('/contacts', [ContactController::class, 'index'])->name('index');

        Route::get('/contacts/{pageId}', [ContactController::class, 'show'])->name('show');

        Route::get('/companies/create', function () {
            return "<h1>Add new contact</h1>";
        })->whereAlphaNumeric('name')->name('create');
    });
// });
