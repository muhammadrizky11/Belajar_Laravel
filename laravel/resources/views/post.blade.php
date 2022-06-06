

@extends('Layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="mb-4">{{ $title }}</h1>
                    @foreach ($posts as $post)
                    <article class="mb-4 border-bottom pb-4">

                        <h2>
                            <a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
                        </h2>
                        
                        <p>By : <a href="/autors/{{ $post->autor->username }}" class="text-decoration-none" >{{ $post->autor->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                        
                        <p>{{ $post->excerpt }}</p>

                        <a href="/post/{{ $post->slug }}"class="text-decoration-none">Read more</a>
                    </article>
                    @endforeach
            </div>
        </div>
    </div>
@endsection


