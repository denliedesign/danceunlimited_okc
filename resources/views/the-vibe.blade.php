@extends('layouts.app')

@section('title', 'The Vibe | Dance Unlimited')

@section('content')

    <div class="container pb-5">
{{--        <p class="txt-title text-center pt-5">Vibe Dance Company 2020-2021</p>--}}
        <div class="d-flex justify-content-center">
            <img src="/images/vibe-2021-logo-white.png" alt="Vibe Dance Company 2020-2021" class="img-fluid" style="max-height: 200px;">
        </div>
        <p class="text-center">
            The Vibe Dance Company was designed for dancers to have extra stage time and work with guest artists from all over the U.S. When we are looking for VIBE dancers we are looking for dancers with a true love and passion for dance and who enjoy working to acquire advanced level dancing skills. We love dancers who think dancing is FUN! Competition dancers are expected to work to be well rounded, resilient and enthusiastic! We compete Ballet, Tap, Jazz, Contemporary, Hip Hop, Music Theatre and Open.
        </p>
        <p class="text-center"><strong>Auditions for 21-22 will be June 3rd, 2021</strong></p>
    </div>

    <div id="vibeSlide" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/vibe-8.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-7.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-6.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-5.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-4.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-3.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-2.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="images/vibe-9.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#vibeSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#vibeSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container pb-5">
        <div class="row">
            <div class="col-sm-4 d-flex justify-content-center align-items-center">
                <img src="/images/vibe-2021-logo.png" alt="Vibe Dance Company" class="img-fluid">
            </div>
            <div class="col-sm-8">
                <h1 class="txt-black-title pt-5 text-center">VIBE Mission and Goals</h1>
                <div class="row dress-box py-3 px-4" id="goals-text">
                    <ol>
{{--                        <li>To offer dancers dance training on a more advanced level and help them appreciate dance as an art form and profession.</li>--}}
{{--                        <li>To explore our creative side and understand the art of dance.</li>--}}
{{--                        <li>To challenge and push each dancer to their full potential.</li>--}}
{{--                        <li>To have fun!</li>--}}
                        <li>Bring technique and performance to next level.</li>
                        <li>Explore creative side, Encourage Artistry.</li>
                        <li>Inspire confidence.</li>
                        <li>Foster the whole dancer, encouraging each dancer to live a healthy and balanced life.</li>
                        <li>Recognize the trophy is only a part of what we do.</li>
                        <li>Dancers will; demonstrate respect for their training, their teachers and their fellow team members.</li>
                        <li>Dancers work toward a common goal, learning valuable lessons along the way.</li>
                        <li>Instructors will provide dancers with direct and honest feedback while honoring each dancer individually and honoring their unique learning style and personality.</li>
                        <li>We will Challenge and Push each dancer to their full potential </li>
                        <li>Emphasize the JOY of dance, the POWER of commitment and value of TEAM work!</li>
                    </ol>
                </div>
                <div class="mt-5 d-flex justify-content-center">
{{--                    <a href="meet-the-vibe"><button class="btn btn-danger mr-3">MEET THE VIBE</button></a>--}}
                    <a href="images/vibe-audition-21.pdf" target="_blank"><button class="btn btn-outline-danger mr-3">THE VIBE AUDITION FORM</button></a>
                    <a href="images/vibe-policy.pdf" target="_blank"><button class="btn btn-outline-danger">THE VIBE POLICY</button></a>
                </div>
                <div class="mb-5 mt-3 d-flex justify-content-center">
                    <a href="images/vibette-info.pdf" target="_blank"><button class="btn btn-outline-danger mr-3">VIBETTES INFO</button></a>
                    <a href="images/vibette-contract-21.pdf" target="_blank"><button class="btn btn-outline-danger">VIBETTES CONTRACT</button></a>
                </div>
            </div>

        </div>

    </div>


@endsection
