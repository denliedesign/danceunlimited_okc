@extends('layouts.app-snow')
@section('title', 'Studio | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Studio</strong></h1>

        <p class="text-center mt-5">
            Our facility consists of four dance studios and one acting/dance studio and a voice studio. We have a professional faculty and floating wood floors for long-term body/joint protection.
            <br><br>
            <strong>Viewing Windows and TV lobby monitor</strong><br>
            In order to foster each dancer’s progress, please observe students through windows or lobby TV. Students, especially those new to dance, improve at a more accelerated pace without the scrutiny and pressure of parents, peers, and other observers peering throughout the window.  The dancers can see you thru the windows.
            <br><br>
            <strong>Lost & Found</strong><br>
            Look in cubbies for left items. Those items, including dance shoes, not picked up will be donated to a local charity.
        </p>

        <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4">
            <div class="col-sm my-3"><img src="/images-snow/studio-p1.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-p2.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-p3.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-p4.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <div class="col-sm my-3"><img src="/images-snow/studio-l1.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-l2.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-l3.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
            <div class="col-sm my-3"><img src="/images-snow/studio-l4.jpg" class="img-fluid shadow rounded" alt="studio picture"></div>
        </div>

{{--        <div class="d-flex justify-content-center my-5">--}}
{{--            <img src="images/faq-facility.png" alt="inside the studio" class="img-fluid shadow rounded">--}}
{{--        </div>--}}
    </div>

@endsection
