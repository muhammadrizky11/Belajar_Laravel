

@extends('Layout.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col">
                <article class=" mb-5">
                    @foreach ($posts as $post)
                        <h2>
                            <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        <p>{{ $post->excerpt }}</p>
                    @endforeach
                </article>
            </div>
        </div>
    </div>
@endsection


