
@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article class="md-5"
            <h2>{{ $post["judul"] }}</h2>
            <h2>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h2>
            
            <p>{{ $post->excerpt}}</p>    

            
        </article>
    @endforeach

@endsection