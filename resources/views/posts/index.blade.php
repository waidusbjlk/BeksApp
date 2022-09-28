<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Posts</title>
</head>
<body class="antialiased">

<a href="{{route('posts.create')}}">Go to Create Page!!!</a>

 @foreach($posts as $post)
     <a href="{{route('posts.show' , $post->id)}}"><h3>{{$post->title}}</h3></a>
     <p>{{$post->content}}</p>

     <form action="{{route('posts.destroy' , $post->id)}}" method="post">
         @csrf
        @method('DELETE')
         <button type="submit">DELETE</button>
     </form>
 @endforeach

</body>
<html>
