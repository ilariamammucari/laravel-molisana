@extends('layout.app')

@section('titolo', 'Molisana News')
@section('content')
<div class="sotto-titolo">
    <h2>News e approfondimenti dal mondo la molisana</h2>
</div>
<div class="box-card">
    @foreach ($news as $el)
    <div class="card card-news">
        <img src="{{ $el['img'] }}" alt="foto">
        <div class="testo">
            <p>{{ $el['data'] }}</p>
            <p>{{ $el['descrizione'] }}</p>
        </div>
        <button>
            <a href="#">
                Read more
            </a>
        </button>
    </div>
    @endforeach
</div>
@endsection