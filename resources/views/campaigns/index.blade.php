@extends('layouts.admin')

@section('content')

<!-- campaigns/index.blade.php -->
@foreach ($campaigns as $campaign)
    <div>
        <h3>{{ $campaign->name }}</h3>
        <p>Start Date: {{ $campaign->start_date }}</p>
        <p>End Date: {{ $campaign->end_date }}</p>
        <p>Status: {{ $campaign->status }}</p>
        <a href="{{ route('campaigns.show', $campaign) }}">Voir les publicités</a>
    </div>
@endforeach

<!-- ads/stats.blade.php -->
<h3>Statistiques pour : {{ $ad->title }}</h3>
<p>Impressions: {{ $impressions }}</p>
<p>Clics: {{ $clicks }}</p>
<p>Taux de clics (CTR): {{ $clickThroughRate }}%</p>
