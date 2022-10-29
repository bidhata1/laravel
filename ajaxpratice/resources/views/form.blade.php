<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AJAX Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  </head>
  <body>
  
    <h1>Add new users</h1>
    <form method="POST" id="main_form" >
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="text" name="email" class="inputEmail4" id="inputEmail4" placeholder="Email"></br>
            <span style="color:red">@error('email'){{$message}}@enderror</span>
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="inputPassword" id="inputPassword4" placeholder="Password"></br>
            <span style="color:red">@error('password'){{$message}}@enderror</span>
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" class="inputAddress" name="address" id="inputAddress" placeholder="1234 Main St"></br>
          <span style="color:red">@error('address'){{$message}}@enderror</span>
        </div>    
      <button type="submit" class="submit-login-form" id="submitForm" class="btn btn-primary">Sign in</button>
      <div class="card-body">

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
            <th>Address</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($student as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->address }}</td>
            
            <td>
                <a href="" class="btn btn-primary btn-sm">Edit</a>
            </td>
            <td>
              <!-- <a href="{{ url('/delete', $item->id) }}"> -->
                <button class="btn btn-danger deleteData" data-id="{{$item->id}}" data-token="{{ csrf_token() }}"> Delete </button>
              <!-- </a> -->
            </td>
            
           
        </tr>
        @endforeach
    </tbody>
</table>

</div>
    </form> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $.ajaxSetup({
        headers: {
            'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
    });

    $(document).ready(function() {

        //add comment function by id
        $('#submitForm').click(function(e) {
            e.preventDefault();
            var email = $('.inputEmail4').val();
            var password = $('.inputPassword').val();
            var address = $('.inputAddress').val();
            var this_ = $(this);
           $.ajax({
                type: "post",
                url: "{{route('formsubmit')}}",
                data: {
                
                    email: email,
                    password: password,
                    address: address,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    alert(response.data);
                 },


            });

        })
    });




    // Delete

    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF_TOKEN': $('meta[name="csrf_token"]').attr('content')
    //     }
    // });

    $(document).ready(function(){
        $('.deleteData').click(function(e) {
            e.preventDefault();
            // alert('hello');
            var id = $(this).data("id");
            var token = $(this).data("token");
           $.ajax({
                type: "get",
                url: "delete/"+id,
                data: {
                    id: id,
                    token: token,
                },
                success: function(response) {
                    console.log("success");

                }
            });
            console.log("failed");
        });
    });
</script>
</body>
</html>
