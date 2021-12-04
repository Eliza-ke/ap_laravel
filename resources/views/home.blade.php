<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>home</title>
</head>
<body>
 @extends('layout')

 @section('content')
 <div class="container">
    <div><a href="/posts/create" class="btn btn-success">New Post</a></div>
    <div class="card">
        <div class="card-header" style="text-align:center">
            Contents
        </div>
        @foreach($data as $post)
        <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <div class="form-row">
                <a style="margin-right:5px" href="/posts/{{$post->id}}" class="btn btn-primary">View</a>
                <a style="margin-right:5px" href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit</a>
                <form action="/posts/{{ $post->id }}" method="post">
                    @csrf
                    @Method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </div>
        </div><hr>
        @endforeach
    </div>
</div>
@endsection
</body>
</html>