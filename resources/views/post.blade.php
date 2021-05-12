@extends('components.layout')

@section('banner')
    <title>My Blog - {{ $post->title }}</title>
@endsection

@section('content')
    <article>
        <h1>{!! $post->title !!}</h1>
        <ul>
            <li>Author: <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></li>
            <li>Category: <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></li>
        </ul>
        <p>{!! $post->body !!}</p>
        <!--Curly braces with !! are non-escaped content-->
    </article>
    <a href="/">Back</a>
@endsection
