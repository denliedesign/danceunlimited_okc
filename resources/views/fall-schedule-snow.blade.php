@extends('layouts.app-snow')
@section('title', 'DU Fall Class Schedule | Dance Unlimited')
@section('content')

    <div class="banner-wrap">
        <div class="banner"></div>
    </div>

    <div class="container py-5">
        <h1 class="text-center"><strong>DU Fall Class Schedule</strong></h1>
{{--        <p class="text-center">Fall semester has come and gone. Check back end of March for Fall 2024 Schedule.</p>--}}
        <div class="d-flex justify-content-center my-4">
            <div>
                <img src="/images/schedule-24-25.jpg" alt="" class="img-fluid">
                <img src="/images/schedule-24-25b.jpg" alt="" class="img-fluid">
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-1">
{{--            <div class="col-sm my-2"><img src="/images/23-fall-schedule_page-0001.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm my-2"><img src="/images/23-fall-schedule_page-0002.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm my-2"><img src="/images/23-fall-schedule_page-0003.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm my-2"><img src="/images/23-fall-schedule_page-0004.jpg" alt="fall schedule" class="img-fluid shadow rounded"></div>--}}
{{--            <div class="col-sm my-2"><img src="/images/fall-2023.jpg" alt="group of dancer girls pose for picture" class="img-fluid shadow rounded"></div>--}}
        </div>
    </div>

{{--        <h2 class="mt-5"><strong>Starlettes Ages 3-7</strong></h2>--}}
{{--        <table class="table text-white">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Class</th>--}}
{{--                <th scope="col">Age</th>--}}
{{--                <th scope="col">Day</th>--}}
{{--                <th scope="col">Time</th>--}}
{{--                <th scope="col">Enroll</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>Creative Combo</td>--}}
{{--                <td>3-4</td>--}}
{{--                <td>Tuesday</td>--}}
{{--                <td>4:30-5:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Creative Combo</td>--}}
{{--                <td>3-4</td>--}}
{{--                <td>Wednesday</td>--}}
{{--                <td>4:30-5:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Creative Combo</td>--}}
{{--                <td>3-4</td>--}}
{{--                <td>Thursday</td>--}}
{{--                <td>5:30-6:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Ballet/Tap</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>4:30-5:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Ballet/Tap</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>5:15-6:00</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Ballet/Tap</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Thursday</td>--}}
{{--                <td>4:45-5:30</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Jazz/Hip Hop</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>5:15-6:00</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Jazz/Hip Hop</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>6:00-6:45</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children One Jazz/Hip Hop</td>--}}
{{--                <td>5&^</td>--}}
{{--                <td>Thursday</td>--}}
{{--                <td>5:30-6:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Ballet/Tap</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>4:30-5:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Ballet/Tap</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Tuesday</td>--}}
{{--                <td>4:45-5:30</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Ballet/Tap</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Thursday</td>--}}
{{--                <td>5:00-5:45</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Jazz/Hip Hop</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Monday</td>--}}
{{--                <td>5:15-6:00</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Jazz/Hip Hop</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Tuesday</td>--}}
{{--                <td>5:30-6:15</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Children Two Jazz/Hip Hop</td>--}}
{{--                <td>6.5&^</td>--}}
{{--                <td>Thursday</td>--}}
{{--                <td>5:45-6:30</td>--}}
{{--            <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container">--}}
{{--            <h2><strong>Jr. & Teen Ballet/Jazz - Ages 8 &^</strong></h2>--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">Class</th>--}}
{{--                    <th scope="col">Age</th>--}}
{{--                    <th scope="col">Days</th>--}}
{{--                    <th scope="col">Time</th>--}}
{{--                    <th scope="col">Enroll</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td>Junior 2 Ballet</td>--}}
{{--                    <td>10&^</td>--}}
{{--                    <td>Tuesday & Thursday</td>--}}
{{--                    <td>5:30-6:30/4:30-5:30</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 2 Ballet</td>--}}
{{--                    <td>12&^</td>--}}
{{--                    <td>Monday & Wednesday</td>--}}
{{--                    <td>7:15-8:15/5:30-6:30</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 2 Jazz</td>--}}
{{--                    <td>12&^</td>--}}
{{--                    <td>Monday & Wednesday</td>--}}
{{--                    <td>8:15-9:30/6:30-7:30</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 3 Ballet</td>--}}
{{--                    <td>13&^</td>--}}
{{--                    <td>Monday & Wednesday</td>--}}
{{--                    <td>6:00-7:15/4:15-5:30</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 3 Jazz</td>--}}
{{--                    <td>13&^</td>--}}
{{--                    <td>Monday & Wednesday</td>--}}
{{--                    <td>7:15-8:30/5:30-6:45</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 4 Ballet</td>--}}
{{--                    <td>14&^</td>--}}
{{--                    <td>Tuesday & Thursday</td>--}}
{{--                    <td>6:45-8:00</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 4 Jazz</td>--}}
{{--                    <td>14&^</td>--}}
{{--                    <td>Tuesday & Thursday</td>--}}
{{--                    <td>8:00-9:15</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 5 Ballet</td>--}}
{{--                    <td>15&^</td>--}}
{{--                    <td>Tuesday & Thursday</td>--}}
{{--                    <td>6:45-8:00</td>--}}
{{--                <td><a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a></td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container py-5">--}}
{{--        <h2><strong>Hip Hop Ages 8 &^</strong></h2>--}}
{{--        <table class="table text-white">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th scope="col">Class</th>--}}
{{--                <th scope="col">Age</th>--}}
{{--                <th scope="col">Day</th>--}}
{{--                <th scope="col">Time</th>--}}
{{--                <th scope="col">Enroll</th>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            <tr>--}}
{{--                <td>Hip Hop 3</td>--}}
{{--                <td>13&^</td>--}}
{{--                <td>Wednesday</td>--}}
{{--                <td>7:30-8:30</td>--}}
{{--                <td>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Hip Hop 4</td>--}}
{{--                <td>14&^</td>--}}
{{--                <td>Wednesday</td>--}}
{{--                <td>5:30-6:30</td>--}}
{{--                <td>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>Hip Hop 5</td>--}}
{{--                <td>15&^</td>--}}
{{--                <td>Wednesday</td>--}}
{{--                <td>8:30-9:30</td>--}}
{{--                <td>--}}
{{--                    <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <div class="bg-white py-5">--}}
{{--        <div class="container">--}}
{{--            <h2><strong>Tap Ages 8 &^</strong></h2>--}}
{{--            <table class="table">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th scope="col">Class</th>--}}
{{--                    <th scope="col">Age</th>--}}
{{--                    <th scope="col">Day</th>--}}
{{--                    <th scope="col">Time</th>--}}
{{--                    <th scope="col">Enroll</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td>Teen 2 Tap</td>--}}
{{--                    <td>12&^</td>--}}
{{--                    <td>Monday</td>--}}
{{--                    <td>6:00-7:00</td>--}}
{{--                    <td>--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 3 Tap</td>--}}
{{--                    <td>13&^</td>--}}
{{--                    <td>Monday</td>--}}
{{--                    <td>8:30-9:30</td>--}}
{{--                    <td>--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr>--}}
{{--                    <td>Teen 5 Tap</td>--}}
{{--                    <td>15&^</td>--}}
{{--                    <td>Wednesday</td>--}}
{{--                    <td>7:30-8:30</td>--}}
{{--                    <td>--}}
{{--                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login"--}}
{{--                                           target="_blank">--}}
{{--                                            <button class="btn btn-danger btn-sm mr-3">ENROLL</button>--}}
{{--                                        </a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
