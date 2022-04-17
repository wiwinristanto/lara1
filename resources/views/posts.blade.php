
@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
            <h2>{{ $post["judul"] }}</h2>
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>By. Wiwin R in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>  
            <p>{{ $post->excerpt}}</p>    
    @endforeach

@endsection