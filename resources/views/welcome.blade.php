@extends('layouts.app')

@section('content')

            <div id="vision">
                <div class="d-none d-md-block">
                    <div class="container video-container">
                        <div class="d-flex justify-content-center">
                            <p class="txt-overlay text-center txt-title">
                                OKC/Edmond Premier Dance & Acting Studio With A Variety of Classes for All Students
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <video id="myVideo" controls poster="/images/dupac-poster.jpg">
                                <source src="images/dupac-22.mp4" type="video/mp4">
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
                            OKC/Edmond Premier Dance & Acting Studio With A Variety of Classes for All Students
                        </h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <video id="mobileVideo" controls poster="/images/dupac-poster.jpg">
                            <source src="images/dupac-22.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!-- end of mobile-->

            </div>

            <div class="container">
                <h1 class="txt-black-title mt-5">Dance Unlimited</h1>
                    <div class="row card-group">
                        <div class="card mx-2 rounded shadow" style="">
                            <img src="images/du-creative-combo.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold" style="font-size: 1.1em">Creative Combo</h5>
                                <p class="text-center card-text"style="white-space: normal; height: 24px;">Ballet & Tap class for 3-4 year olds.</p>
                            </div>
                            <div class="d-flex justify-content-center card-footer my-3 text-center">
                                <div>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger m-2">ENROLL NOW</button></a>
                                    <a href="starlette-information"><button class="btn btn-outline-danger my-2">LEARN MORE</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card mx-2 rounded shadow" style="">
                            <img src="images/du-children.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold" style="font-size: 1.1em">Children Level</h5>
                                <p class="text-center card-text"style="white-space: normal; height: 24px;">Ballet/Tap and Jazz/Hip Hop classes for 5-7 year olds.</p>
                            </div>
                            <div class="d-flex justify-content-center card-footer my-3 text-center">
                                <div>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger my-2">ENROLL NOW</button></a>
                                    <a href="starlette-information"><button class="btn btn-outline-danger m-2">LEARN MORE</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="card mx-2 rounded shadow">
                            <img src="images/du-junior.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold" style="font-size: 1.1em">Junior Level</h5>
                                <p class="text-center card-text"style="white-space: normal; height: 24px;">Ballet, Tap, Jazz, & Hip Hop classes for ages 8-12.</p>
                            </div>
                            <div class="d-flex justify-content-center my-3 card-footer">
                                <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger my-2">ENROLL NOW</button></a>
                            </div>
                        </div>
                        <div class="card mx-2 rounded shadow">
                            <img src="images/du-teen.jpg" alt="" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-center font-weight-bold" style="font-size: 1.1em">Teen Level</h5>
                                <p class="text-center card-text"style="white-space: normal; height: 24px;">Ballet, Tap, Jazz, & Hip Hop classes for ages 13-18.</p>
                            </div>
                            <div class="d-flex justify-content-center my-3 card-footer">
                                <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger my-2">ENROLL NOW</button></a>
                            </div>
                        </div>
                    </div>

                            <div id="spotlight" class="p-3 mt-5">
                                <h1 class="txt-black-title">Spotlight Acting Academy</h1>
                                    <div class="row">
                                        <div class="col-sm col-lg-3">
                                            <img src="images/spotlight-acting-sb.jpg" alt="" class="shadow rounded m-3">
                                        </div>
                                        <div class="col-sm col-lg-9 px-4">
                                            <p class="my-3">
                                                Spotlight Acting Academy provides quality training to students with a range of theatre experience. Production classes offer opportunities for students to explore their interest and passion in not only acting, but musical theatre & performance.
                                            </p>
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger mb-3">ENROLL NOW</button></a>
                                            <a href="spotlight-acting-academy"><button type="button" class="btn btn-outline-danger mb-3">LEARN MORE</button></a>
                                        </div>
                                    </div>
                            </div>
            </div>

{{--            <div id="calendar" class="mt-5">--}}
{{--                <div class="container">--}}
{{--                    <h1 class="txt-black-title text-center">Calendar</h1>--}}
{{--                    @can('update', \App\Calendar::class) <p class="text-center"><a href="/calendars/create">New Calendar Item</a></p> @endcan--}}
{{--                    <div id="calendar">--}}
{{--                        @include('seasons')--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <div class="container d-flex justify-content-center py-5">

            </div>

    @endsection
