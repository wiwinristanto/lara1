
@extends('layouts.main')

@section('container')
        <article class="md-5">
            <h2>{{ $post["title"] }}</h2>
            {!!  $post->body !!}
        </article>
        <a href="/posts">Back to Posts</a>

@endsection