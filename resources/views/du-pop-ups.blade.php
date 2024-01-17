@extends('layouts.app-snow')
@section('title', 'DU Pop Ups | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>DU Pop Ups</strong></h1>
{{--        <p class="text-center">Coming Jan 15th</p>--}}

        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2 mt-5">
            <div class="col-sm my-3"><img src="/images/pop-up-pink.png" alt="camp info" class="img-fluid shadow rounded"></div>
            <div class="col-sm my-3"><img src="/images/pop-up-eras.png" alt="camp info" class="img-fluid shadow rounded"></div>
{{--            <div class="col-sm my-3"><img src="/images-snow/doll-camp.jpeg" alt="summer camp info" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm-1"></div>--}}
        </div>
{{--        <div class="d-flex justify-content-center">--}}
{{--            <div class="col-sm-2"></div>--}}
{{--            <div class="col-sm my-3"><img src="/images-snow/camps-6.jpeg" alt="summer camp info" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm-2"></div>--}}
{{--        </div>--}}
    </div>

@endsection
