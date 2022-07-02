@extends('layouts.app')

@section('title', 'FAQ | Dance Unlimited')

@section('content')

    <div class="container pb-5" id="faq">
        <p class="txt-title text-center py-5">FAQ</p>
        <div class="accordion" id="accordionFAQ">
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesZero">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#closeZero" aria-expanded="true" aria-controls="closeZero">
                            <h1 class="txt-black-title text-left text-dark">WELCOME PACKETS</h1>
                        </button>
                    </h2>
                </div>

                <div id="closeZero" class="collapse" aria-labelledby="policiesZero" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm">
                                <a href="/images/du-welcome-22.pdf" target="_blank" style="text-decoration: none;">
                                    <img src="/images/du-welcome-22.jpg" alt="du welcome pack" class="img-fluid">
                                    <div class="d-flex justify-content-center mt-2">
                                        <p class="btn btn-danger">Jr/Teen Welcome Pack</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm">
                                <a href="/images/starlette-welcome-22.pdf" target="_blank" style="text-decoration: none;">
                                    <img src="/images/starlette-welcome-22.jpg" alt="starlette welcome pack" class="img-fluid">
                                    <div class="d-flex justify-content-center mt-2">
                                        <p class="btn btn-danger">Starlette Welcome Pack</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm">
                                <a href="/images/spotlight-acting-welcome-22.pdf" target="_blank" style="text-decoration: none;">
                                    <img src="/images/spotlight-acting-welcome-22.jpg" alt="spotlight acting welcome pack" class="img-fluid">
                                    <div class="d-flex justify-content-center mt-2">
                                        <p class="btn btn-danger">Spotlight Acting Welcome Pack</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#closeOne" aria-expanded="true" aria-controls="closeOne">
                            <h1 class="txt-black-title text-left text-dark">WHY DANCE AT DANCE UNLIMITED?</h1>
                        </button>
                    </h2>
                </div>

                <div id="closeOne" class="collapse" aria-labelledby="policiesOne" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <p>
                            Children and parents choose Dance Unlimited for various reasons. Some enjoy dance simply for the fun of it. It is exhilarating and very rewarding! Still, others see it as an avenue to build self-esteem and poise, as a means of expression of imagination and creativity, or as a route towards socialization and friendships. Whatever your reason, you’ll find it at Dance Unlimited. Dancing is one of the best methods for developing the mind and body, even at the young age of two.
                            <br><br>
                            It challenges and therefore, improves all six components of physical fitness: muscular strength, muscular endurance, flexibility, cardiovascular endurance, body composition, and neuromuscular coordination. Dance also adds to one’s grace, self-confidence, sense of rhythm, appreciation of music, and overall conditioning. From an emotional, psychological, and social aspect, dance is very rewarding.
                            <br><br>
                            Even young dancers may find a healthy release of tension while exploring a sense of creativity and artistic empowerment.
                            <br><br>
                            In a classroom situation, students appreciate the value of working hard and maintaining self-discipline while learning the importance of respect and loyalty. In addition to exercising their body, dancers also challenge their intellect on both a kinesthetic and creative level. All dancers, whether young or old, will learn to dance in an ensemble and work as a team.
                            <br><br>
                            Whatever your goals, we hope to help you in your progress toward achieving them. Dance your way to a healthy body and a happy life!
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeTwo" aria-expanded="false" aria-controls="closeTwo">
                            <h1 class="txt-black-title text-left text-dark">WHY SPOTLIGHT ACTING ACADEMY?</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeTwo" class="collapse" aria-labelledby="policiesTwo" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <ul>
                            <li>Strive to build Confidence, self-esteem, creative thinking, and public speaking skills.</li>
                            <li>Provides an outlet for self-expression and encourages kids to celebrate their differences in a positive, supportive environment.</li>
                            <li>Faculty empowers each student to reach his or her full potential.</li>
                            <li>Find creative voice.</li>
                            <li>Faculty will strive to teach the children and young adults’ professional theater etiquette and expect them to display that professionalism in any theater setting they encounter.</li>
                            <li>Developing productions that highlight students’ performance capabilities</li>
                        </ul>
                        <p>
                            Our spotlight students do it all! Many of our students take dance and vocal lessons as well as participating in our awesome productions. Our students work hard to be well rounded in all areas of performance!
                            <br><br>
                            Spotlight acting academy is an encouraging and positive environment where students feel like they can make choices and take risks! The director of Spotlight, Jonathan Beck Reed, has over 40 years of experience on stage and in the class room.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeThree" aria-expanded="false" aria-controls="closeThree">
                            <h1 class="txt-black-title text-left text-dark">ABOUT OUR FACILITY</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeThree" class="collapse" aria-labelledby="policiesThree" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <img src="images/faq-facility.png" alt="" style="width: 100%;">
                        <p>
                            Our facility consists of four dance studios and one acting/dance studio and a voice studio. We have a professional faculty and floating wood floors for long-term body/joint protection.
                            <br><br>
                            <strong>Viewing Windows and TV lobby monitor</strong><br>
                            In order to foster each dancer’s progress, please observe students through windows or lobby TV. Students, especially those new to dance, improve at a more accelerated pace without the scrutiny and pressure of parents, peers, and other observers peering throughout the window.  The dancers can see you thru the windows.
                            <br><br>
                            <strong>Lost & Found</strong><br>
                            Look in cubbies for left items. Those items, including dance shoes, not picked up will be donated to a local charity.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeFour" aria-expanded="false" aria-controls="closeFour">
                            <h1 class="txt-black-title text-left text-dark">STUDIO HOURS</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeFour" class="collapse" aria-labelledby="policiesFour" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <p>
                            Our office hours are Monday through Thursday 3:30pm to 9:30pm. Phone messages are not checked Thursday after 9:00pm, and until Monday at 4:00pm.
                            <br><br>
                            The Studio Opens at 3:30pm. Please do not drop your dancer off any earlier than 3:30pm.
                            <br><br>
                            Please make sure your children are picked up promptly after class. Younger students get very nervous when parents are not prompt picking them up. Students should not have to wait more than 5 minutes. Please remind your children not to go outside unless you are there!
                            <br><br>
                            <strong>Weather</strong><br>
                            When weather conditions result in local school closings please call the studio after 2pm, check our Facebook page, and check our website. If we close due to weather, classes will not be made up on a separate day, however we do want you to attend another class of the same level for a make up.  If any school cancels, that does NOT mean we will, so please check with us! Also, weather can worsen during the day and we may have to cancel when school does not. 90% of our faculty do NOT live in Edmond and may or may not be able to get to the studio when we have weather situations.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeFive" aria-expanded="false" aria-controls="closeFive">
                            <h1 class="txt-black-title text-left text-dark">HOW TO STAY UP TO DATE</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeFive" class="collapse" aria-labelledby="policiesFive" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <p>
                            All families should have current email address on their account in order to receive “need to know” important information from Dance Unlimited and Spotlight Acting.
                            <br><br>
                            Updates are also sent out via the Remind app with important class and rehearsal information. Please contact the front desk if you are in need of your specific Remind code.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeSix" aria-expanded="false" aria-controls="closeSix">
                            <h1 class="txt-black-title text-left text-dark">TRAINING WITH PROFESSIONALS</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeSix" class="collapse" aria-labelledby="policiesSix" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <p>
                            Dance Unlimited faculty is not only your child’s teacher but they are also STILL working professionals.  There will be times throughout the year that our faculty will have to miss due to rehearsals and performances.  There will be an appropriate sub provide for classes during those times.
                        </p>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeSeven" aria-expanded="false" aria-controls="closeSeven">
                            <h1 class="txt-black-title text-left text-dark">STUDENT PROGRESSION</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeSeven" class="collapse" aria-labelledby="policiesSeven" data-parent="#accordionFAQ">
                    <div class="card-body">
                        <img src="images/faq-img.jpg" alt="" style="width: 100%;">
                        <p>
                            Dance Unlimited Faculty encourages all students to progress at their own rate within a nurturing and supportive class environment. The director will notify a parent if their child is ready to move to the next level.
                            <br><br>
                            <strong>Leveling Your Dancer</strong><br>
                            Dancing levels are not like school grades. Most dancers repeat their same level more than once.  There are certain skills one must master in order to progress to next level.
                            <br><br>
                            <strong>Qualifications that the DU Faculty may consider when leveling dancers from year to year in no particular order:</strong><br>
                            Emotional, social and physical needs, and developments are foremost in our consideration of class placements.
                            <br><br>We are considering:
                        </p>
                        <ul>
                            <li>Age</li>
                            <li>Experience</li>
                            <li>Number of Years Dancing</li>
                            <li>Dance History</li>
                            <li>Injury</li>
                            <li>Progress</li>
                            <li>Attitude & Work Ethic in Class</li>
                            <li>Capability to retain given combinations and preserve and apply corrections given to them in class</li>
                            <li>Ability to recall terminology</li>
                            <li>Flexibility</li>
                            <li>Strength in Posture and in their personal facility (back, abdominals, ankles, knees, pelvis, feet, arms)</li>
                            <li>The ability to hear rhythms and count music</li>
                            <li>Stamina</li>
                            <li>Spotting Potential</li>
                            <li>Ability to recognize details</li>
                            <li>Focus during class time</li>
                            <li>Responsiveness to dress code</li>
                            <li>Understanding of weight shifting</li>
                            <li>Feet articulation</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 100%;">
                <div class="card-header" id="policiesEight">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#closeEight" aria-expanded="false" aria-controls="closeEight">
                            <h1 class="txt-black-title text-left text-dark">CALENDAR</h1>
                        </button>
                    </h2>
                </div>
                <div id="closeEight" class="collapse" aria-labelledby="policiesEight" data-parent="#accordionFAQ">
                    <div class="card-body">

                        <div id="calendar" class="pb-5">
                            <div class="container">
                                <h1 class="txt-black-title text-center">Calendar</h1>
                                @can('update', \App\Calendar::class) <p class="text-center"><a href="/calendars/create">New Calendar Item</a></p> @endcan
                                <div id="calendar">
                                    {{--                        <div class="horizontal-controls d-flex justify-content-center my-2">--}}
                                    {{--                            <button id="slide-left-calendar" class="mr-5"><i class="arrow click-left d-flex align-self-center"></i></button>--}}
                                    {{--                            <button id="slide-right-calendar"><i class="arrow click-right d-flex align-self-center"></i></button>--}}
                                    {{--                        </div>--}}
                                    {{--                        <div class="scrolling-wrapper-calendar pb-2" id="scrolling-wrapper-calendar">--}}
                                    {{--                        @include('calendars')--}}
                                    @include('seasons')

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>



{{--        <div>--}}
{{--            <h1 class="txt-black-title text-center">Why Dance at Dance Unlimited?</h1>--}}

{{--        </div>--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">Why Spotlight Acting Academy?</h1>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <img src="images/faq-facility.png" alt="" style="width: 100%;">--}}
{{--    <div class="container pb-5">--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">About Our Facility</h1>--}}

{{--        </div>--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">Studio Hours</h1>--}}

{{--        </div>--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">How To Stay Up To Date</h1>--}}

{{--        </div>--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">Training With Professionals</h1>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <img src="images/faq-img.jpg" alt="" style="width: 100%;">--}}
{{--    <div class="container pb-5">--}}
{{--        <div class="pt-5">--}}
{{--            <h1 class="txt-black-title text-center">Student Progression</h1>--}}

{{--        </div>--}}
{{--    </div>--}}

@endsection
