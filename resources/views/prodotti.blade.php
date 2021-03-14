@extends('layout.app')

@section('titolo', 'Molisana Prodotti')
@section('content')
    <div class="box-card box-prodotti">
        @foreach ($formati as $tipo => $formato)
        <div class="titolo">
            <h2>
                <a href="{{ route('pagina-tipi-paste', ['tipo' => $tipo]) }}">{{ 'Pasta ' . $tipo }}</a>
            </h2>
        </div>
        @endforeach
    </div>
@endsection