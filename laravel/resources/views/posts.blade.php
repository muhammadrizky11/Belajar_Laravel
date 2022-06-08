
@extends('Layout.main')

@section('container')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div>
                <h1 class="mb-3">{{ $post->title }}</h1>
                <p>By : <a href="/post?autor={{ $post->autor->username }}"class="text-decoration-none">{{ $post->autor->name }}</a>
                    in:<a href="/post?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
                
                <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="img-fluid" alt="">

                <article class="my-3 fs-5">
                <!-- Utuk Tidak Mengskip tang html -->
                {!! $post->body !!}
                </article>
                
                <!-- Utuk Tidak Mengskip tang html -->
                <!-- Awal Belajar -->
                {{-- <h5>{{ $post->author }}</h5> --}}
                {{-- <p>{{ $post->body }}</p> --}}
                {{-- <img src="/img/{{ $image; }}" alt="{{ $name }}" width="200"> --}}
                <!-- Awal Belajar -->
            </div>
            <button class="">
                <a href="/post" class="text-decoration-none text-dark ">kembali</a>
            </button>
        </div>
    </div>
</div>
@endsection