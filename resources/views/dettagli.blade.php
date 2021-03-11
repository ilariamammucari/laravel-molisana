@extends('layout.app')

@section('titolo',$formati['titolo'])
@section('content')
    <div class="box-prodotto">
        <img src="{{ $formati['src-h'] }}" alt="pasta">
        <img src="{{ $formati['src-p'] }}" alt="pasta">
    </div>
    <div class="descrizione">
        <p>{!! $formati['descrizione'] !!}</p>
        <div class="info">
            <div class="tipo">
                <i class="fas fa-info-circle"></i>
                <p>{{ $formati['tipo'] }}</p>
            </div>
            <div class="cottura">
                <i class="fas fa-stopwatch"></i>
                <p>{{ $formati['cottura'] }}</p>
            </div>
            <div class="peso">
                <i class="fas fa-balance-scale"></i>
                <p>{{ $formati['peso'] }}</p>
                </p>
            </div>
        </div>
    </div>
@endsection