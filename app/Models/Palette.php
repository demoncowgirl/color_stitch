<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Palette extends Model
{
    use HasFactory;


    protected $fillable = [
              'user_id', 'palette_name', 'colors_array'
          ];

    protected $table = 'palettes';


    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
