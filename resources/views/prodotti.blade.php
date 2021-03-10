@extends('layout.app')

@section('titolo', 'Prodotti')
@section('content')
    <div class="box-card">
        @foreach ($formati as $formato)
        <div class="card">
                <img src="{{ $formato['src'] }}" alt="formato-pasta">
                <div class="overlay">
                    <a href="#">{{ $formato['titolo'] }}</a>
                </div>
        </div>
        @endforeach
    </div>
@endsection