<?php

use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
  $total = ProductController::cartItem();
}

?>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Webshop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <form class="navbar-form navbar-left" >
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>

<ul class="nav navbar-nav navbar-right">

<li><a href="#">Cart {{$total}}</a></li>

@if(Session::has('user'))

 <!-- Dropdown -->
 <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       {{Session::get('user')['name']}}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/logout">Logout</a>
        
      </div>
    </li>
@else 
<li><a href="/login">Login</a></li>

@endif
</ul>

  </div>
</nav>