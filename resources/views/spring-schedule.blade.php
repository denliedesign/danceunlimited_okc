@extends('layouts.app-snow')
@section('title', 'DU Spring Class Schedule | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>DU Spring Class Schedule</strong></h1>
        <p class="text-center">
            <a href="https://docs.google.com/document/d/1CnFJirjC7DiIxHtFMUTISAKUoYGGIl0fkU2GX7xPam8/edit?usp=sharing" target="_blank">Dance Spring 2024 Schedule</a>
        </p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3">
{{--            <div class="col-sm my-2"><img src="/images/23-du-fall-c.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
            <div class="col-sm"></div>
            <div class="col-sm my-2"><img src="/images/spring-2024.jpg" alt="dancer girl jumps in air" class="img-fluid shadow rounded"></div>
            <div class="col-sm"></div>
        </div>
    </div>

@endsection
