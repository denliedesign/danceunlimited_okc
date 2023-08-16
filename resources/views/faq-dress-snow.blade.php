@extends('layouts.app-snow')
@section('title', 'Studio Handbooks | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Studio Handbooks</strong></h1>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <h2 class="text-center"><strong>Starlettes ages 3-7</strong></h2>
            <div class="d-flex justify-content-center">
                <a href="/images/23-starlettes.pdf"
                   target="_blank">
                    <button class="btn btn-danger btn-sm mr-3" style="font-size: 1.5em;">23-24 Starlette Handbook</button>
                </a>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <h2 class="text-center"><strong>Dance Unlimited ages 8 and up</strong></h2>
        <div class="d-flex justify-content-center">
            <a href="/images/23-du-welcome.pdf"
               target="_blank">
                <button class="btn btn-danger btn-sm mr-3" style="font-size: 1.5em;">23-24 DU Handbook</button>
            </a>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <h2 class="text-center"><strong>Spotlight Acting Academy</strong></h2>
            <div class="d-flex justify-content-center">
                <a href="/images/23-spotlight-handbook.pdf"
                   target="_blank">
                    <button class="btn btn-danger btn-sm mr-3" style="font-size: 1.5em;">23-24 Spotlight Handbook</button>
                </a>
            </div>
        </div>
    </div>


@endsection
