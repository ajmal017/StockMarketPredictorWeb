@extends('layouts.app')

@section('content')
    <div class="home-main">
        {{ $prediction['date'] }}
        {{ $prediction['market_name'] }}
        {{ $prediction['prev_day_low'] }}
        {{ $prediction['prev_day_high'] }}
        {{ $prediction['prediction'] }}

        <div>
            @foreach($headlines as $headline)
                {{ $headline->news_headline }}
            @endforeach
        </div>
    </div>
@endsection