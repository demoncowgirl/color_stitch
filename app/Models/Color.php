<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Color extends Model
{
    use HasFactory;


    protected $fillable = [
          'dmc', 'hex', 'name'
      ];

    protected $table = 'colors';

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
