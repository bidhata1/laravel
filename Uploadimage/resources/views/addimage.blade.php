
<!DOCTYPE html>
<html>
    <head><title>Image</title></head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<div class="container">
  <form method="post" action="{{ route('saveImage') }}" 
		enctype="multipart/form-data">
    @csrf
    <div class="image">
      <label><h3>Add image</h3></label>
      <input type="file" class="form-control" required name="image">
    </div>

    <div class="post_button">
      <button type="submit" class="btn btn-success">Add</button>
    </div>
  </form>
</body>
</div>
</html>