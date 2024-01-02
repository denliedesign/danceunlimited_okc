@extends('layouts.app-snow')
@section('content')

<div class="container px-4">
    <div class="d-flex justify-content-center pb-4">
{{--        <img src="/images-snow/header-dupac-crop.jpg" alt="" class="img-fluid rounded" style="filter: grayscale(100%);">--}}
        <img src="/images/main-pic.jpg" alt="" class="img-fluid rounded" style="">
    </div>

    <div class="pb-5">
        <h1>
            <strong>Dance Unlimited<br>Performing Arts Center</strong>
        </h1>
        <p>
            <em>OKC/Edmond Premier Dance & Acting Studio With A Variety Of Classes For All Students</em>
            <br><br>
            At Dance Unlimited, we are a premier performing arts studio in Oklahoma City and Edmond that offers a variety of dance and acting classes for all students. In our dance classes, we cover a wide range of styles from ballet and jazz to hip hop and tap, and our experienced and talented instructors will guide you through each class to help you develop your skills and technique in a fun and supportive environment.
        </p>
{{--        <x-button link="/fall-schedule" text="Classes Offered"/>--}}
        <div class="btn btn-light shadow px-5" style="border-radius: 20px;">
            <a href="/fall-schedule" class="text-decoration-none text-dark fw-bold">Classes Offered</a>
        </div>

        <div class="row pt-5">
            <div class="col-sm">
                <img src="/images/level-creative-combo.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Creative Combo</strong></h4>
                <p>Ballet & Tap class for 3-4 year olds.</p>
            </div>
            <div class="col-sm">
                <img src="/images/level-children.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Children Level</strong></h4>
                <p>Ballet/Tap and Jazz/Hip Hop classes for 5-7 year olds.</p>
            </div>
            <div class="col-sm">
                <img src="/images-snow/junior-dancers.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Junior Level</strong></h4>
                <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 8-12.</p>
            </div>
            <div class="col-sm">
                <img src="/images-snow/teen-dancers.JPG" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Teen Level</strong></h4>
                <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 13-18.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container px-4">
        <div class="d-flex justify-content-center pb-4">
            <img src="/images/main-pic-spotlight.jpg" alt="" class="img-fluid rounded" style="">
        </div>

        <div class="pb-5">
            <img src="/images-snow/logo-new-spotlight.png" alt="spotlight acting logo" class="img-fluid">
            <h1>
                <strong>spotlight acting academy</strong>
            </h1>
            <p>
                Spotlight Acting Academy provides quality training to students with a range of theatre experience. Production classes offer opportunities for students to explore their interest and passion in not only acting, but musical theatre & performance.
            </p>
{{--            <x-button-outline link="/spotlight-show" text="Audition Info"/>--}}
            <div class="btn btn-outline-light shadow px-5" style="border-radius: 20px; border: 3px solid #020303;">
                <a href="/spotlight-schedule" class="text-decoration-none text-dark fw-bold">Classes Offered</a>
            </div>

            <div class="row pt-5">
                <div class="col-sm">
                    <img src="/images/act-razzle-dazzle.jpg" class="img-fluid rounded" style="height: 225px; width: 100%; object-fit: cover; object-position: top;"  alt="">
                    <h4 class="my-1"><strong>Razzle Dazzle 5&^</strong></h4>
                    <p>                        This class is a Beginner Level class for ages 5 and up that requires no previous experience and is an introduction into the musical theatre world. All are welcome!
                    </p>
                </div>
                <div class="col-sm">
                    <img src="/images/act-totally-drama.jpg" class="img-fluid rounded" style="height: 225px; width: 100%; object-fit: cover; object-position: center;"  alt="">
                    <h4 class="my-1"><strong>Totally Drama 7&^</strong></h4>
                    <p>
                        This class is a class for ages 7 and up.

                    </p>
                </div>
                <div class="col-sm">
                    <img src="/images/act-take-stage.jpg" class="img-fluid rounded" style="height: 225px; width: 100%; object-fit: cover; object-position: center;"  alt="">
                    <h4 class="my-1"><strong>Take Stage 10&^</strong></h4>
                    <p>
                        This class is an Advanced Level Class for ages 10 and up that does require previous experience.
                    </p>
                </div>
                <div class="col-sm">
                    <img src="/images/act-broadway-bound.jpg" class="img-fluid rounded" style="height: 225px; width: 100%; object-fit: cover; object-position: center;"  alt="">
                    <h4 class="my-1"><strong>Broadway Bound 12&^</strong></h4>
                    <p>                        This class is a class for ages 12 and up that requires some previous experience but is still an introduction into the musical theatre world. All are welcome!
                    </p>
                </div>

                <div class="col-sm">
                    <img src="/images/act-curtain-call.jpg" class="img-fluid rounded" style="height: 225px; width: 100%; object-fit: cover; object-position: top;"  alt="">
                    <h4 class="my-1"><strong>Curtain Call 14&^</strong></h4>
                    <p>
                        This class is a production class for ages 14+ that requires permission to enroll.

                    </p>
                </div>

            </div>
        </div>
    </div>
</div>


{{--<div class="bg-white py-5">--}}
{{--    <div class="container px-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-4">--}}
{{--                <img src="/images-snow/home-spotlight.jpg" alt="" class="img-fluid rounded mb-4 mb-md-0">--}}
{{--            </div>--}}
{{--            <div class="col-sm-8">--}}
{{--                <div class="d-flex align-items-center" style="height: 100%;">--}}
{{--                    <div>--}}
{{--                        <h3><strong>spotlight acting academy</strong></h3>--}}
{{--                        <p>--}}
{{--                            Spotlight Acting Academy provides quality training to students with a range of theatre experience. Production classes offer opportunities for students to explore their interest and passion in not only acting, but musical theatre & performance.--}}
{{--                        </p>--}}
{{--                        <x-button-outline link="/" text="Audition Info"/>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

@endsection
