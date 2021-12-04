<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Post</title>
    <style type="text/css">
        .form-error{
            border :1px solid red;
        }
    </style>
</head>
<body>
 @extends('layout')

 @section('content')
 <div class="container">
    
    <div class="card">
        <div class="card-header" style="text-align:center">
            New Post
        </div>
        <form action="/posts" method="post">
            @csrf
          <div class="form-group">
            @if ($errors->any())
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif

            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{ old('name')}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea class="form-control" name="desc" placeholder="Enter description">{{ old('desc')}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <a href="/posts" class="btn btn-success">Back</a>
        </form>
    </div>
</div>
@endsection
</body>
</html>