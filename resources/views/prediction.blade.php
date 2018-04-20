@extends('layouts.app')

@section('content')
    <div class="home-main">
        <p> <strong>Date:</strong> {{ $prediction['date'] }}</p>
        <p> <strong>Commodity:</strong> {{ $prediction['market_name'] }}</p>
        <p> <strong>Prediction:</strong> {{ $prediction['prediction'] }}</p>

        <div>
            <table cellpadding="15">
                <tr>
                    <th>Headline</th>
                    <th>Sentiment</th>
                </tr>
                @foreach($headlines as $headline)
                    <tr>
                        <td>{{ $headline->news_headline }}</td>
                        <td>{{ $headline->sentiment }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
