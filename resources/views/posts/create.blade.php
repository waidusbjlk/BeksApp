<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Create Posts</title>
</head>
<body>

<a href="{{route('posts.index')}}">Go to Index Page!!!</a>

    <form action="{{route('posts.store')}}" method="post">
     @csrf
    Ttile:<input type="text" name="title"><br>
    Content:<textarea name="content" cols="30" rows="10"></textarea>
    <button type="submit">Save Post</button>
    </form>
</body>
<html>
