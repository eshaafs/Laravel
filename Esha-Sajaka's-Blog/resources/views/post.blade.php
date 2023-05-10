@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <article>
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By <a href="" class="text-decoration-none mb-4">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">

                <article class="my-3">
                    {!! $post->body !!}                     
                </article>
                <a href="/posts" class="mt-3 d-block text-decoration-none">Back to Posts</a>
            </article>
        </div>
    </div>
</div>


@endsection 