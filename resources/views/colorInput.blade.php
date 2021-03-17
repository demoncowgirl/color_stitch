<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SAL 2021</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">
        <script src="/js/app.js" rel="javascript"></script>

        <script> src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"</script>

    </head>

<body>

      @include('inc/navbar')
      @include('flash-message')

   <div id="main" class="container">
     <div class="flex-row">
       <div class="form container float-right">
         <div class="d-flex flex-column">
            <h1>Floss Color Input</h1>
             <form method="POST" action="{{ route('colors.store')}}" enctype="multipart/form-data">
              <label for="dmc">DMC Floss Color:</label><br>
              <input type="text" id="dmc" name="dmc" placeholder="Required"><br>
              <label for="hex">Hex Color:</label><br>
              <input type="text" id="hex" name="hex" placeholder="Do not add #"><br>
              <label for="name">Color Name:</label><br>
              <input type="text" id="name" name="name" placeholder="Optional"><br>
              <input class="button" type="submit" value="Submit">
            </form>
            <!-- <form>
              <label for="aida">Aida Color:</label><br>
              <input type="text" id="aida" name="aida" onchange="changeBackground();"><br>
              <input class="button" id="submitColor" value="Submit" type="button" />
            </form> -->
          </div>
        </div>
      <div class="form container float-left">
      <div class="d-flex flex-column">
      <div class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">DMC Floss</th>
            <th scope="col">Hex Color</th>
            <th scope="col">Name</th>
          </tr>
        </thead><br>
        <tbody>
          @foreach($colors as $color)
            <tr>
              <th scope="row">{{ $color->id}}</td>
              <td>{{ $color->dmc }}</td>
              <td>{{ $color->hex}}</td>
              <td>{{ $color->name}}</td>
              <td class="mini_square" style="background:{{$color -> hex}}"></td>
              <td>
                <button type="button" class="btn btn-light float-right">Delete
                  <a href="{{ route('colors.destroy', ['id' => $color -> id]) }}"></a>
                </button><br>
              </td>
            </tr>
            @endforeach
        </tbody>
     </div> <!-- end of table-->
   </div>
 </div>
</div>

<div class="flex-row">
  <div class="form container float-left">
  <div class="d-flex flex-column">
     <h2>My Palettes</h2>
     <div class="table table-bordered">
       <thead>
         <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Square #</th>
           <th>DMC #</th>
           <th>Color</th>
         </tr>
       </thead><br>
</div>
         </div>
  </div>
  <div class="form container float-right">
  <div class="d-flex flex-column">
    <h2>Create Palette</h2>
         <form method="POST" action="{{ action('App\Http\Controllers\PaletteController@store') }}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="palette_name">Palette Name:</label><br>
              <input type="text" id="palette_name" name="palette_name" placeholder="Give your palette a name"><br>

              <label for="squares">Choose square:</label><br>
              <select id="squares" name="squares">
               <option value="0">Square 1</option>
               <option value="1">Square 2</option>
               <option value="2">Square 3</option>
               <option value="3">Square 4</option>
               <option value="4">Square 5</option>
               <option value="5">Square 6</option>
               <option value="6">Square 7</option>
               <option value="7">Square 8</option>
               <option value="8">Square 9</option>
               <option value="9">Square 10</option>
               <option value="10">Square 11</option>
               <option value="11">Square 12</option>
               <option value="12">Square 13</option>
               <option value="13">Square 14</option>
               <option value="14">Square 15</option>
               <option value="15">Square 16</option>
               <option value="16">Square 17</option>
               <option value="17">Square 18</option>
               <option value="18">Square 19</option>
               <option value="19">Square 20</option>
               <option value="20">Square 21</option>
               <option value="21">Square 22</option>
               <option value="22">Square 23</option>
               <option value="23">Square 24</option>
               <option value="24">Square 25</option>
               <option value="25">Square 26</option>
               <option value="26">Square 27</option>
               <option value="27">Square 28</option>
               <option value="28">Square 29</option>
               <option value="29">Square 30</option>
               <option value="30">Square 31</option>
               <option value="31">Square 32</option>
               <option value="32">Square 33</option>
               <option value="33">Square 34</option>
               <option value="34">Square 35</option>
               <option value="35">Square 36</option>
               <option value="36">Square 37</option>
               <option value="37">Square 38</option>
               <option value="38">Square 39</option>
               <option value="39">Square 40</option>
               <option value="40">Square 41</option>
               <option value="41">Square 42</option>
               <option value="42">Square 43</option>
               <option value="43">Square 44</option>
               <option value="44">Square 45</option>
               <option value="45">Square 46</option>
               <option value="46">Square 47</option>
               <option value="46">Square 48</option>
               <option value="48">Square 49</option>
               <option value="49">Square 50</option>
               <option value="50">Square 51</option>
               <option value="51">Square 52</option>
             </select><br>
         </form>
         <form method="GET" action="{{ action('App\Http\Controllers\ColorController@index') }}" enctype="multipart/form-data">
          <label for="dmc">DMC Floss Color:</label><br>
          <input type="text" id="id" name="id" placeholder="Select ID from list"><br>
          <input class="button" type="submit" value="Submit">
         </form>
  </div>
</div>




  <div class="form container">
      <h3>Helpful Websites</h3>
      <a href="http://peppermintpurple.com" target="_blank" rel="noopener noreferrer">Peppermint Purple Website</a><br>
      <a href="http://stitchpalettes.com" target="_blank" rel="noopener noreferrer">Stitch Pallettes Website</a><br>
      <a href="http://dmc.crazyartzone.com" target="_blank" rel="noopener noreferrer">Crazy Art Zone Website</a>
  </div>
  </div>
</body>
</html>
