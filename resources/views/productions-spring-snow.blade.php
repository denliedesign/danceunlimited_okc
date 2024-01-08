@extends('layouts.app-snow')
@section('title', 'DU Productions Spring Show | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>DU Productions Spring Show</strong></h1>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">
            <img src="/images/encanto-1.jpg" alt="encanto recital" class="img-fluid">
            <img src="/images/encanto-2.jpg" alt="encanto recital" class="img-fluid">
        </div>
        <p class="text-center">
{{--            Dance Unlimited will present PURE IMAGINATION, May 13, 2023, at Hudiburg Performing Arts Center.--}}
{{--            Check back soon for details on our next amazing year-end production.--}}
        </p>
{{--        <p class="text-center mt-5">--}}
{{--            Dance Unlimited will be presenting 2 productions for the 2022-23 season: The DU Winter Showcase in December and an amazing year-end production in May.--}}
{{--            <br><br>--}}
{{--            There will be multiple shows presented. Students who do not wish to participate in the productions must let the front desk know BEFORE the required deadlines to avoid being charged. Each class will have to be uniform in their tights, shoes, and hair for production; this may involve buying new tights and painting shoes! All dress rehearsals for productions are mandatory and you will not be allowed to participate in the performances if you do not attend required dress rehearsals.--}}
{{--            <br><br>--}}
{{--            DU does charge for admission to the productions. Ticket costs are decided by the facility rented and can be purchased through their box offices. Production t-shirts/souvenirs and video recordings are included in the “Winter Bundle” and “Recital Bundle” for each family! <strong><em>All fees are subject to change based on the prices determined by the theatre rental and vendors.</em></strong>--}}
{{--            <br><br>--}}
{{--            We offer the chance for you to advertise your business in our programs, which reach over 1,000 audience members each year. Personal ads for your dancer are also welcome.--}}
{{--        </p>--}}
    </div>

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm"><a href="/images-snow/recital-pure-imagination-parents.pdf" target="_blank"><img src="/images-snow/recital-pure-imagination-parents-1.jpg" alt="pure imagination recital" class="img-fluid"></a></div>--}}
{{--                <div class="col-sm"><a href="/images-snow/recital-pure-imagination-parents.pdf" target="_blank"><img src="/images-snow/recital-pure-imagination-parents-2.jpg" alt="pure imagination recital" class="img-fluid"></a></div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="bg-white py-5">
        <div class="container">
            <h2 class="text-center"><strong>Recital Pictures</strong></h2>
            <p class="text-center">
                Every year we have a special Recital Picture Day where dancers can have their portraits taken professionally at the studio with Spotlight Dance Photography. Always amazing photos! Dancers are not required to purchase photos, but they are a wonderful keepsake for dancers and families for years to come.
                <br><br>
                <a href="/images/2024-pic-sched.pdf" target="_blank">Encanto/Aftershow Picture Schedule</a>
            </p>
{{--            <div class="d-flex justify-content-center">--}}
{{--                <div class="btn btn-light shadow px-5" style="border-radius: 20px;">--}}
{{--                    <a href="/images-snow/recital-pure-imagination-picture-schedule.pdf" target="_blank" class="text-decoration-none text-dark fw-bold">Picture Schedule</a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container">--}}
{{--            <h2 class="text-center"><strong>Performance Expenses</strong></h2>--}}
{{--            <div>--}}
{{--                <p class="px-4 text-center">--}}
{{--                    All expenses for the year-end recital are divided into two payments:--}}
{{--                    <br><strong>First Payment Due Date:</strong> November 15th, 2022--}}
{{--                    <br><strong>Second Payment Due Date:</strong> December 15th, 2022--}}
{{--                </p>--}}
{{--                <p class="px-4">--}}
{{--                    <u>Starlette Dancers</u>--}}
{{--                    <br>(Creative Combo/Children 1/Children 2)--}}
{{--                    <br>--}}
{{--                    Recital Bundle: <strong>$200.00</strong>--}}
{{--                </p>--}}
{{--                <ul>Includes:--}}
{{--                    <li>1 Costume</li>--}}
{{--                    <li>1 Production fee: <strong>$50 per show</strong></li>--}}
{{--                    <li>1 Digital download of the performances</li>--}}
{{--                    <li>1 Production t-shirt</li>--}}
{{--                    <li>Tights</li>--}}
{{--                    <li>Nanny fee</li>--}}
{{--                </ul>--}}
{{--                <p class="px-4">--}}
{{--                    Additional costumes: <strong>+$70 per class</strong>--}}
{{--                </p>--}}
{{--                <hr class="my-4">--}}
{{--                <p class="px-4">--}}
{{--                    <u>Junior Dancers</u>--}}
{{--                    <br>(Junior 1/2/3)--}}
{{--                    <br>--}}
{{--                    Recital Bundle: <strong>$215.00</strong>--}}
{{--                </p>--}}
{{--                <ul>Includes:--}}
{{--                    <li>1 Costume</li>--}}
{{--                    <li>1 Production fee: <strong>$50 per show</strong></li>--}}
{{--                    <li>1 Digital download of the performances</li>--}}
{{--                    <li>1 Production t-shirt</li>--}}
{{--                    <li>Tights</li>--}}
{{--                    <li>Nanny fee</li>--}}
{{--                </ul>--}}
{{--                <p class="px-4">--}}
{{--                    Additional costumes: <strong>+$80 per class</strong>--}}
{{--                </p>--}}
{{--                <hr class="my-4">--}}
{{--                <p class="px-4">--}}
{{--                    <u>Teen Dancers</u>--}}
{{--                    <br>(Teen 2/3/4/5)--}}
{{--                    <br>--}}
{{--                    Recital Bundle: <strong>$230.00</strong>--}}
{{--                </p>--}}
{{--                <ul>Includes:--}}
{{--                    <li>1 Costume</li>--}}
{{--                    <li>1 Production fee: <strong>$50 per show</strong></li>--}}
{{--                    <li>1 Digital download of the performances</li>--}}
{{--                    <li>1 Production t-shirt</li>--}}
{{--                </ul>--}}
{{--                <p class="px-4">--}}
{{--                    Additional costumes: <strong>+$100 per class</strong>--}}
{{--                    <br>--}}
{{--                    *Teen dancers are responsible for purchasing appropriate tights for their dances.--}}
{{--                </p>--}}
{{--                <hr class="my-4">--}}
{{--                <p class="px-4 fw-bold text-center">--}}
{{--                    Those that have performances in both the year-end Recital and the year-end Aftershow will be charged an additional $30.--}}
{{--                    <br><br>Once you have paid for your Recital Bundle, it is NON-REFUNDABLE and NON-TRANSFERABLE even if you paid before the deadline. So be 100% SURE that your child wants to be in the recital!--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
