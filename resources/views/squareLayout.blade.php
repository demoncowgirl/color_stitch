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

      <nav class="navbar navbar-expand-lg">
        <h2 class="navbar-brand">Beth's SAL Color Randomizer</h2>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/colorInput">Color Input</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
            </li>
          </ul>
        </div>
      </nav>

      @include('flash-message')

      <div class="main mt-4 justify-content-center align-text-center">
      <h2>Peppermint Purple 2021 SAL - Square</h2>

    <div class="container">
    <!-- <form method="GET" action=('App\Http\Controllers\PaletteController@getColors)'> -->
    <form>
        @foreach($colors as $color)
    <div class="d-flex">
      <div class="d-flex flex-row">
        <div id="box-horizontal" class="box" style="background:{{$colors[0] -> hex}}">
          <h4>Box 1</h4>
          <p>{{$colors[0] -> dmc}}</p>
          <p>{{$colors[0] -> name}}</p>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div id="box-square" class="box" style="background:{{$colors[1] -> hex}} ">
          <h4>Box 5</h4>
          <p>{{$colors[1] -> dmc}}</p>
          <p>{{$colors[1] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[2] -> hex}}">
          <h4>Box 4</h4>
          <p>{{$colors[2] -> dmc}}</p>
          <p>{{$colors[2] -> name}}</p>
        </div>
        <div id="box-vertical" class="box" style="background:{{$colors[3] -> hex}} ">
          <h4>Box 2</h4>
          <p>{{$colors[3] -> dmc}}</p>
          <p>{{$colors[3] -> name}}</p>
        </div>
        <div id="box-vertical" class="box" style="background:{{$colors[4] -> hex}} ">
          <h4>Box 3</h4>
          <p>{{$colors[4] -> dmc}}</p>
          <p>{{$colors[4] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[5] -> hex}} ">
          <h4>Box 8</h4>
          <p>{{$colors[5] -> dmc}}</p>
          <p>{{$colors[5] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[6] -> hex}} ">
          <h4>Box 9</h4>
          <p>{{$colors[6] -> dmc}}</p>
          <p>{{$colors[6] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row" style="margin-top: -80px;">
        <div id="box-square" class="box" style="background:{{$colors[7] -> hex}} ">
          <h4>Box 14</h4>
          <p>{{$colors[7] -> dmc}}</p>
          <p>{{$colors[7] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[8] -> hex}} ">
          <h4>Box 6</h4>
          <p>{{$colors[8] -> dmc}}</p>
          <p>{{$colors[8] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[9] -> hex}} ">
          <h4>Box 7</h4>
          <p>{{$colors[9] -> dmc}}</p>
          <p>{{$colors[9] -> name}}</p>
        </div>
        <div id="box-square" class="box-filler">
        </div>
        <div id="box-square" class="box-filler">
        </div>
        <div id="box-square" class="box" style="background:{{$colors[10] -> hex}} ">
          <h4>Box 10</h4>
          <p>{{$colors[10] -> dmc}}</p>
          <p>{{$colors[10] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[11] -> hex}} ">
          <h4>Box 11</h4>
          <p>{{$colors[11] -> dmc}}</p>
          <p>{{$colors[11] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[12] -> hex}} ">
          <h4>Box 15</h4>
          <p>{{$colors[12] -> dmc}}</p>
          <p>{{$colors[12] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div id="box-square" class="box" style="background:{{$colors[13] -> hex}} ">
          <h4>Box 22</h4>
          <p>{{$colors[13] -> dmc}}</p>
          <p>{{$colors[13] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[14] -> hex}} ">
          <h4>Box 16</h4>
          <p>{{$colors[14] -> dmc}}</p>
          <p>{{$colors[14] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[15] -> hex}} ">
          <h4>Box 12</h4>
          <p>{{$colors[15] -> dmc}}</p>
          <p>{{$colors[15] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[16] -> hex}} ">
          <h4>Box 13</h4>
          <p>{{$colors[16] -> dmc}}</p>
          <p>{{$colors[16] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[17] -> hex}} ">
          <h4>Box 17</h4>
          <p>{{$colors[17] -> dmc}}</p>
          <p>{{$colors[17] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[18] -> hex}} ">
          <h4>Box 24</h4>
          <p>{{$colors[18] -> dmc}}</p>
          <p>{{$colors[18] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div id="box-vertical" class="box" style="background:{{$colors[19] -> hex}} ">
          <h4>Box 30</h4>
          <p>{{$colors[19] -> dmc}}</p>
          <p>{{$colors[19] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[20] -> hex}} ">
          <h4>Box 26</h4>
          <p>{{$colors[20] -> dmc}}</p>
          <p>{{$colors[20] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[21] -> hex}} ">
          <h4>Box 18</h4>
          <p>{{$colors[21] -> dmc}}</p>
          <p>{{$colors[21] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[22] -> hex}} ">
          <p>Box 19</p>
          <p>{{$colors[22] -> dmc}}</p>
          <p>{{$colors[22] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[23] -> hex}} ">
          <p>Box 21</p>
            <p>{{$colors[23] -> dmc}}</p>
            <p>{{$colors[23] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[24] -> hex}} ">
          <p>Box 23</p>
          <p>{{$colors[24] -> dmc}}</p>
          <p>{{$colors[24] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[25] -> hex}} ">
          <p>Box 25</p>
          <p>{{$colors[25] -> dmc}}</p>
          <p>{{$colors[25] -> name}}</p>
        </div>
        <div id="box-vertical" class="box" style="background:{{$colors[26] -> hex}} ">
          <p>Box 33</p>
          <p>{{$colors[26] -> dmc}}</p>
          <p>{{$colors[26] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row" style="margin-top: -80px;">
        <div id="box-square" class="box" style="background:{{$colors[27] -> hex}} ">
          <p>Box 27</p>
          <p>{{$colors[27] -> dmc}}</p>
          <p>{{$colors[27] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[28] -> hex}} ">
          <p>Box 20</p>
          <p>{{$colors[28] -> dmc}}</p>
          <p>{{$colors[28] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[29] -> hex}} ">
          <p>Box 28</p>
          <p>{{$colors[29] -> dmc}}</p>
          <p>{{$colors[29] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[28] -> hex}} ">
          <p>Box 29</p>
          <p>{{$colors[28] -> dmc}}</p>
          <p>{{$colors[28] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[29] -> hex}} ">
          <p>Box 35</p>
          <p>{{$colors[29] -> dmc}}</p>
          <p>{{$colors[29] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[30] -> hex}} ">
          <p>Box 31</p>
          <p>{{$colors[30] -> dmc}}</p>
          <p>{{$colors[30] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div id="box-square" class="box" style="background:{{$colors[31] -> hex}} ">
          <p>Box 32</p>
          <p>{{$colors[31] -> dmc}}</p>
          <p>{{$colors[31] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[32] -> hex}} ">
          <p>Box 37</p>
          <p>{{$colors[32] -> dmc}}</p>
          <p>{{$colors[32] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[33] -> hex}} ">
          <p>Box 41</p>
          <p>{{$colors[33] -> dmc}}</p>
          <p>{{$colors[33] -> name}}</p>
        </div>
        <div id="box-horizontal" class="box" style="background:{{$colors[34] -> hex}} ">
          <p>Box 40</p>
          <p>{{$colors[34] -> dmc}}</p>
          <p>{{$colors[34] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[35] -> hex}} ">
          <p>Box 36</p>
          <p>{{$colors[35] -> dmc}}</p>
          <p>{{$colors[35] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[36] -> hex}} ">
          <p>Box 34</p>
          <p>{{$colors[36] -> dmc}}</p>
          <p>{{$colors[36] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row">
        <div id="box-square" class="box" style="background:{{$colors[37] -> hex}} ">
          <p>Box 39</p>
          <p>{{$colors[37] -> dmc}}</p>
          <p>{{$colors[37] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[38] -> hex}} ">
          <p>Box 46</p>
          <p>{{$colors[38] -> dmc}}</p>
          <p>{{$colors[38] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[39] -> hex}} ">
          <p>Box 47</p>
          <p>{{$colors[39] -> dmc}}</p>
          <p>{{$colors[39] -> name}}</p>
        </div>
        <div id="box-vertical" class="box" style="background:{{$colors[40] -> hex}} ">
          <p>Box 50</p>
          <p>{{$colors[40] -> dmc}}</p>
          <p>{{$colors[40] -> name}}</p>
        </div>
        <div id="box-vertical" class="box" style="background:{{$colors[41] -> hex}} ">
          <p>Box 51</p>
          <p>{{$colors[41] -> dmc}}</p>
          <p>{{$colors[41] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[42] -> hex}} ">
          <p>Box 43</p>
          <p>{{$colors[42] -> dmc}}</p>
          <p>{{$colors[42] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[43] -> hex}} ">
          <p>Box 42</p>
          <p>{{$colors[43] -> dmc}}</p>
          <p>{{$colors[43] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[44] -> hex}} ">
          <p>Box 38</p>
          <p>{{$colors[44] -> dmc}}</p>
          <p>{{$colors[44] -> name}}</p>
        </div>
      </div>

      <div class="d-flex flex-row" style="margin-top: -80px;">
        <div id="box-square" class="box" style="background:{{$colors[45] -> hex}} ">
          <p>Box 48</p>
          <p>{{$colors[45] -> dmc}}</p>
          <p>{{$colors[45] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[46] -> hex}} ">
          <p>Box 49</p>
          <p>{{$colors[46] -> dmc}}</p>
          <p>{{$colors[46] -> name}}</p>
        </div>
        <div id="box-square" class="box-filler">
           </div>
           <div id="box-square" class="box-filler">
           </div>
        <div id="box-square" class="box" style="background:{{$colors[47] -> hex}} ">
          <p>Box 45</p>
          <p>{{$colors[47] -> dmc}}</p>
          <p>{{$colors[47] -> name}}</p>
        </div>
        <div id="box-square" class="box" style="background:{{$colors[48] -> hex}} ">
          <p>Box 44</p>
          <p>{{$colors[48] -> dmc}}</p>
          <p>{{$colors[48] -> name}}</p>
        </div>
      </div>
      <div class="d-flex flex-row">
        <div id="box-horizontal" class="box" style="background:{{$colors[49] -> hex}} ">
          <p>Box 52</p>
          <p>{{$colors[49] -> dmc}}</p>
          <p>{{$colors[49] -> name}}</p>
        </div>
        </div>
        <button type="button" class="button" onclick="setRandomColor()">Change Colors</button>
      </div>
      @endforeach
    </form>
      </div>
      </div>
    </body>
</html>
