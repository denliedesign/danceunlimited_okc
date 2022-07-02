@extends('layouts.app')

@section('title', 'Dance Production Info | Dance Unlimited')

@section('content')

    <div class="container pb-5">
        <p class="txt-title text-center pt-5">Productions</p>
        <p class="text-center">
            Dance Unlimited will be presenting 2 productions for the 2022-23 season: A Winter Production in December and an amazing year-end production in May.
            <br><br>
            There will be multiple shows presented. Students who do not wish to participate in the productions must let the front desk know BEFORE the required deadlines. Each class will have to be uniform in their tights, shoes and hair for production; this may involve buying new tights and painting shoes! All dress rehearsals for the production are mandatory and you will not be allowed to participate in the production if you do not attend dress rehearsal.
            <br><br>
            DU does charge for admission to the productions. Ticket costs are decided by the facility rented and can be purchased through their box offices. Production t-shirts and video recordings are included in the “Recital Bundle” for each family! All fees are subject to change based on the prices determined by the theatre rental and vendors.
            <br><br>
            We offer the chance for you to advertise your business our programs, which reach over 1,000 audience members each year. Personal ads for your dancer are also welcome.
        </p>

{{--        <h1 class="txt-black-title pt-2 text-center">Our 23rd Annual Recital "Trolls World Tour"</h1>--}}
{{--        <div class="d-flex justify-content-center"><a href="/images/recital-trolls.pdf" target="_blank"><button type="button" class="btn btn-danger text-uppercase">Recital PDF & Parent Form</button></a></div>--}}
{{--        <div class="py-3">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-1.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>--}}
{{--                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-2.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>--}}
{{--                <div class="col-sm"><a href="/images/recital-trolls.pdf"><img src="/images/recital-trolls-3.jpg" alt="trolls recital" class="img-fluid shadow rounded"></a></div>--}}
{{--            </div>--}}
{{--        </div>--}}

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
        <h1 class="txt-black-title pt-5">Production Information</h1>
        <div class="row dress-box py-3">
            <p class="px-4">
                <strong>Performance Expenses:</strong> Costume prices range from $65-$95 per costume (Per Class/Per Performance). Tights are ordered for Starlette and Junior dancers, and they are approximately $12-$15. There is also one Nanny Fee of $10/per Starlette and Junior dancer.
            </p>
            <ul>
                <strong>Recital Bundle:</strong> Each dancer is also charged a recital bundle of $180, which includes:
                <li>Two production fees (winter show & end-of-year show)</li>
                <li>One end-of-year t-shirt</li>
                <li>Digital links to all performances</li>
                <li>End-of-year digital link to pictures from dress rehearsal.</li>
            </ul>
            <p class="px-4">
                Those that have performances in both the year-end show and the year-end Aftershow will be charged an additional $30.
                <br><br>
                <strong>All expenses will be divided into four payments:</strong>
                <br>First Payment Due Date: Sept 15th, 2022
                <br>Second Payment Due Date: Oct 15th. 2022
                <br>Third Payment Due Date: Nov 15th, 2022
                <br>Fourth Payment Due Date: Dec 15th, 2022
                <br><br>
                Once you have paid for your costume and production fee it is NON-REFUNDABLE and NON-TRANSFERABLE, even if you paid before the deadline. So be 100% SURE that your child wants to be in the recital!
            </p>
        </div>
{{--        <h1 class="txt-black-title pt-5">Recital Costumes</h1>--}}
{{--        <div class="row dress-box py-3">--}}
{{--            <p class="px-4">--}}
{{--                Costume prices range from $65-$95 per costume, plus you will have a production fee of $40.00 per show. This fee helps cover rental fees of auditorium, backdrops, dressing rooms, lighting tech, sound tech, janitor fee, supervisor fee (all required by our venue), etc.--}}
{{--                <br><br>--}}
{{--                Once you have paid for your costume and production fee it is NON-REFUNDABLE and NON-TRANSFERABLE even if you paid before the deadline. So be 100% SURE that your child wants to be in the recital!--}}
{{--                <br><br>--}}
{{--                If you enroll after December 1st, of the current year: Dancers that enroll or decide to participate in production, there will be a second order placed for costumes mid to late January. Please note the fee will be higher and costumes are not guaranteed for picture day. There will be no costumes ordered after the second deadline.--}}
{{--            </p>--}}
{{--        </div>--}}
        <h1 class="txt-black-title pt-5">Recital Pictures</h1>
        <div class="row dress-box py-3">
            <p class="px-4">
                Every year we have a special Picture Day where dancers can have their portraits taken professionally at the studio with Spotlight Dance Photography. Always amazing photos! Dancers are not required to purchase photos, but they are a wonderful keepsake for dancers and families for years to come.
                {{--                <br><br>--}}
{{--                <a href="images/picture-schedule.pdf" target="_blank"><button type="button" class="btn btn-danger text-uppercase">Picture Schedule</button></a>--}}
            </p>
        </div>
    </div>

@endsection
