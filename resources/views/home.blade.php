@extends('layouts.app')

@section('content')
<div class="home-main">
    <h1> Market Predictions </h1>
    <table class="predictions-table">
        <tr>
            <th> Date </th>
            <th> Market/Commodity </th>
            <th> Prev. Day Low </th>
            <th> Prev. Day High </th>
            <th> Trend Predictioin</th>
        </tr>
        @foreach($predictions as $pred)
            <tr>
                <th>{{ $pred->date }}</th>
                <th>{{ $pred->market_name }}</th>
                <th>{{ $pred->prev_day_low }}</th>
                <th>{{ $pred->prev_day_high }}</th>
                <th>{{ $pred->prediction }}</th>
            </tr>
        @endforeach
    </table>
</div>
@endsection
