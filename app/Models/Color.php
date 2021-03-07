<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Color extends Model
{
    use HasFactory;


    protected $fillable = [
          'dmc', 'hex', 'name'
      ];

      protected $table = 'colors';

      // return $this->belongsTo('App\Post');

    // public function colors()
    // {
    //     return $this->hasOne(Color::class);
    // }


}
