<?php
// use App\Http\Controllers\ProductController;
// $total=0;
// if(Session::has('user')){
//   $total=ProductController::itemCount();
// }
?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Books</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="addbooks">Add new book</a>
          </li>
        </ul>
        <div class="dropdown ml-4">
          @if (Session::has('user'))
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{Session::get('user')['name']}}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/logout">Logout</a></li>
          </ul>
          @else
          <a class="btn btn-secondary" href="/login" >
          Login
          </a>
          @endif
        </div>
      </div>
    </div>
  </nav>