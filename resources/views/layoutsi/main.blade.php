<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('main.index') }}">Main</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('employee.index')}}">Employees</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </div>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>