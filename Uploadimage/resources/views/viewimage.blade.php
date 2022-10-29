<!DOCTYPE html>
<html>
    <head>
        <title>viewImage</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
<body>
<div class="pull-left">
<a class="btn btn-primary" href="{{ route('uploadImage') }}" enctype="multipart/form-data"> Back</a>
</div>
<div class="container">
    <h3>View all image</h3><hr>
    <table class="table" border="2px">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
	     <img src="{{ url('public/Image/'.$data->image) }}"
          style="height: 100px; width: 150px;">
	  </td>
      <td><a href="{{ url('/editimage', $data->id) }}" class="btn btn-primary ">Edit</a></td>

        <td>
              <a href="{{ url('/delete', $data->id) }}"><span class="btn btn-danger"> Delete </span></a>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>