
@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <article class="md-5"
            <h2>{{ $post["judul"] }}</h2>
            <h2>
                <a href="/posts/{{ $post["slug"] }}">
                    {{ $post["title"] }}
                </a>
            </h2>
            <h5>By: {{ $post["author"]}}</h5>
            <p>{{ $post["body"] }}</p>    

            
        </article>
    @endforeach

@endsection