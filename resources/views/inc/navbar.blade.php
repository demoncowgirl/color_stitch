<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="fixed-bottom mb-0 pb-0">
@guest
<nav class="navbar navbar-expand-lg">
  <h2 class="navbar-brand">Beth's SAL Color Randomizer</h2>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/auth/login" class="trigger-btn" data-toggle="modal">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="auth/register" class="trigger-btn" data-toggle="modal">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/colorInput">Color Input</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/squareLayout">Square Layout</a>
      </li>
    </ul>
  </div>
</nav>
@endguest

@if (auth()->check())
<nav class="navbar navbar-expand-lg">
  <h2 class="navbar-brand">Beth's SAL Color Randomizer</h2>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/colorInput">Color Input</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rectangleLayout">Rectangle Layout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/squareLayout">Square Layout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
@endif
</div>
