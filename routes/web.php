<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Color;
use App\Models\Palette;

use App\Http\Controllers\ColorController;
use App\Http\Controllers\PaletteController;

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
    return redirect('/colorInput')->with('success', 'You are logged in!');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('auth/login', function () {
    return view('auth/login');
});

Route::get('auth/logout', function () {
    return redirect('/')->with('success', 'You are logged out!');
})->middleware(['auth'])->name('logout');


Route::get('auth/register', function () {
    return view('auth/register');
});


//Routes for Colors
Route::resources(['colors' => ColorController::class]);
Route::get('/colors', [Colorcontroller::class, 'index']);
Route::post('/colors/store', [Colorcontroller::class, 'store'])->name('colors.store');
Route::get('/colors/getColors', [Colorcontroller::class, 'getColors'])->name('getColors');
Route::get('/colors/delete/{id}', [Colorcontroller::class, 'destroy'])->name('colors.destroy');

Route::get('/squareLayout', function () {
    $colors->DB::table('colors')
    -> get();
    return view('squareLayout', ['colors'=> $colors]);
});

  Route::get('/rectangleLayout', function () {
      $colors->DB::table('colors')
    -> get();
      return view('rectangleLayout', ['colors'=> $colors]);
  });

  Route::get(
      '/colorInput',
      [Colorcontroller::class, 'index']
  )->name('colors');



//Routes for Palettes
Route::resources(['palettes' => PaletteController::class]);
Route::get('/palettes/index', [PaletteController::class, 'index'])->name('palettes.index');
Route::post('/palettes/store', [PaletteController::class, 'store']);
Route::get('/palettes/delete/{id}', [PaletteController::class, 'destroy']);


  Route::get('/squareLayout', function () {
      DB::table('palettes')
        ->get();
      return view('squareLayout', ['palettes'=> $palettes]);
  });

    Route::get('/rectangleLayout', function ($id, $palette_name, $dmc, $name) {
        DB::table('palettes')
          ->get();
        return view('rectangleLayout', ['palettes'=> $palettes]);
    });

    // Route::get('/colorInput', function() {
    //   DB::table('palettes')
    //     ->get();
    // return view('colorInput', ['palettes'=> $palettes);
    // });

//
// Route::resources([
//   'users' => UserController::class,
// ]);
//
// Route::post('/user/store', [UserController::class, 'store']);
