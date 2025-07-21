@extends('layouts.app-snow')
@section('content')

<div class="container px-4 py-5">
    <div class="row d-flex align-items-center">
        <div class="col-md d-flex justify-content-center my-4">
            <div style="min-height: 350.5px;">
                <p class="text-center"><a class="text-white" href="https://sites.google.com/danceunlimitedokc.org/vibedanceco/home" target="_blank">Vibe Welcome</a></p>
                <a href="/vibe-audition"><img src="/images/logo-25-vibe.jpeg" alt="logo" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-md d-flex justify-content-center my-4">
            <div style="min-height: 350.5px;">
                <p class="text-center"><a class="text-white" href="https://sites.google.com/danceunlimitedokc.org/du-handbook?usp=sharing" target="_blank">DU Welcome</a></p>
                <a href="/class-offerings"><img src="/images-snow/logo-new-du.png" alt="logo" class="img-fluid"></a>
            </div>
        </div>
        <div class="col-md d-flex justify-content-center my-4">
            <div style="min-height: 350.5px;">
                <p class="text-center"><a class="text-white" href="https://sites.google.com/danceunlimitedokc.org/spotlight-acting-okc?usp=sharing" target="_blank">Spotlight Welcome</a></p>
                <a href="/spotlight-schedule"><img src="/images-snow/logo-new-spotlight.png" alt="logo" class="img-fluid"></a>
            </div>
        </div>
    </div>
</div>


@endsection
