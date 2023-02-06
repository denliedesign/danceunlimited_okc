@extends('layouts.app-snow')
@section('title', 'Vibe Competition Team Audition Info | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Vibe Competition Team Audition Info</strong></h1>
        <div class="d-flex justify-content-center my-4">
            <img src="/images-snow/logo-new-vibe.jpeg" alt="vibe logo" class="img-fluid">
        </div>
        <p class="text-center">
            The Vibe Dance Company was designed for dancers to have extra stage time and work with guest artists from all over the U.S. When we are looking for VIBE dancers we are looking for dancers with a true love and passion for dance and who enjoy working to acquire advanced level dancing skills. We love dancers who think dancing is FUN! Competition dancers are expected to work to be well rounded, resilient and enthusiastic! We compete Ballet, Tap, Jazz, Contemporary, Hip Hop, Music Theatre and Open.
        </p>
        <hr class="my-4">
        <h2 class="text-center">Vibe Mission and Goals</h2>
        <ol>
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

    <div id="vibeSlide" class="carousel slide" data-bs-ride="carousel">
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
        <a class="carousel-control-prev" href="#vibeSlide" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#vibeSlide" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

@endsection
