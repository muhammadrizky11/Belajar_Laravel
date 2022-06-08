

@extends('Layout.main')

@section('container')

<h1 class="mb-4">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="" class="card-img-top " alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark" >{{ $posts[0]->title }}</a></h3>
                        <p>
                            <small class="text-muted">
                            By : <a href="/autors/{{ $posts[0]->autor->username }}" class="text-decoration-none" >{{ $posts[0]->autor->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}</small>
                        </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/post/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-success">Read more</a>
                </div>
        </div> @else
                <p class="text-center fs-4">no post found</p>
    @endif

    

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                            By : <a href="/autors/{{ $post->autor->username }}" class="text-decoration-none" >{{ $post->autor->name }}</a> 
                            {{ $post->created_at->diffForHumans() }}</small>
                        </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
@endforeach
    </div>
</div>
{{-- @foreach ($posts->skip(1) as $post)
    <article class="mb-4 border-bottom pb-4">
        <h2>
            <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>
        <p>By : 
            <a href="/autors/{{ $post->autor->username }}" class="text-decoration-none" >{{ $post->autor->name }}</a> 
            in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
            <p>{{ $post->excerpt }}</p>
            <a href="/post/{{ $post->slug }}"class="text-decoration-none">Read more</a>
    </article>
@endforeach --}}
        
@endsection


