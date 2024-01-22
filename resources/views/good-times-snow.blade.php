@extends('layouts.app-snow')
@section('title', 'Good Times Photo Gallery | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Good Times</strong></h1>
{{--        <p class="text-center">--}}
{{--            Photo gallery coming soon--}}
{{--        </p>--}}
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
            <div class="col my-2"><img src="/images/good-2.jpg" alt="dancers posing together" class="img-fluid shadow rounded"></div>
            <div class="col my-2"><img src="/images/good-3.jpg" alt="dancers posing together" class="img-fluid shadow rounded"></div>
            <div class="col my-2"><img src="/images/good-4.jpg" alt="dancers posing together" class="img-fluid shadow rounded"></div>
            <div class="col my-2"><img src="/images/good-1.jpg" alt="dancers posing together" class="img-fluid shadow rounded"></div>
        </div>
    </div>

@endsection
