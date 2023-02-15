@extends('layouts.app-snow')
@section('title', 'Spotlight Acting Show Info | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>Spotlight Acting Show Info</strong></h1>
        <div class="d-flex justify-content-center my-4">
            <img src="/images-snow/logo-new-spotlight.png" alt="spotlight acting logo" class="img-fluid">
        </div>
        <p class="text-center">
            At Spotlight Acting Academy, the doors are always open for students with a range of theatre experience. We offer the opportunity for students to explore their interest and passion in not only acting, but musical theatre and performance. Our classes focus on educating students on audition techniques, theatre etiquette, and the foundations of voice, dancing, and acting performance. Our students are able to put all of their hard work and showcase their progress at the end of each semester in our musical production. Our productions have ranged from Elf Jr to Madagascar Jr and everything in between. We pride ourselves in presenting the best production quality for our students from costuming, props, set design, lighting, and sound to allow for the best experience possible that allows our students to shine on stage. Our production classes not only deepen a student’s interest in musical theatre but are also a great way for a student to try something new that helps them to break out of their shell and flourish creatively.
            <br><br>
            All classes perform two productions each year - one in the fall and one in the spring. Productions are composed of songs, dances, and lines that must be memorized by the show.
        </p>
        <hr class="my-4">
        <h2 class="text-center"><strong>Spotlight Audition Info</strong></h2>
        <p class="text-center">Auditions have been concluded for this semester. Please check back for up-coming summer productions</p>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            @include('_spotlight-productions')
        </div>
    </div>

    <div class="container py-5">
        <h2><strong>Students</strong></h2>
        <p>
            Spotlight Acting Academy faculty encourage all students to progress at their own rate within a nurturing and supportive class environment. The director will notify a parent if their child is ready to move to the next level. We appreciate your respect and cooperation in this matter. We love to give students the chance to play roles and ensemble. Getting kids out of their comfort zone with confidence is our speciality!
            <br><br>
            Spotlight Acting Academy is a professional organization and acting education center. Jonathan reserves the right to re-direct placement of any student while attending any class and/or workshops.
        </p>
        <hr class="my-4">
        <h2><strong>Parents</strong></h2>
        <p>
            We hope that by enrolling your child at Spotlight Acting academy you intend to take an active part in helping your actor by taking a genuine, enthusiastic interest in not only your child’s progression but also in the art of theatre itself. You must also trust that we will make decisions in your child’s best interests. His/her welfare is first and foremost. We hope to make a memorable and meaningful experience. You will at times possibly need to help your actor memorize lines for their scenes and shows.
        </p>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <h2><strong>JUNIOR THEATRE FESTIVAL - ATLANTA 2024</strong></h2>
            <p>
                Dance Unlimited and Spotlight are excited to be attending <strong>Junior Theatre Festival Atlanta - January 12-15, 2024!</strong>
            </p>
            {{--        <div>--}}
            {{--            <x-button link="/images/junior-theatre-festival.pdf" text="Details"/>--}}
            {{--        </div>--}}
            <div class="btn btn-outline-light shadow px-5" style="border-radius: 20px; border: 3px solid #020303;">
                <a href="/images-snow/junior-theatre-festival-24.pdf" target="_blank" class="text-decoration-none text-dark fw-bold">Details</a>
            </div>


            <hr class="my-4">
            <h2><strong>VOICE & PIANO LESSONS</strong></h2>
            <p>
                Interested in studying voice or piano through private lessons? Our instructors have a passion for teaching and are available for lessons for students ages 5-18. Fill out the interest form labeled "MESSAGE" below for information! Please indicate the student’s name, age, and desired area of study (voice/piano).
            </p>
        </div>
    </div>

@endsection
