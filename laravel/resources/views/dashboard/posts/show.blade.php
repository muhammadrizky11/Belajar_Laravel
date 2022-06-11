@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <div>
                <h1 class="mb-3">{{ $posts->title }}</h1>
            
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete</a>

                <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="img-fluid mt-3" alt="">

                <article class="my-3 fs-5">
                <!-- Utuk Tidak Mengskip tang html -->
                {!! $posts->body !!}
                </article>
                
                <!-- Utuk Tidak Mengskip tang html -->
                <!-- Awal Belajar -->
                {{-- <h5>{{ $post->author }}</h5> --}}
                {{-- <p>{{ $post->body }}</p> --}}
                {{-- <img src="/img/{{ $image; }}" alt="{{ $name }}" width="200"> --}}
                <!-- Awal Belajar -->
            </div>
            <button class="">
                <a href="/posts" class="text-decoration-none text-dark ">kembali</a>
            </button>
        </div>
    </div>
</div>
    
@endsection