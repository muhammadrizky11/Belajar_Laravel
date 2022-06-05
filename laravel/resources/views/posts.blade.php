
@extends('Layout.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div>
                <h1>{{ $post["title"] }}</h1>
                <h5>{{ $post["author"] }}</h5>
                <p>{{ $post["body"] }}</p>
                <img src="/img/{{ $image; }}" alt="{{ $name }}" width="200">
               
            </div>
            <button class="mt-4 ">
             <a href="/post">kembali</a>
             </button>
        </div>
    </div>
</div>
@endsection