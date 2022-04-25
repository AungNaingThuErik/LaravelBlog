<?php

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

Route::get('/articles', function () {
    return 'Article List';
});
Route::get('/articles/details', function () {
    return 'Article Details';
})->name('article.details');

Route::get('/articles/details/{id}', function ( $id ) {
    return "Article Details - $id";
});
Route::get('/articles/more', function() {
    return redirect() -> route('/articles/details');
});
   