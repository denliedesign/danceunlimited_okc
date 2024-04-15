@extends('layouts.app-snow')
@section('title', 'Spotlight Acting Class Schedule | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Spotlight Acting Class Schedule</strong></h1>
        <div class="d-flex justify-content-center my-4">
            <img src="/images/spotlight-classes-24.jpg" alt="" class="img-fluid">
        </div>
{{--        <p class="text-center">--}}
{{--            Summer Info coming end of Jan 2024--}}
{{--            <br><br>--}}
{{--            <a href="https://docs.google.com/document/d/1nT3Ge3RMpVZPeYLu3CjsZirPcCsffg_ryB70dAg-i-M/edit" target="_blank">Acting Spring 2024 Schedule</a>--}}
{{--            <br><br>--}}
{{--        </p>--}}
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col-sm d-flex align-items-center"><img src="/images/spot-1.jpg" alt="actors" class="img-fluid shadow rounded"></div>
            <div class="col-sm d-flex align-items-center"><img src="/images/spot-2.jpg" alt="actors" class="img-fluid shadow rounded"></div>
            <div class="col-sm d-flex align-items-center"><img src="/images/spot-3.jpg" alt="actors" class="img-fluid shadow rounded"></div>
        </div>
{{--        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">--}}
{{--            <div class="col-sm my-2"><img src="/images/23-spotlight-fall-c.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
{{--        </div>--}}
    </div>

@endsection
