@extends('layouts.app-snow')
@section('title', 'About our Faculty | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>About our Faculty</strong></h1>

        @include("_faculty-list")

    </div>

@endsection
