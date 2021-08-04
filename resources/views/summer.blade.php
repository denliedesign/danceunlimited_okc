@extends('layouts.app')

@section('title', 'Summer 2020 | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Summer</p>
        @can('update', \App\Sstyle::class)
            <p class="text-center"><a href="/sstyles/create">New Summer Item</a></p>
        @endcan
{{--        <p class="text-center font-weight-bold my-0">June 15th-July 30th</p>--}}
        <p class="text-center font-weight-bold my-0">Summer 2022 Coming Soon</p>
{{--        <p class="text-center font-weight-bold my-0">We Are Now Enrolling For All Things Summer!</p>--}}
{{--        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>--}}
{{--        <h1 class="txt-black-title pt-5">Summer Schedule</h1>--}}
{{--        <div class="card-columns">--}}
{{--            @include('sstyles')--}}
{{--        </div>--}}

{{--        <h1 class="txt-black-title pt-5">Summer Camps</h1>--}}
{{--        <p>--}}
{{--            Thank you for a FUN Summer Camp season!!--}}
{{--        </p>--}}
{{--        <div>--}}
{{--            <div class="row row-cols-2 row-cols-lg-3">--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-1.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-1.png" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-2.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-2.png" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-3.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-3.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-4.jpeg" target="_blank">--}}
{{--                        <img src="images/summer/camp-4.jpeg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-5.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-5.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-6.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-6.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-7.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-7.png" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-8.PNG" target="_blank">--}}
{{--                        <img src="images/summer/camp-8.PNG" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
