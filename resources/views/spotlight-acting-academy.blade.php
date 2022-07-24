@extends('layouts.app')

@section('title', 'Spotlight Acting Academy | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 pb-2">Spotlight Acting Academy</p>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 pb-3">
            <div class="p-2"><img src="/images/spotlight-mary-poppins.jpg" alt="spotlight mary poppins" style="height: 335px; width: auto; object-fit: cover; object-position: 0 0;" class="img-fluid shadow rounded"></div>
            <div class="p-2"><img src="/images/spotlight-heathers.png" alt="spotlight heathers" style="height: 335px; width: auto; object-fit: cover; object-position: 50% 0;" class="img-fluid shadow rounded"></div>
            <div class="p-2"><img src="/images/spotlight-spongebob.jpg" alt="spotlight spongebob" style="height: 335px; width: auto; object-fit: cover; object-position: 0 0;" class="img-fluid shadow rounded"></div>
            <div class="p-2"><img src="/images/spotlight-wizard-of-oz.png" alt="spotlight wizard of oz" style="height: 335px; width: auto; object-fit: cover; object-position: 0 0;" class="img-fluid shadow rounded"></div>
        </div>
        <p>
            At Spotlight Acting Academy, the doors are always open for students with a range of theatre experience. We offer the opportunity for students to explore their interest and passion in not only acting, but musical theatre and performance. Our classes focus on educating students on audition techniques, theatre etiquette, and the foundations of voice, dancing, and acting performance. Our students are able to put all of their hard work and showcase their progress at the end of each semester in our musical production. Our productions have ranged from Elf Jr to Madagascar Jr and everything in between. We pride ourselves in presenting the best production quality for our students from costuming, props, set design, lighting, and sound to allow for the best experience possible that allows our students to shine on stage.
            Our production classes not only deepen a student’s interest in musical theatre but are also a great way for a student to try something new that helps them to break out of their shell and flourish creatively.
        </p>
        <p>
            All classes perform two productions each year - one in the fall and one in the spring. Productions are composed of songs, dances, and lines that must be memorized by the show.
        </p>

        <div class="pt-5 pb-2 card-group">
            <div class="card">
                <img src="images/spot-razzle-dazzle.jpg" class="card-img-top" style="height: 255px; width: 100%; object-fit: cover; object-position: center;" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Razzle Dazzle</h5>
                    <p class="card-text">
                        This class is a Beginner Level class for ages 4 and up that requires no previous experience and is an introduction into the musical theatre world. All are welcome!
                        <br><br>
                        Razzle Dazzle is a music theatre production class that focuses on acting, singing, and dancing and introducing students to the musical theatre world in a FUN, high energy setting!
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                </div>
            </div>
            <div class="card">
                <img src="images/spot-broadway-bound.jpg" class="card-img-top" style="height: 255px; width: 100%; object-fit: cover; object-position: 37% 50%;" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Broadway Bound</h5>
                    <p class="card-text">
                        This class is a Beginner/Intermediate Level class for ages 8 and up that requires some previous experience but is still an introduction into the musical theatre world. All are welcome!
                        <br><br>
                        Broadway Bound is a music theatre production class that focuses on acting, singing, and dancing.
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                </div>
            </div>
            <div class="card">
                <img src="images/spot-totally-drama.jpg" class="card-img-top" style="height: 255px; width: 100%; object-fit: cover; object-position: center;" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Totally Drama</h5>
                    <p class="card-text">
                        This class is a class for ages 10 and up years old.
                        <br><br>
                        Totally Drama is a music theatre production class that focuses on acting, singing, and dancing.
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                </div>
            </div>
            <div class="card">
                <img src="images/spot-curtain-call.jpg" class="card-img-top" style="height: 255px; width: 100%; object-fit: cover; object-position: center;" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Curtain Call</h5>
                    <p class="card-text">
                        This class is a production class for ages 13+ that requires permission to enroll.
                        <br><br>
                        Curtain Call is a music theatre production class that focuses on acting, singing, and dancing.
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                </div>
            </div>
            <div class="card">
                <img src="images/spot-take-stage.jpg" class="card-img-top" style="height: 255px; width: 100%; object-fit: cover; object-position: center;" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center font-weight-bold">Take Stage</h5>
                    <p class="card-text">
                        This class is an Advanced Level Class for ages 14 and up that does require previous experience.
                        <br><br>
                        Take Stage is a music theatre production class that focuses on acting, singing, and dancing.
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                </div>
            </div>
        </div>

        <h1 class="txt-black-title pt-5">Class Schedule</h1>
        <div class="dress-box py-3" id="spotlight-schedule">
            <p class="px-4">
                <small class="text-muted">
                    Spotlight reserves the right to cancel a class if less than six students are enrolled. In this case, an appropriate class will be suggested or the student will receive a refund.
                </small>
            </p>
            <div class="table-responsive px-4">
                <table class="table">
                    <thead>
                    <tr>
{{--                        <th>Music for Minis</th>--}}
{{--                        <th>Broadway Babies</th>--}}
                        <th>Razzle Dazzle</th>
                        <th>Broadway Bound</th>
                        <th>Totally Drama</th>
                        <th>Curtain Call</th>
                        <th>Take Stage (Int/Adv)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
{{--                        <td>Ages 3-4</td>--}}
{{--                        <td>Ages 4-6</td>--}}
                        <td>Ages 4 ^</td>
                        <td>Ages 8 ^</td>
                        <td>Ages 10 ^</td>
                        <td>Ages 13 ^</td>
                        <td>Ages 14 ^</td>
                    </tr>
                    <tr>
{{--                        <td>Tuesday</td>--}}
{{--                        <td>Monday</td>--}}
                        <td>Monday</td>
                        <td>Monday</td>
                        <td>Monday</td>
                        <td>Thursday</td>
                        <td>Tuesday</td>
                    </tr>
                    <tr>
{{--                        <td>6:00-6:30</td>--}}
{{--                        <td>5:30-6:30</td>--}}
                        <td>5:30-6:30</td>
                        <td>6:30-7:30</td>
                        <td>4:30-5:30</td>
                        <td>4:30-6:30</td>
                        <td>4:30-6:30</td>
                    </tr>
                    <tr>
{{--                        <td>$60/mo</td>--}}
{{--                        <td>$60/mo</td>--}}
                        <td>$75/mo</td>
                        <td>$75/mo</td>
                        <td>$75/mo</td>
                        <td>$140/mo</td>
                        <td>$140/mo</td>
                    </tr>
                    <tr>
{{--                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm">ENROLL</button></a></td>--}}
{{--                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm">ENROLL</button></a></td>--}}
                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm mr-3">ENROLL</button></a></td>
                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm mr-3">ENROLL</button></a></td>
                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm mr-3">ENROLL</button></a></td>
                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm mr-3">ENROLL</button></a></td>
                        <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm mr-3">ENROLL</button></a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-sm mr-3">
                <h1 class="txt-black-title pt-5">Junior Theatre Festival - Atlanta 2023</h1>
                <div class="dress-box py-3">
                    <p class="text-center">
                        Dance Unlimited and Spotlight are excited to be attending <strong>Junior Theatre Festival Atlanta - January 13-15, 2023!</strong>
                    </p>
                    <div class="text-center">
                        <a href="https://drive.google.com/file/d/1RtmV1xqUF1ibD6Rk0_wHqeAdwJJVm4bE/view?usp=sharing" target="_blank"><button class="btn btn-danger">Details</button></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <h1 class="txt-black-title pt-5">Voice & Piano Lessons</h1>
                <div class="dress-box py-3">
                    <p class="text-center">
                        Interested in studying voice or piano through private lessons? Our instructors have a passion for teaching and are available for lessons for students ages 3-18. Fill out the interest form below for information! <em>Please indicate the student’s name, age, and desired area of study (voice/piano).</em>
                    </p>
                    <div class="mx-3">
                        @include('contact.create')
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm mr-3">
                <h1 class="txt-black-title pt-5">Students</h1>
                <div class="row dress-box py-3">
                    <div class="col-sm">
                        <p class="px-4">
                            Spotlight Acting Academy faculty encourage all students to progress at their own rate within a nurturing and supportive class environment. The director will notify a parent if their child is ready to move to the next level. We appreciate your respect and cooperation in this matter. We love to give students the chance to play roles and ensemble. Getting kids out of their comfort zone with confidence is our speciality!
                            <br><br>
                            Spotlight Acting Academy is a professional organization and acting education center. Jonathan reserves the right to re-direct placement of any student while attending any class and/or workshops.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <h1 class="txt-black-title pt-5">Parents</h1>
                <div class="row dress-box py-3">
                    <div class="col-sm">
                        <p class="px-4">
                            We hope that by enrolling your child at Spotlight Acting academy you intend to take an active part in helping your actor by taking a genuine, enthusiastic interest in not only your child’s progression but also in the art of theatre itself. You must also trust that we will make decisions in your child’s best interests. His/her welfare is first and foremost. We hope to make a memorable and meaningful experience. You will at times possibly need to help your actor memorize lines for their scenes and shows.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
