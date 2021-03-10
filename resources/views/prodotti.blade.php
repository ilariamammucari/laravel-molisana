@extends('layout.app')

@section('titolo', 'Prodotti')
@section('content')
    <div class="box-card">
        <div class="card">
            @foreach ($formati as $formato)
                <img src="{{ $formato['src'] }}" alt="formato-pasta">
            @endforeach
        </div>
    </div>
@endsection