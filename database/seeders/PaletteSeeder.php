<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Color;

class PaletteSeeder extends Seeder
{

  public function run()
  {

    DB::table('palettes')-> insert([
      'user_id' => 1,
      'palette_name' => 'Test Palette',
      $color_array => array[
        ('3844', '#0088A1', 'Dark Bright Turquoise')
        ('946', '#C14B1E', 'Med Burnt Orange'),
        ('742', '#F3A230', 'Light Tangerinee'),
        ('355', '#6D1B16', 'Dark Terra Cotta'),
        ('740', '#DB6400', 'Tangerine'),
        ('3766', '#90BEC1', 'Light Peacock Blue'),
        ('725', '#EEAF42', 'Med Light Topaz'),
        ('920', '#873113', 'Med Copper'),
        ('3849', '#52B3AE', 'Teal Green Light'),
        ('3766', '#99CFD9', 'Peacock Blue Light'),
        ('813', '#A1C2D7', 'Blue Light'),
        ('3844', '#0088A1', 'Dark Bright Turquoise'),
        ('946', '#C14B1E', 'Med Burnt Orange'),
        ('742', '#F3A230', 'Light Tangerinee'),
        ('355', '#6D1B16', 'Dark Terra Cotta'),
        ('740', '#DB6400', 'Tangerine'),
        ('3766', '#90BEC1', 'Light Peacock Blue'),
        ('725', '#EEAF42', 'Med Light Topaz'),
        ('920', '#873113', 'Med Copper'),
        ('3849', '#52B3AE', 'Teal Green Light'),
        ('3766', '#99CFD9', 'Peacock Blue Light'),
        ('813', '#A1C2D7', 'Blue Light'),
        ('3844', '#0088A1', 'Dark Bright Turquoise'),
        ('946', '#C14B1E', 'Med Burnt Orange'),
        ('742', '#F3A230', 'Light Tangerinee'),
        ('355', '#6D1B16', 'Dark Terra Cotta'),
        ('740', '#DB6400', 'Tangerine'),
        ('3766', '#90BEC1', 'Light Peacock Blue'),
        ('725', '#EEAF42', 'Med Light Topaz'),
        ('920', '#873113', 'Med Copper'),
        ('3849', '#52B3AE', 'Teal Green Light'),
        ('3766', '#99CFD9', 'Peacock Blue Light'),
        ('813', '#A1C2D7', 'Blue Light'),
        ('3844', '#0088A1', 'Dark Bright Turquoise'),
        ('946', '#C14B1E', 'Med Burnt Orange'),
        ('742', '#F3A230', 'Light Tangerinee'),
        ('355', '#6D1B16', 'Dark Terra Cotta'),
        ('740', '#DB6400', 'Tangerine'),
        ('3766', '#90BEC1', 'Light Peacock Blue'),
        ('725', '#EEAF42', 'Med Light Topaz'),
        ('920', '#873113', 'Med Copper'),
        ('3849', '#52B3AE', 'Teal Green Light'),
        ('3766', '#99CFD9', 'Peacock Blue Light'),
        ('813', '#A1C2D7', 'Blue Light'),
        ('3844', '#0088A1', 'Dark Bright Turquoise'),
        ('946', '#C14B1E', 'Med Burnt Orange'),
        ('742', '#F3A230', 'Light Tangerinee'),
        ('355', '#6D1B16', 'Dark Terra Cotta'),
        ('740', '#DB6400', 'Tangerine'),
        ('3766', '#90BEC1', 'Light Peacock Blue'),
        ('725', '#EEAF42', 'Med Light Topaz'),
        ('920', '#873113', 'Med Copper')
      ];
      ]);
  }
}
