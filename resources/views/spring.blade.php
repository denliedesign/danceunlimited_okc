@extends('layouts.app')

@section('title', 'Dance Production Info | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center py-5">Dance Production Info</p>

        <h1 class="txt-black-title pt-2 text-center">Our 23rd Annual Recital "Trolls World Tour"</h1>
        <div class="d-flex justify-content-center"><a href="/images/recital-trolls.pdf" target="_blank"><button type="button" class="btn btn-danger text-uppercase">Recital PDF & Parent Form</button></a></div>
        <div class="py-3">
            <div class="row">
                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-1.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>
                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-2.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>
                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-3.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>
            </div>
        </div>

{{--        <h1 class="txt-black-title pt-5">Save The Dates for Spring Fun</h1>--}}
{{--        <div class="py-3">--}}
{{--            <div class="row row-cols-2 row-cols-md-4">--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/savethedate1.jpg" target="_blank">--}}
{{--                        <img src="images/spring/savethedate1crop.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/savethedate2.jpg" target="_blank">--}}
{{--                        <img src="images/spring/savethedate2.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/savethedate3.jpg" target="_blank">--}}
{{--                        <img src="images/spring/savethedate3.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/savethedate4.jpg" target="_blank">--}}
{{--                        <img src="images/spring/savethedate4.jpg" alt="" style="width: 100%;">--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <h1 class="txt-black-title pt-5">"Pop-Up" Series</h1>--}}
{{--        <div class="py-3">--}}
{{--            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/popup1.jpg" target="_blank">--}}
{{--                        <img src="images/spring/popup1.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/popup2.jpg" target="_blank">--}}
{{--                        <img src="images/spring/popup2.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/popup3.jpg" target="_blank">--}}
{{--                        <img src="images/spring/popup3.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/popup4.jpg" target="_blank">--}}
{{--                        <img src="images/spring/popup4.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a href="images/spring/popup5.jpg" target="_blank">--}}
{{--                        <img src="images/spring/popup5.jpg" alt="" style="width: 100%;">--}}
{{--                    </a>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger btn-sm spring-btn mb-3">ENROLL NOW</button></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <h1 class="txt-black-title pt-5">Productions</h1>
        <div class="row dress-box py-3">
            <p class="px-4">
                Every year Dance Unlimited presents an amazing year-end production.
                <br><br>
                There will be multiple shows presented. Students who do not wish to participate in the production must let the front desk know BEFORE the required deadline. Each class will have to be uniform on their tights, shoes and hair for production; this will involve buying new tights and painting shoes! All dress rehearsals for the production are mandatory and you will not be allowed to participate in the production if you do not attend dress rehearsal.
                <br><br>
                DU does charge an admission to get into the production.  Tickets cost are decided by the facility rented and are sold online.  You will also be able to order a Production T-shirt and a DVD of the show if you would like.  We offer the chance for you to advertise your business our recital program which reaches over 1,000 audience members each year and you can always submit personal ads for your dancer. If the theatre rental, or any of the vendors for the tickets,  T-shirts or DVDs increases their prices, fees will be subject to change.
                <br><br>
                <a href="/images/recital-trolls.pdf" target="_blank"><button type="button" class="btn btn-danger text-uppercase">Recital Information</button></a>
            </p>
        </div>
        <h1 class="txt-black-title pt-5">Recital Costumes</h1>
        <div class="row dress-box py-3">
            <p class="px-4">
                Costume prices range from $65-$95 per costume, plus you will have a production fee of $40.00 per show. This fee helps cover rental fees of auditorium, backdrops, dressing rooms, lighting tech, sound tech, janitor fee, supervisor fee (all required by our venue), etc.
                <br><br>
                Once you have paid for your costume and production fee it is NON-REFUNDABLE and NON-TRANSFERABLE even if you paid before the deadline. So be 100% SURE that your child wants to be in the recital!
                <br><br>
                If you enroll after December 1st, of the current year: Dancers that enroll or decide to participate in production, there will be a second order placed for costumes mid to late January. Please note the fee will be higher and costumes are not guaranteed for picture day. There will be no costumes ordered after the second deadline.
            </p>
        </div>
        <h1 class="txt-black-title pt-5">Recital Pictures</h1>
        <div class="row dress-box py-3">
            <p class="px-4">
                Picture day! We take professional pictures at the studio. Dancers are not required to purchase the pictures but should be in attendance for the group picture.
{{--                <br><br>--}}
{{--                <a href="images/picture-schedule.pdf" target="_blank"><button type="button" class="btn btn-danger text-uppercase">Picture Schedule</button></a>--}}
            </p>
        </div>
    </div>

@endsection
