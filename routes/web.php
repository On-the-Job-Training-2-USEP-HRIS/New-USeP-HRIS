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

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/
Route::get('/registration','User@Registration');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/dashboard','Admin@Dashboard');
Route::get('/users','Admin@Users');
Route::get('/edit-pds','Admin@EditPDS');
Route::get('/view-pds','Admin@ViewPDS');

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::post('/api/view-users','DatabaseUsers@GetUsers');
Route::post('/api/search-user','DatabaseUsers@SearchUser');

Route::post('/api/view-pds','DatabasePDS@GetPdsTemplate');
Route::post('/api/create-pds','DatabasePDS@CreatePDS');