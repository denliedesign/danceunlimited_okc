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
                                    <li> 3pm-9pm</li>
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
                            <li><ion-icon name="mail"></ion-icon>  ducustomercare99@gmail.com</li>
                            <li><ion-icon name="mail"></ion-icon> danceunlimitedokc@gmail.com</li>
                            <li><ion-icon name="mail"></ion-icon> spotlightactingokc@gmail.com</li>
                            <li><ion-icon name="mail"></ion-icon> vibedanceokc@gmail.com</li>
                            <li><ion-icon name="location"></ion-icon> 1217 E Hefner Road, OKC, OK 73131</li>
{{--                            <li><ion-icon name="gift"></ion-icon> PO Box 14371 Oklahoma City, OK 73113</li>--}}
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






{{--<div class="bg-dark text-white pb-5 font-syne">--}}
{{--    <div class="container" id="footer">--}}
{{--        <div class="pt-5">--}}
{{--            <div class="row m-0 p-0">--}}
{{--                <div class="col-sm-4 mt-3">--}}
{{--                    <p class="lead">CONTACT</p>--}}
{{--                    <ul class="list-group" id="footer-list">--}}
{{--                        <li class="list-group-item px-0 border-0">--}}
{{--                            <ion-icon name="navigate"></ion-icon>--}}
{{--                            923 12th Ave S, STE 103, Onalaska, WI 54650--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item px-0 border-0">--}}
{{--                            <ion-icon name="call"></ion-icon>--}}
{{--                            608.779.4642--}}
{{--                        </li>--}}
{{--                        <li class="list-group-item px-0 border-0">--}}
{{--                            <ion-icon name="mail"></ion-icon>--}}
{{--                            mistysdance@gmail.com--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-sm-2 mt-3">--}}
{{--                    <p class="lead">SOCIAL</p>--}}
{{--                    <div class="d-flex d-inline">--}}
{{--                        <div class="d-inline">--}}
{{--                            <a class="nav-link text-white p-0" href="https://www.facebook.com/mistysdance/" target="_blank">--}}
{{--                                <ion-icon name="logo-facebook"></ion-icon>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="d-inline">--}}
{{--                            <a class="nav-link text-white p-0 mx-3" href="https://www.instagram.com/mistysdance/" target="_blank">--}}
{{--                                <ion-icon name="logo-instagram"></ion-icon>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6 mt-3">--}}
{{--                    <p class="lead">MORE LINKS</p>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm">--}}
{{--                            <ul class="list-group" id="footer-list">--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="https://forms.gle/vjt7miuj7iZAbqtW9" target="_blank">Absence Reporting</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/events">Calendar of Events</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/pl">Private Lessons</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm">--}}
{{--                            <ul class="list-group" id="footer-list">--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="https://forms.gle/trR2amJYHtqGYLAc9" target="_blank">Student Lockers</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="https://docs.google.com/forms/d/e/1FAIpQLSfzEyUJ7xwdSlv_IMNtLznZo1Lwk5jH0yfAKQZ32jGRpuWdCw/viewform?c=0&w=1" target="_blank">Performance Request</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/studio">Studio</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/employment">Employment</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm">--}}
{{--                            <ul class="list-group" id="footer-list">--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/promotions">Promos</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="/posts">Blog</a>--}}
{{--                                </li>--}}
{{--                                <li class="list-group-item px-0 border-0">--}}
{{--                                    <a class="text-decoration-none txt-blue" href="https://mistysdance.store">Gift of Dance</a>--}}
{{--                                </li>--}}
{{--                                @guest--}}
{{--                                    <li class="list-group-item px-0 border-0">--}}
{{--                                        <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Staff Login') }}</a>--}}
{{--                                    </li>--}}
{{--                                @else--}}
{{--                                    <li class="list-group-item px-0 border-0 dropdown">--}}
{{--                                        <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                                                                     document.getElementById('logout-form').submit();">--}}
{{--                                            {{ __('Logout') }}--}}
{{--                                        </a>--}}
{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}
{{--                                    </li>--}}
{{--                                @endguest--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<div id="bottom" class="bg-dark text-white-50 text-center pt-3 font-syne">--}}
{{--    © 2022 Misty's Dance Unlimited--}}
{{--</div>--}}
{{--<p id="credit" class="bg-dark text-center pb-3 m-0 font-syne">--}}
{{--    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>--}}
{{--</p>--}}
{{--<div id="bottom"></div>--}}
