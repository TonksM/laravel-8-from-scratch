@extends('components.layout')

@section('banner')
    <title>My Blog - All Posts</title>
@endsection

@section('content')
    @foreach ($posts as $post)
        <article>
            <h1><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h1>
            <ul>
                <li>Author: <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></li>
                <li>Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></li>
            </ul>           
            <div>{{$post->excerpt}}</div>
        </article>
    @endforeach
@endsection

