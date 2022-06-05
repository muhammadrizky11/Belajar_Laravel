
@extends('Layout.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <h1>{{ $post->title }}</h1>
                <p>By : ruhul <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                <!-- Utuk Tidak Mengskip tang html -->
                {!! $post->body !!}
                <!-- Utuk Tidak Mengskip tang html -->
                <!-- Awal Belajar -->
                {{-- <h5>{{ $post->author }}</h5> --}}
                {{-- <p>{{ $post->body }}</p> --}}
                {{-- <img src="/img/{{ $image; }}" alt="{{ $name }}" width="200"> --}}
                <!-- Awal Belajar -->
            </div>
            <button class="mt-4 ">
                <a href="/post">kembali</a>
            </button>
        </div>
    </div>
</div>
@endsection

