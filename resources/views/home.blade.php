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
    <div class="card">
        <div class="card-header" style="text-align:center">
            Contents
        </div>
        @foreach($data as $post)
        <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <a href="#" class="btn btn-primary">View</a>
        </div><hr>
        @endforeach
    </div>
</div>
@endsection
</body>
</html>