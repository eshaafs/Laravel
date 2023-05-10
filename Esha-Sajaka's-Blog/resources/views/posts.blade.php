@extends('layouts.main')


@section('container')

    <h1 class="mb-4 text-center">{{ $title }}</h1>  

	{{-- Search --}}
	<div class="row justify-content-center mb-3">
		<div class="col-md-6 ">
			<form action="/posts">
				<div class="input-group mb-3">
					@if (request('category'))
						<input type="hidden" name="category" value="{{ request('category') }}">
					@endif
					@if (request('author'))
						<input type="hidden" name="author" value="{{ request('author') }}">
					@endif
					<input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
					<button class="btn btn-danger" type="submit" >Search</button>
				  </div>				  
			</form>
		</div>
	</div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
			<small class="text-body-secondary">
				<p>
					By <a href="/posts/?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts/?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
				</p> 
			</small>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>
			<a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div> 
        

	<div class="container">
		<div class="row">
			@foreach ($posts->skip(1) as $post)
			<div class="col-md-4 mb-3">
				<div class="card">
					<div class="label position-absolute bg-danger bg-opacity-75 p-2"><a class="text-decoration-none text-white" href="/posts/?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
					<img src="https://source.unsplash.com/500x350?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
					<div class="card-body">
					  <h5 class="card-title"><a class="text-decoration-none text-black" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
					  <small class="text-body-secondary">
						<p>
							By <a href="/posts/?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
						</p> 
					</small>
					  <p class="card-text">{{ $post->excerpt }}</p>
					  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
					</div>
				  </div>
			</div>
			@endforeach
		</div>
	</div>
 
    @else
        <p class="text-center fs-4">No post found.</p>    
    @endif

	{{ $posts->links() }}
@endsection
    
