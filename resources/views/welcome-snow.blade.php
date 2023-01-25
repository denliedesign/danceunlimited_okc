@extends('layouts.app-snow')
@section('content')

<div class="container px-4">
    <div class="d-flex justify-content-center pb-4">
        <img src="/images-snow/header-dupac-crop.jpg" alt="" class="img-fluid rounded" style="filter: grayscale(100%);">
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
        <x-button link="/" text="Classes Offered"/>

        <div class="row pt-5">
            <div class="col-sm">
                <img src="/images-snow/age-group-1.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Creative Combo</strong></h4>
                <p>Ballet & Tap class for 3-4 year olds.</p>
            </div>
            <div class="col-sm">
                <img src="/images-snow/age-group-2.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Children Level</strong></h4>
                <p>Ballet/Tap and Jazz/Hip Hop classes for 5-7 year olds.</p>
            </div>
            <div class="col-sm">
                <img src="/images-snow/age-group-3.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Junior Level</strong></h4>
                <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 8-12.</p>
            </div>
            <div class="col-sm">
                <img src="/images-snow/age-group-4.jpg" class="img-fluid rounded" alt="">
                <h4 class="my-1"><strong>Teen Level</strong></h4>
                <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 13-18.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white py-5">
    <div class="container px-4">
        <div class="d-flex justify-content-center pb-4">
            <img src="/images-snow/header-spotlight-crop.jpg" alt="" class="img-fluid rounded" style="filter: grayscale(100%);">
        </div>

        <div class="pb-5">
            <h1>
                <strong>spotlight acting academy</strong>
            </h1>
            <p>
                Spotlight Acting Academy provides quality training to students with a range of theatre experience. Production classes offer opportunities for students to explore their interest and passion in not only acting, but musical theatre & performance.
            </p>
            <x-button-outline link="/" text="Audition Info"/>

            <div class="row pt-5">
                <div class="col-sm">
                    <img src="/images-snow/poster-1.jpg" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                    <h4 class="my-1"><strong>mary poppins</strong></h4>
{{--                    <p>Ballet & Tap class for 3-4 year olds.</p>--}}
                </div>
                <div class="col-sm">
                    <img src="/images-snow/poster-2.png" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                    <h4 class="my-1"><strong>heathers</strong></h4>
{{--                    <p>Ballet/Tap and Jazz/Hip Hop classes for 5-7 year olds.</p>--}}
                </div>
                <div class="col-sm">
                    <img src="/images-snow/poster-3.jpg" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                    <h4 class="my-1"><strong>spongebob</strong></h4>
{{--                    <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 8-12.</p>--}}
                </div>
                <div class="col-sm">
                    <img src="/images-snow/poster-4.png" class="rounded" style="border: 3px solid #020303; height: 350px; width: 100%; object-fit: cover; object-position: top;" alt="">
                    <h4 class="my-1"><strong>wizard of oz</strong></h4>
{{--                    <p>Ballet, Tap, Jazz, & Hip Hop classes for ages 13-18.</p>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-4">

    <div class="area" id="footer">
        <div class="row p-0 m-0">
            <div class="col-sm">
                <div class="row">
                    <div class="col-sm-2">
                        <h4 class="nav-title"><strong>Navigation</strong></h4>
                        <ul class="list-unstyled">
                            @include('_nav-list')
                        </ul>
                    </div>
                    <div class="col-sm-2">
                        <h4 class="nav-title"><strong>Hours</strong></h4>
                        <div class="row">
                            <div class="col-2">
                                <ul class="list-unstyled">
                                    <li>Mon </li>
                                    <li>Tue </li>
                                    <li>Wed </li>
                                    <li>Thr </li>
                                    <li>Fri </li>
                                    <li>Sat </li>
                                    <li>Sun </li>
                                </ul>
                            </div>
                            <div class="col-10">
                                <ul class="list-unstyled">
                                    <li> 10am-9pm</li>
                                    <li> 10am-9pm</li>
                                    <li> 10am-9pm</li>
                                    <li> 10am-9pm</li>
                                    <li> Closed</li>
                                    <li> Closed</li>
                                    <li> Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <h4 class="nav-title"><strong>Contact</strong></h4>
                        <ul class="list-unstyled">
                            <li><ion-icon name="call"></ion-icon> 405-242-4612</li>
                            <li><ion-icon name="mail"></ion-icon> danceunlimitedokc@gmail.com</li>
                            <li><ion-icon name="mail"></ion-icon> spotlightactingokc@gmail.com</li>
                            <li><ion-icon name="location"></ion-icon> 1217 E Hefner Road, OKC, OK 73131</li>
                            <li><ion-icon name="gift"></ion-icon> PO Box 14371 Oklahoma City, OK 73113</li>
                        </ul>
                    </div>
                    <div class="col-sm-5">
                        @include('contact.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="credit" class="py-1 d-flex justify-content-end">
    <a class="txt-snow text-decoration-none mx-4" href="https://denliedesign.com" target="_blank"><small>Dance Website Design by Denlie Design</small></a>
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
