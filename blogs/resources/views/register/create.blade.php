<!DOCTYPE html>
<html>
    <head>
        <title>simple Blogs</title>
        <!-- CSS only -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
<body>


<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="{{route('storeuser')}}">
            @csrf
            <div class="form-outline mb-4">
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" value="{{old('name')}}" />
                  <label class="form-label" for="form3Example1cg">FullName</label>
                  <span style="color:red">@error('name'){{$message}}@enderror</span>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" name="username" id="form3Example1cg" class="form-control form-control-lg" value="{{old('username')}}" />
                  <label class="form-label" for="form3Example1cg">Username</label>
                  <span style="color:red">@error('username'){{$message}}@enderror</span>
                </div>

                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" value="{{old('email')}}" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                  <span style="color:red">@error('email'){{$message}}@enderror</span>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" value="{{old('password')}}" />
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <span style="color:red">@error('password'){{$message}}@enderror</span>
                </div>

               

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="\login"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>

