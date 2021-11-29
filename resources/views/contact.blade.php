<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact </title>
</head>
<body>
@extends('layout')

@section('content')
 	<p>Contact Page</p>
 	@foreach($data as $key => $value)
        {{ $key.'='.$value }}
        <br>
    @endforeach
 @endsection
</body>
</html>