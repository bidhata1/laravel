<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
   
    <h1>Hello, world!</h1>
    <form action="{{route('formsubmit')}}" method="POST">
      @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="text" name="email" id="inputEmail4" placeholder="Email"></br>
      <span style="color:red">@error('email'){{$message}}@enderror</span>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" name="password" id="inputPassword4" placeholder="Password"></br>
      <span style="color:red">@error('password'){{$message}}@enderror</span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="address" id="inputAddress" placeholder="1234 Main St"></br>
    <span style="color:red">@error('address'){{$message}}@enderror</span>
  </div>
 
<button type="submit" class="btn btn-primary">Sign in</button>
</form>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>-->
  </body>
</html>