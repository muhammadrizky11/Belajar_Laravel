@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <div>
                <h1 class="mb-3">{{ $posts->title }}</h1>
            
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my post</a>
                <a href="/dashboard/posts/{{ $posts->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $posts->slug }}" method="post" class="d-inline">
                    @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Yakin Mau Hapus ?')">Delete 
                            <span data-feather="trash-2"></button>
                    </form>
                    @if ($posts->image)
                    {{-- //dimasukkan di div untuk ngepaskan ukuran nya --}}
                        <div style="max-height: 350px; overflow:hidden;">
                            <img src="{{ asset('storage/'. $posts->image) }}" class="img-fluid mt-3" alt="{{ $posts->category->name }}">
                        </div>
                        @else
                        <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="img-fluid mt-3" alt="">
                    @endif

                <article class="my-3 fs-5">
                <!-- Utuk Tidak Mengskip tang html -->
                {!! $posts->body !!}
                </article>
            </div>
        </div>
    </div>
</div>
    
@endsection