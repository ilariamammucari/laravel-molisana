@extends('layout.app')

@section('titolo', 'Molisana Prodotti')
@section('content')
    <div class="box-card">
        @foreach ($formati as $tipo => $formato)
        <div class="titolo">
            <h2>{{ $tipo }}</h2>
        </div>
        @foreach ($formato as $k => $pasta)
        <div class="card">
            <img src="{{ $pasta['src'] }}" alt="formato-pasta">
            <div class="overlay">
                <a href="#">{{ $pasta['titolo'] }}</a>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>
@endsection