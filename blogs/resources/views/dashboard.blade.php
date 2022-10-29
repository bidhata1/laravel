<!DOCTYPE html>
<html>
    <head>
        <title>
            Dashboard
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    </head>
    <body>
    <h1 style="background-color: grey; text-align:center;">Hello there {{auth()->user()->name}}</h1>
        
    <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @auth
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                <li class="nav-item">
                        <button type="submit">Logout</button>
                    </li>
                  </form> 
                @else
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                 
                @endauth
            </ul>
        </div>

    </div>
    </nav>
    <div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add List</h2>
</div>

</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{route('storedata')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Title:</strong>
<input type="text" name="title" class="form-control" placeholder="Title">
@error('title')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Post</strong>
<input type="text" name="post" class="form-control" placeholder="Description">
@error('post')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<button type="submit" class="btn btn-primary ml-3">ADD</button>
</div>
<!--
        <h1>Hello there</h1>
        <h2> you are successfully login</h2>
        <form action="{{route('logout')}}" method="POST">
        <button type="submit" id="submit">Logout</button>
        </form>
-->
    </body>
</html>