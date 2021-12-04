<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Detail</title>
</head>
<body>
 @extends('layout')

 @section('content')
 <div class="container">
   
    <div class="card">
        <div class="card-header" style="text-align:center">
            Contents
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->name }}</h5>
            <p class="card-text">{{ $post->description }}</p>
            <a href="/posts" class="btn btn-success">Back</a>
        </div>
    </div>
</div>
@endsection
</body>
</html>