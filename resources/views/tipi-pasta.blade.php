@extends('layout.app')

@section('titolo', 'Molisana tipi paste')
@section('content') 
<div class="box-card box-pasta">
    @foreach ($formati as $k => $formato)
    <div class="card">
                <img src="{{ $formato['src'] }}" alt="formato-pasta">
                <div class="overlay">
                    <a href="{{ route('pagina-dettagli', ['id' => $k]) }}">{{ $formato['titolo'] }}</a>
                </div>
            </div>
            @endforeach
</div>
@endsection