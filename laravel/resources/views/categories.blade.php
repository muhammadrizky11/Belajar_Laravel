

@extends('Layout.main')

@section('container')
    
<article class=" mb-5">
    <h1 class="my-4">{{ $title }}</h1>

    <div class="contaner">
        <div class="row">
            @foreach ($categories as $category)
            <div class="col">
                <a href="/post?categories={{ $category->slug }}">
                    <div class="card bg-dark text-white">
                        <img src="https://www.brainacademy.id/hubfs/Pojok%20Kampus%20-%20Jurusan%20Teknik%20Komputer-01.jpeg" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center p-0">
                            <h5 class="card-title text-center flex-fill p-2 fs-5" style="background-color: rgba(0,0,0,0.5)">{{ $category->name }}</h5>
                            
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        
    </div>
</article>


{{-- @foreach ($categories as $category)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{ $category->slug }}"></a>
            </h2>
        </li>
    </ul>   
@endforeach 
        --}}
@endsection


{{-- {{ $name }} --}}
