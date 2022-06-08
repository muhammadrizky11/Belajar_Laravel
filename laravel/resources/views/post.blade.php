

@extends('Layout.main')

@section('container')

<h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/post">

                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('autor'))
                <input type="hidden" name="autor" value="{{ request('autor') }}">
                @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="cari.." name="cari">
                <button class="btn btn-success" type="submit">search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="card-img-top " alt="...">
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark" >{{ $posts[0]->title }}</a></h3>
                        <p>
                            <small class="text-muted">
                            By : <a href="/post?autor={{ $posts[0]->autor->username }}" class="text-decoration-none" >{{ $posts[0]->autor->name }}</a>
                            in <a href="/post?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                            {{ $posts[0]->created_at->diffForHumans() }}</small>
                        </p>
                    <p class="card-text">{{ $posts[0]->excerpt }}</p>
                    <a href="/post/{{ $posts[0]->slug }}"class="text-decoration-none btn btn-success">Read more</a>
                </div>
        </div> 
    @else
        <p class="text-center fs-4">no post found</p>
    @endif

    
    

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white " style="background-color: rgb(0, 0, 0, 0.4)">
                    <a class="text-decoration-none text-white" href="/post?category={{ $post->category->slug }}">
                {{ $post->category->name }} </a></div>
                <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                        <p>
                            <small class="text-muted">
                            By : <a href="/post?autor={{ $post->autor->username }}" class="text-decoration-none" >{{ $post->autor->name }}</a> 
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
<div class="my-4">
{{ $posts->links() }}
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


