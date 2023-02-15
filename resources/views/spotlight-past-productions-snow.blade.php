@extends('layouts.app-snow')
@section('title', 'Spotlight Past Productions | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Spotlight Past Productions</strong></h1>

        <div class="row pt-5">
            <div class="col-sm">
                <img src="/images-snow/poster-1.jpg" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                <p class="my-1 text-capitalize text-center"><strong>mary poppins</strong></p>
                {{--                    <p>Ballet & Tap class for 3-4 year olds.</p>--}}
            </div>
            <div class="col-sm">
                <img src="/images-snow/poster-2.png" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                <p class="my-1 text-capitalize text-center"><strong>heathers</strong></p>
                {{--                    <p>Ballet/Tap and Jazz/Hip Hop classes for 5-7 year olds.</p>--}}
            </div>
            <div class="col-sm">
                <img src="/images-snow/poster-3.jpg" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                <p class="my-1 text-capitalize text-center"><strong>spongebob</strong></p>
                {{--                    <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 8-12.</p>--}}
            </div>
            <div class="col-sm">
                <img src="/images-snow/poster-4.png" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                <p class="my-1 text-capitalize text-center"><strong>wizard of oz</strong></p>
                {{--                    <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 13-18.</p>--}}
            </div>
        </div>
    </div>


@endsection
