<?php

namespace App\Http\Controllers;
use Illuminate\Support\Database\Eloquent\Model;
use Collective\Html\Eloquent;
use Illuminate\Http\Request;
use App\Http\Controllers\ColorController;
use App\Models\Color;
use App\Models\Palette;

class PaletteController extends Controller
{
  public function index(){
      $pallettes = Palette::orderBy('id', 'desc')->paginate(10);
      return view('colorInput', ['palettes' => $palettes]);
      }


public function store() {

  $colors = DB::select('select * from colors');

  // $colors = $request->query->all();
  $colorsArray= array_add($colorsArray, 'key', 'value');

  // if (!isset($this -> $color {
  $i = 52-$colorsArray.length;

  if($i<52; $i++){
  foreach ($colors as $color){
    array_push( $colorsArray, $color[$i] );
    }endforeach
  }endif

  return $colorsArray;

  }

public function createPalette($colorArray){

  $palette = new Palette();

  $palette -> id -> increment('id');
  $palette -> user_id -> $_SESSION['user_id'];
  $palette -> palette_name = $request -> input('palette_name');
  $palette -> colors_array = $request -> input($colorArray);

  $palette -> save();

  return redirect('colorInput');

  }



// public function getColors($colors) {
//
//   $colorArray=[];
//
//   for ($i = 0; $i <= 51; $i++) {
//     // array_push($colorArray, $colors);
//     $colorArray += $colors[i];
//   }
//   shuffle($colorArray);
//   return $colorArray;

}
