@extends('layouts.app')

@section('title', 'Fall & Spring 2021-2022 | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5 mb-0">Fall & Spring 2021-2022</p>
        @can('update', \App\Fstyle::class)
            <p class="text-center"><a href="/fstyles/create">New Fall Item</a></p>
        @endcan
{{--        <p class="text-center text-muted mt-0"><small>All classes must have a minimum of 6 enrolled to make</small></p>--}}

        <h2 class="txt-black-title text-center">SPRING 2022 POP UPS: Now enrolling</h2>
        <div class="row">
            <div class="col-sm">
                <p>
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">2 Day Pom Workshop</span>
                    <br><strong>Ages:</strong> 12 and older
                    <br><strong>Skills:</strong> Across the floor, kick technique, sideline, dance combo
                    <br><strong>Date:</strong> January 22 nd &amp; 23 rd AND /OR March 26 nd &amp; 27 rd
                    <br><strong>Cost:</strong> $75 for one day or $100 for two days ($175 for both Jan&amp; Mar workshops)
                    <br><strong>Time:</strong> Saturday 10am-1pm and Sunday 2-5pm
                    <br>
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Pirouette Workshop</span>
                    <br>Great workshop for those getting ready for POM tryouts, Vibe Auditions, or perfecting skills for class!
                    <br><strong>Date:</strong> February 12th
                    <br><strong>Time:</strong> 12:30-1:30pm
                    <br><strong>Age:</strong> 12+
                    <br><strong>Cost:</strong> $15
                    <br>And /or
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 1:30-2:30pm
                    <br>
{{--                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Broadway Babies! Song and Dance</span>--}}
{{--                    <br>Does your child sing and dance at home and love to entertain you?? This pop up is perfect for them!--}}
{{--                    <br>This is an hour-long class designed specifically for 3–6-year-olds that will have them singing, dancing &amp; engaged from start to finish.--}}
{{--                    <br><strong>Date:</strong> Jan 22 nd and Feb 5th--}}
{{--                    <br><strong>Time:</strong> 11am-12pm--}}
{{--                    <br><strong>Ages:</strong> 3-6--}}
{{--                    <br><strong>Cost:</strong> $15 for one class, $20 for both--}}
{{--                    <br>--}}
{{--                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">The Royal Ball</span>--}}
{{--                    <br>Grab your favorite princess/prince outfit &amp; your best friends and join us for the best Royal Ball Ballet Style Dance Camp!--}}
{{--                    <br>Camp will be full of the most fun princess/prince games, royal dancing, fairytale story time &amp; so much more!--}}
{{--                    <br><strong>Date:</strong> February 12th--}}
{{--                    <br><strong>Time:</strong> 10am-12pm--}}
{{--                    <br><strong>Ages:</strong> 3-6--}}
{{--                    <br><strong>Cost:</strong> $20--}}
{{--                    <br>--}}
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Dancing with your Dolls!</span>
                    <br>American Girl, Barbie Doll, LOL Doll, Cabbage Patch, or whatever your FAVORITE doll is! Join us for a fun day of dancing, games, singing, &amp; making fun new crafts for your doll!
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 10am-12pm
                    <br><strong>Ages:</strong> 3-6
                    <br><strong>Cost:</strong> $20
                    <br>
{{--                    <br>--}}
{{--                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">ZOMBIE Music Theatre Dance Camp!!!</span>--}}
{{--                    <br>Let’s Sing and Dance, Let’s make some awesome memories!--}}
{{--                    <br><strong>Date:</strong> Jan 22nd--}}
{{--                    <br><strong>Time:</strong> 12:30-2:30--}}
{{--                    <br><strong>Age:</strong> 7-11--}}
{{--                    <br><strong>Cost:</strong> $20--}}
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Leaps/Jumps Workshop</span>
                    <br>A workshop with all the technique prep for jazz leaps and jumps! Great workshop for those getting ready for POM tryouts, Vibe Auditions or perfecting skills for class!
                    <br><strong>Date:</strong> February 12th
                    <br><strong>Time:</strong> 1:30-2:30pm
                    <br><strong>Age:</strong> 12+
                    <br><strong>Cost:</strong> $15
                    <br>And/or
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 2:30-3:30pm
                </p>
            </div>
            <div class="col-sm">
                <p>
{{--                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">ANNIE Music Theatre Dance Camp!!!</span>--}}
{{--                    <br>Let’s Sing and Dance, Let’s make some awesome memories!--}}
{{--                    <br><strong>Date:</strong> Feb 5th--}}
{{--                    <br><strong>Time:</strong> 12:30-2:30--}}
{{--                    <br><strong>Age:</strong> 7-11--}}
{{--                    <br><strong>Cost:</strong> $20--}}
{{--                    <br>--}}
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Walkovers/Handstands/Cartwheels, OH My!</span>
                    <br>A Beginning Acro workshop with all the technique prep for Acro skills and sequences!
                    <br><strong>Date:</strong> February 12th
                    <br><strong>Time:</strong> 11:30am-12:30pm
                    <br><strong>Age:</strong> 7 and older
                    <br><strong>Cost:</strong> $15
                    <br>And /or
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 11:30am-12:30pm
                    <br>
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Mini Mover Acro Workshop</span>
                    <br>Warmup/tech prep for cartwheels, handstands, front/back walkovers
                    <br><strong>Date:</strong> February 12th
                    <br><strong>Time:</strong> 12:30-1:30
                    <br><strong>Ages:</strong> 5-7
                    <br><strong>Cost:</strong> $15
                    <br>And/or
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 12:30-1:30
                    <br>
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">Leaps and Turns!!!</span>
                    <br>It’s time to put in some extra work on those leaps and turns!! Great workshop for all levels those getting ready for Vibe Auditions or perfecting skills for class!
                    <br><strong>Date:</strong> February 12th
                    <br><strong>Time:</strong> 10:30-11:30
                    <br><strong>Ages:</strong> 6-10
                    <br><strong>Cost:</strong> $15
                    <br>And /or
                    <br><strong>Date:</strong> March 26th
                    <br><strong>Time:</strong> 1:30-2:30
                    <br>
                    <br><span style="color: #a52b2a; font-size: 1.33em; text-shadow: dimgray 1px 1px 2px;" class="font-weight-bold">VIBE COMPETITIVE DANCE COMPANY PARENT MEETING</span>
                    <br><strong>Date:</strong> April 19th
                    <br><strong>Time:</strong> 6:00pm
                    <br><strong>Ages:</strong> Our competitive company is for dancers 6 years old and up
                    <br>*This meeting is for any NEW dancer/parent interested in dance competition for 22/23 Season. Come and get all the details regarding
                    <br>cost, time commitment and benefits!
                </p>
            </div>
        </div>

        <img src="/images/class-breakdown.jpg" alt="class breakdown" class="img-fluid">


        <h1 class="txt-black-title pt-5">Fall & Spring Schedule</h1>
        <div class="card-columns" style="font-size: 0.9em;">
            @include('fstyles')
        </div>
    </div>

@endsection
