<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palette extends Model
{
    use HasFactory;


        protected $fillable = [
              'user', 'palette'
          ];

          protected $table = 'palettes';

        return $this->belongsTo('App\Color');

        public function colors()
        {
            return $this->hasOne(Color::class);
        }

}
