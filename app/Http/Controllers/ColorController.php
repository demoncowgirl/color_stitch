<?php

namespace App\Http\Controllers;
use Illuminate\Support\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Collective\Html\Eloquent;
use App\Models\Color;

class ColorController extends Controller
{

      public function index(){
          $colors = Color::orderBy('id', 'desc')->paginate(10);
          return view('colorInput', ['colors' => $colors]);
          }

      public function store(Request $request)
        {
          // validate the data
          $this->validate($request, [
              'dmc' => 'required|max:5|unique:colors',
              'hex' => 'required|min:7|unique:colors'
            ],
              $colors = [
                'dmc.required' => 'This field cannot be empty!',
                'hex.required' => 'This field is required.',
                'dmc.unique' => 'You have already entered this color.',
                'hex.unique' => 'You have already entered this color.'

              ]);

            // store in database
            $color = new Color();
            $color -> dmc = $request -> input('dmc');
            $color -> hex = $request -> input('hex');
            $color -> name = $request -> input('name');
            // $color -> userid = $request ->

            $color -> save();

            $request->session()->flash('status', 'Color added successfully!');

            return redirect('colorInput');

        }

        public function show($id){
          $color = Color::find($id);
          return view('colorInput', ['color' => $color]);
        }

        public function destroy($id){
          $color = Color::findOrFail($id);
          $color -> delete();

          $request->session()->flash('success', 'This color has been successfully deleted!');
          // redirect to another
          return redirect ('colorInput');
        }


    }
