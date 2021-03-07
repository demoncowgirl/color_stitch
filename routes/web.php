<?php

use Illuminate\Support\Facades\Route;

use App\Models\Color;
use App\Models\Palette;

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

require __DIR__.'/auth.php';

Route::get('auth/login', function(){
  return view ('auth/login');
});

Route::get('auth/logout', function(){
  return view ('welcome');
});

Route::get('auth/register', function(){
  return view ('auth/register');
});


//Routes for Colors
Route::resources(['colors' => ColorController::class]);
Route::get('/colors/index', 'App\Http\Controllers\ColorController@index');
Route::post('/colors/store', 'App\Http\Controllers\ColorController@store');
Route::get('/colors/getColors', 'App\Http\Controllers\ColorController@getColors');
Route::get('/colors/delete/{id}', 'App\Http\Controllers\ColorController@destroy');

Route::get('/squareLayout', function () {
    $colors->DB::table('colors')
    -> get();
    return view('squareLayout', ['colors'=> $colors]);
  });

  Route::get('/rectangleLayout', function() {
    $colors->DB::table('colors')
    -> get();
      return view('rectangleLayout', ['colors'=> $colors]);
  });

  Route::get('/colorInput', function() {
    $colors->DB::table('colors')
    -> get();
  return view('colorInput', ['colors'=> $colors]);
  });

//Routes for Palettes
Route::resources(['palettes' => PaletteController::class,]);
Route::get('/palettes/index', 'App\Http\Controllers\PaletteController@index');
Route::post('/palettes/store', 'App\Http\Controllers\PaletteController@store');
Route::get('/palettes/delete/{id}', 'App\Http\Controllers\PaletteController@destroy');


  Route::get('/squareLayout', function () {
        DB::table('palettes')
        ->get();
      return view('squareLayout', ['palettes'=> $palettes]);
    });

    Route::get('/rectangleLayout', function() {
          DB::table('palettes')
          ->get();
        return view('rectangleLayout', ['palettes'=> $palettes]);
    });

    // Route::get('/colorInput', function() {
    //   DB::table('palettes')
    //     ->get();
    // return view('colorInput', ['palettes'=> $palettes]);
    // });

//
// Route::resources([
//   'users' => UserController::class,
// ]);
//
// Route::post('/user/store', [UserController::class, 'store']);
