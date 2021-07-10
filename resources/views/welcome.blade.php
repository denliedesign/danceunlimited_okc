@extends('layouts.app')

@section('content')

            <div id="vision">
                <div class="d-none d-md-block">
                    <div class="container video-container">
                        <div class="d-flex justify-content-center">
                            <p class="txt-overlay text-center txt-title">
                                OKC/Edmond Premier Dance & Acting Studio with a variety of classes for all ages
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <video id="myVideo" controls>
                                <source src="images/back-up.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="crop">
                        <img src="images/okcpointe.jpg" alt="" class="bg-img">
                    </div>
                </div>

                <!-- mobile -->
                <div class="d-block d-md-none">
                    <div class="d-flex justify-content-center">
                        <h1 class="txt-mobile">
                            OKC/Edmond Premier Dance & Acting Studio with a variety of classes for all ages
                        </h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <video id="mobileVideo" controls>
                            <source src="images/i-will-wait.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!-- end of mobile-->

            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="classes">
                            <div class="container">
                                <h1 class="txt-black-title mt-5">Dance Unlimited</h1>
                                <div class="scrolling-wrapper py-2" id="scrolling-wrapper">
                                    <div class="card mr-3" style="">
                                        <img src="images/classes/starlette.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Starlette</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 3-4 year olds.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger mr-3">ENROLL NOW</button></a>
                                            <a href="starlette-information"><button class="btn btn-outline-danger">LEARN MORE</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/starlettes-at-DU.JPG" alt="" style="width: 350px; height: 350px; object-fit: cover; object-position: 40% 0;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Starlette Ballet/Jazz/Tap/Hip Hop</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Classes designed for 5-7 year olds.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/acro.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Acro</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Ages 5 and up!</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/jr-hip-hop-hair.jpeg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">JR Hip Hop</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 7.5-8 year olds</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/jr-ballet.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">JR Ballet, Jazz, & Tap</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 8-11 year olds</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/hip-hop.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Teen Ballet, Jazz, Hip Hop & Tap</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for ages 12+.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-controls d-flex justify-content-center">
                            <button id="slide-left" class="mr-5"><i class="arrow click-left d-flex align-self-center"></i></button>
                            <button id="slide-right"><i class="arrow click-right d-flex align-self-center"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="spotlight">
                            <h1 class="txt-black-title pb-2 mt-5" style="padding-left: 15px;">Spotlight Acting Academy</h1>
                            <div class="container">
                                <div class="row" style="height: 492.267px;">
                                    <div class="col-sm">
{{--                                        <img src="images/spotlight-acting-sb.jpg" alt="" class="d-none d-md-block" style="height: 433px;">--}}
                                        <img src="images/spotlight-acting-sb.jpg" alt="">
                                    </div>
                                    <div class="col-sm">
                                        <p class="pt-2">
                                            At Spotlight Acting Academy, the doors are always open for students with a range of theatre experience. We offer the opportunity for students to explore their interest and passion in not only acting, but musical theatre and performance.
                                        </p>
                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger mb-3">ENROLL NOW</button></a>
                                        <a href="spotlight-acting-academy"><button type="button" class="btn btn-outline-danger mb-3">LEARN MORE</button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div id="calendar" class="mt-5 pb-5">
                <div class="container">
                    <h1 class="txt-black-title text-center">Calendar</h1>
                    @can('update', \App\Calendar::class) <p class="text-center"><a href="/calendars/create">New Calendar Item</a></p> @endcan
                    <div id="calendar">
{{--                        <div class="horizontal-controls d-flex justify-content-center my-2">--}}
{{--                            <button id="slide-left-calendar" class="mr-5"><i class="arrow click-left d-flex align-self-center"></i></button>--}}
{{--                            <button id="slide-right-calendar"><i class="arrow click-right d-flex align-self-center"></i></button>--}}
{{--                        </div>--}}
{{--                        <div class="scrolling-wrapper-calendar pb-2" id="scrolling-wrapper-calendar">--}}
{{--                        @include('calendars')--}}
                        @include('seasons')

                        </div>
                    </div>

                </div>
            </div>


    @endsection
