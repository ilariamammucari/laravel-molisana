@extends('layout.app')

@section('titolo', 'Molisana Prodotti')
@section('content')
    <div class="box-card">
        @foreach ($formati as $tipo => $formato)
        <h2>{{ $tipo }}</h2>
        <div class="card">
            @foreach ($formato as $k => $pasta)
            <img src="{{ $pasta['src'] }}" alt="formato-pasta">
            <div class="overlay">
                <a href="{{ route('dettagli', ['id' => $k]) }}">{{ $pasta['titolo'] }}</a>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
@endsection