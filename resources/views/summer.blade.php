@extends('layouts.app')

@section('title', 'Summer 2020 | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Summer 2020</p>
        <p class="text-center font-weight-bold my-0">June 15th-July 30th</p>
        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>
        <h1 class="txt-black-title pt-5">Summer Schedule</h1>
        <div class="row row-cols-1 row-cols-md-2">
            @include('sstyles')
        </div>

        @can('update', \App\Sstyle::class)
            <div class="p-3">
                <h2>New Summer Style</h2>
                <form action="sstyles" method="POST">
                    @include('forms.style')
                    <button type="submit" class="btn btn-primary">Add Style</button>
                </form>
            </div>
        @endcan

        <h1 class="txt-black-title pt-5">Dance Unlimited Summer Camps</h1>
        <div>
            <div class="row row-cols-2 row-cols-lg-4">
                <div class="col mt-3">
                    <a href="images/summer/1.jpg" target="_blank">
                        <img src="images/summer/1.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/2.png" target="_blank">
                        <img src="images/summer/2.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/3.png" target="_blank">
                        <img src="images/summer/3.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/4.png" target="_blank">
                        <img src="images/summer/4.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/5.png" target="_blank">
                        <img src="images/summer/5.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/6.png" target="_blank">
                        <img src="images/summer/6.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
                <div class="col mt-3">
                    <a href="images/summer/7.png" target="_blank">
                        <img src="images/summer/7.png" alt="" style="width: 100%;">
                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                    </a>
                </div>
            </div>
        </div>
        <h1 class="txt-black-title pt-5 mt-5">Spotlight Acting Academy Summer Camps</h1>
        <div class="py-3">
            <div class="row row-cols-2 row-cols-lg-4">
                <div class="col">
                    <a href="images/summer/act1.png" target="_blank">
                        <img src="images/summer/act1.png" alt="" style="width: 100%;">
                    </a>
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                </div>
                <div class="col">
                    <a href="images/summer/act2.png" target="_blank">
                        <img src="images/summer/act2.png" alt="" style="width: 100%;">
                    </a>
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>
                </div>
            </div>
        </div>

    </div>

@endsection
