<!DOCTYPE html>
<html>

<head>
    <title>view</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD operation</h2>
                    <div class="pull-left">
                        <a class="btn btn-primary" href="{{ route('dashboard') }}" enctype="multipart/form-data"> Back</a>
                    </div>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('dashboard') }}"> Create</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>S.No</th>
                <th>Title</th>
                <th>Description</th>

                <th width="280px">Action</th>
            </tr>
            @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->post }}</td>
                <td>
                    <a href="{{ url('/edit', $item->id) }}" class="btn btn-primary ">Edit</a>
                    <a href="{{ url('/delete', $item->id) }}" class="btn btn-primary ">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</body>


</html>