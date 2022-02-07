@extends('layouts.app')

@section('title', 'Summer | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Summer</p>
        @can('update', \App\Sstyle::class)
            <p class="text-center"><a href="/sstyles/create">New Summer Item</a></p>
        @endcan

        <section>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
                <div class="text-center p-2">
                    <img src="/images/fairies-princesses-pirates.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Fairies, Princesses &amp; Pirates!</h3>
                    <p class="lead">June 6th – 9th</p>
                    <p>
                        Do you dream of being a fairy or a princess or a PIRATE?
                        Get ready for Story Time, Royal Poses, a journey to Pixie Hollow and Neverland, crafts, and we will look
                        for lost treasure and even prepare a dance for the royal ball! Come to camp and have a magical time. Remember to bring a snack and water.
                        <br><br>
                        <strong>Ages:</strong> 3-6
                        <br>
                        <strong>Time:</strong> 9am-12
                        <br>
                        <strong>Cost:</strong> $150.00
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/wheres-my-spotlight.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Where's MY Spotlight?</h3>
                    <p class="lead">June 6th – 9th</p>
                    <p>
                        Were you born to entertain??
                        Join us for 4 days full of learning Fun Musical Theatre choreography, coaching audition songs, taking
                        headshots, creating resumes, and even learn scenes from iconic Broadway musicals!!
                        You’ll be ready for the stage in NO TIME! Remember to bring a snack and water.
                        <br><br>
                        <strong>Ages:</strong> 7&^
                        <br>
                        <strong>Time:</strong> 1pm-4:00pm (Arrive 12:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/dance-your-magic.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Dance YOUR Magic!</h3>
                    <p class="lead">June 13th – 16th</p>
                    <p>
                        Do you love Encanto, Raya, Moana and more?
                        <br>
                        Join us for a week fun week of dancing, singing, crafts, and ALL THINGS Magical.
                        <br>
                        Remember to bring a snack and water.
                        <br><br>
                        <strong>Ages:</strong> 3-6
                        <br>
                        <strong>Time:</strong> 9am-12pm (Arrive 8:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                        <br><br>
                        <strong>Ages:</strong> 7&^
                        <br>
                        <strong>Time:</strong> 1pm-4:00pm (Arrive 12:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/under-the-big-top.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Under the Big Top</h3>
                    <p class="lead">June 20th – 23rd</p>
                    <p>
                        This is the GREATEST camp! One of our MOST popular
                        <br>
                        It’s a circus in here!
                        <br>
                        Get ready for a fun week of jazz and hip-hop dancing, singing, carnival games, crafts and acrobatics!
                        <br>
                        Remember to bring a snack and water.
                        <br><br>
                        <strong>Ages:</strong> 3-6
                        <br>
                        <strong>Time:</strong> 9am-12pm (Arrive 8:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                        <br><br>
                        <strong>Ages:</strong> 7&^
                        <br>
                        <strong>Time:</strong> 1pm-4:00pm (Arrive 12:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/bringin-the-beat.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Summer Dance Camp – Bringin the Beat!</h3>
                    <p class="lead">July 11th - 14th</p>
                    <p>
                        A fun-filled summer dance camp designed for anyone who loves to dance! Explore different styles of dance from
                        Jazz, Hip Hop, Contemporary, Ballet, Music Theatre, Acro, Tap, Improv and More!!! Remember to Bring Water and Lunch.
                        <br><br>
                        <strong>Ages:</strong> 7-12
                        <br>
                        <strong>Time:</strong> 10am-3pm
                        <br>
                        <strong>Cost:</strong> $300
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/villain.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>Did you say VILLAIN????</h3>
                    <p class="lead">July 18th - 21st</p>
                    <p>
                        Maleficent, Scar, Cruella, Ursula, Jafar, Gaston, Captain Hook or The Evil Queen
                        <br>
                        Do you want to be Wicked for a week?
                        <br>
                        We are jumping into the world of Disney’s most famous villains.
                        <br>
                        Get ready to learn songs and dances by several of these characters, and then WHY the villains never win… Remember to bring a snack and water.
                        <br><br>
                        <strong>Ages:</strong> 7&^
                        <br>
                        <strong>Time:</strong> 1pm-4:00pm (Arrive 12:45)
                        <br>
                        <strong>Cost:</strong> $150.00
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
                <div class="text-center p-2">
                    <img src="/images/one-day-camps.jpg" alt="summer camp graphic" class="img-fluid">
                    <h3>1 Day Camps</h3>
                    <p class="lead">Ages 3-6 / Time: 10am-12pm (Arrive 9:45) / Cost: $25</p>
                    <p>
                        <strong>July 18 &middot; Blueys World</strong> – There is nothing better than using your IMAGINATION! Come join us and let’s sing and dance and play!!!
                        <br><br>
                        <strong>July 19 &middot; Arendelle Adventures</strong> – Go into the unknown on this Frozen adventure. Snow dance, Games, and crafts!
                        <br><br>
                        <strong>July 20 &middot; Pony Tales</strong> – Always be Unique!!! Unicorns, Ponies and Rainbows. Dancing, Games, Crafts and Friendships!
                    </p>
                                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger text-uppercase">ENROLL NOW</button></a>

                </div>
            </div>
        </section>

{{--        <p class="text-center font-weight-bold my-0">June 15th-July 30th</p>--}}
{{--        <p class="text-center font-weight-bold my-0">Summer 2022 Coming Soon</p>--}}
{{--        <p class="text-center font-weight-bold my-0">We Are Now Enrolling For All Things Summer!</p>--}}
{{--        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>--}}
{{--        <h1 class="txt-black-title pt-5">Summer Schedule</h1>--}}
{{--        <div class="card-columns">--}}
{{--            @include('sstyles')--}}
{{--        </div>--}}

{{--        <h1 class="txt-black-title pt-5">Summer Camps</h1>--}}
{{--        <p>--}}
{{--            Thank you for a FUN Summer Camp season!!--}}
{{--        </p>--}}
{{--        <div>--}}
{{--            <div class="row row-cols-2 row-cols-lg-3">--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-1.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-1.png" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-2.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-2.png" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-3.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-3.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-4.jpeg" target="_blank">--}}
{{--                        <img src="images/summer/camp-4.jpeg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-5.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-5.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-6.jpg" target="_blank">--}}
{{--                        <img src="images/summer/camp-6.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-7.png" target="_blank">--}}
{{--                        <img src="images/summer/camp-7.png" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col mt-3">--}}
{{--                    <a href="images/summer/camp-8.PNG" target="_blank">--}}
{{--                        <img src="images/summer/camp-8.PNG" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
