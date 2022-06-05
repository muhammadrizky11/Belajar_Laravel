@extends('Layout.main')
@section('container')
<div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <h2>Halaman About</h2>
                    <h3>{{ $name }}</h3>
                    <p><?= $kelas; ?></p>
                    <p>{{$email}}</p>
                    <img class="img-thumbnail rounded border-primary" src="/img/<?= $image; ?>" alt="<?= $name; ?>" width="200">
                </div>
            </div>
        </div>
    </div>
    @endsection