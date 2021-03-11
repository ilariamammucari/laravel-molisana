@extends('layout.app')

@section('titolo', 'Molisana dettagli prodotti')
@section('content')
    <div class="box-prodotto">
        <img src="{{ $formato['src-h'] }}" alt="pasta">
        <img src="{{ $formato['src-p'] }}" alt="pasta">
    </div>
    <div class="descrizione">
        {!! $formato['descrizione'] !!}
        <div class="info">
            <div class="tipo">
                <p>{{ $formato['tipo'] }}</p>
            </div>
            <div class="cottura">
                <p>{{ $formato['cottura'] }}</p>
            </div>
            <div class="peso">
                <p>
                <p>{{ $formato['peso'] }}</p>
                </p>
            </div>
        </div>
    </div>
@endsection