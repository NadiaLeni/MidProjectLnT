<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/create/book',
    [BooksController::class, 'createBook']
)->name('createBook');
Route::post(
    '/store/book',
    [BooksController::class, 'storeBook']
)->name('storeBook');

Route::get(
    '/status', function () {
    return view('createBookAgain');
});

Route::get(
    '/show/books',
    [BooksController::class, 'showBooks']
)->name('showBooks');

Route::get(
    '/delete/book',
    [BooksController::class, 'deleteBook']
)->name('deleteBook');

Route::get(
    'destroy/book/{id}',
    [BooksController::class, 'destroyBook']
)->name('destroyBook');

Route::get(
    '/status/book', function () {
    return view('deleteBookAgain');
});

Route::get(
    '/update/book',
    [BooksController::class, 'updateBook']
)->name('updateBook');

Route::get(
    'edit/book/{id}',
    [BooksController::class, 'editBook']
)->name('editBook');

Route::post(
    'reupdate/book/{id}',
    [BooksController::class, 'reupdateBook']
)->name('reupdateBook');
// // Route::post(
//     '/destroy/book',
//     'BooksController@destroyBook'
// )->name('destroyBook');

// Route::post('/destroy/book/{ID}', 'BooksController@destroyBook')->name('destroyBook');
