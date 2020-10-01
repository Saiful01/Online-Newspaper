@extends('layouts.general')
@section('title', 'Biggan Projukti')
@section('content')

    @include('general.home.news_feed')
    <div class="container">
        @include('general.home.recent')
        @include('general.home.weekly')
        @include('general.home.all')
    </div>
@endsection