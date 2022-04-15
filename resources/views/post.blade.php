
@extends('layouts.main')

@section('container')
        <article class="md-5">
            <h2>{{ $post["title"] }}</h2>
            <p>By. Wiwin R in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            {!!  $post->body !!}
        </article>
        <a href="/posts">Back to Posts</a>

@endsection 