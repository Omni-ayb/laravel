<?php

use App\Http\Controllers\CvController;
use GuzzleHttp\Promise\Create;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/home',function() {
    return view('home');
});

//Routes for CvController
/* Route::get('cvs/create','App\Http\Controllers\CvController@create');
Route::get('cvs','App\Http\Controllers\CvController@index'); 
Route::post('cvs','App\Http\Controllers\Cvcontroller@store');
Route::delete('cvs/{id}','App\Http\Controllers\Cvcontroller@destroy');
Route::get('cvs/{id}/edit','App\Http\Controllers\CvController@edit');
Route::put('cvs/{id}','App\Http\Controllers\Cvcontroller@update');
 */
Route::resource('cvs','App\Http\Controllers\CvController');

Route::get('/getExp','App\Http\Controllers\CvController@getExp');


require __DIR__.'/auth.php';
