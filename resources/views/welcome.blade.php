@extends('layouts.app')

@section('content')

            <div id="vision">
                <div class="d-none d-md-block">
                    <div class="container video-container">
                        <div class="d-flex justify-content-center">
                            <p class="txt-overlay text-center txt-title">
                                OKC/Edmond Premier Dance & Acting Studio with a variety of classes for all ages
                            </p>
                        </div>
                        <div class="d-flex justify-content-center">
                            <video id="myVideo" controls>
                                <source src="images/back-up.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="crop">
                        <img src="images/okcpointe.jpg" alt="" class="bg-img">
                    </div>
                </div>

                <!-- mobile -->
                <div class="d-block d-md-none">
                    <div class="d-flex justify-content-center">
                        <h1 class="txt-mobile">
                            OKC/Edmond Premier Dance & Acting Studio with a variety of classes for all ages
                        </h1>
                    </div>
                    <div class="d-flex justify-content-center">
                        <video id="mobileVideo" controls>
                            <source src="images/i-will-wait.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
                <!-- end of mobile-->

            </div>


{{--            <section id="new-events" class="text-center my-5">--}}
{{--               <div class="container">--}}
{{--                  <div class="row">--}}
{{--                      <div class="col-sm">--}}
{{--                          <h2 class="txt-orange">MOVE OVER MOANA!!!! We’ll have you on our stages soon.</h2>--}}
{{--                          <p>--}}
{{--                              But, for this Fall, we are “falling” all the way back to the <span class="highlight-yellow"><em><strong>Totally Rad</strong></em> 1980’s</span> with two FANTASTIC Musicals set in the era of Madonna, Molly Ringwald, Def Leopard, Bon Jovi, Prince, Cindi Lauper and Michael Jackson!!!--}}
{{--                          </p>--}}
{{--                          <p class="txt-pink-purple">--}}
{{--                              The Broadway hits, <span class="highlight-white">HEATHERS; The Musical</span>, and <span class="highlight-white">ROCK OF AGES</span> will be rocking our Spotlight Studio stage!!!  These are not your “parents” musicals…well… actually, they are. If you parents grew up in the 80’s, anyway!!!--}}
{{--                          </p>--}}
{{--                          <p class="txt-green">--}}
{{--                              If you’ve seen the Broadway shows, or the movies… FEAR NOT!!! We will have all the great music, and the storylines, without the language, or the adult situations. They’re <u>cleaned up</u>, high energy, super fun, and family friendly versions of the hit Broadway musicals!!!--}}
{{--                          </p>--}}
{{--                          <p class="txt-dark-blue">--}}
{{--                              ROCK OF AGES is more than just your typical jukebox musical. It blends great hits from the 1980s by popular Rockers together to tell the story of a small town 80’s girl going to LA’s Sunset strip to seek her fame and fortune. Packed with bigger than life colorful characters, 80s bangs, LOTS of aqua net, massive mullets, and eclectic costumes, ROCK OF AGES is a blast from the popular past of the 1980’s that kids of all ages will enjoy!!!--}}
{{--                          </p>--}}
{{--                          <p class="txt-red">--}}
{{--                              HEATHERS THE MUSICAL; is the darkly delicious story of Veronica Sawyer, a brainy, beautiful teenage misfit who hustles her way into the most powerful and ruthless clique at Westerberg High: The Heathers.--}}
{{--                          </p>--}}
{{--                          <p>--}}
{{--                              Broadway Babies, Razzle Dazzle, Broadway Bound will be performing Rock of Ages Youth Edition.--}}
{{--                              <br>--}}
{{--                              Curtain Call and Totally Drama will be performing Rock of Ages Teen Edition.--}}
{{--                              <br>--}}
{{--                              Take Stage will be performing Heathers: Teen Edition.--}}
{{--                          </p>--}}
{{--                          <p class="highlight-turq">--}}
{{--                              Totally Drama, Curtain Call and Take Stage will have AUDITIONS Saturday Aug 7th, and Callbacks Aug 8th.--}}
{{--                          </p>--}}
{{--                          <p>--}}
{{--                              You <strong>must</strong> be enrolled at Spotlight for the semester to attend auditions and participate.--}}
{{--                          </p>--}}
{{--                          <div class="d-flex justify-content-center mb-3">--}}
{{--                              <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd" target="_blank"><button class="btn btn-danger mr-3">Enroll In Class</button></a>--}}
{{--                              <a href="https://www.signupgenius.com/go/60B0E4AACA92AA5FD0-rock" target="_blank"><button class="btn btn-outline-danger">Sign Up For Auditions</button></a>--}}
{{--                          </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-sm">--}}
{{--                          <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2">--}}
{{--                              <img src="/images/rock-of-ages-youth.jpg" alt="spotlight acting events" class="img-fluid">--}}
{{--                              <img src="/images/rock-of-ages-teen.jpg" alt="spotlight acting events" class="img-fluid">--}}
{{--                          </div>--}}
{{--                          <img src="/images/heathers.jpg" alt="spotlight acting events" class="img-fluid">--}}
{{--                      </div>--}}
{{--                  </div>--}}
{{--               </div>--}}
{{--            </section>--}}

            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="classes">
                            <div class="container">
                                <h1 class="txt-black-title mt-5">Dance Unlimited</h1>
                                <div class="scrolling-wrapper py-2" id="scrolling-wrapper">
                                    <div class="card mr-3" style="">
                                        <img src="images/classes/starlette.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Starlette</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 3-4 year olds.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger mr-3">ENROLL NOW</button></a>
                                            <a href="starlette-information"><button class="btn btn-outline-danger">LEARN MORE</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/starlettes-at-DU.JPG" alt="" style="width: 350px; height: 350px; object-fit: cover; object-position: 40% 0;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Starlette Ballet/Jazz/Tap/Hip Hop</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Classes designed for 5-7 year olds.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/acro.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Acro</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Ages 5 and up!</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/jr-hip-hop-hair.jpeg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">JR Hip Hop</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 7.5-8 year olds</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/jr-ballet.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">JR Ballet, Jazz, & Tap</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for 8-11 year olds</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                    <div class="card mr-3">
                                        <img src="images/classes/hip-hop.jpg" alt="" style="max-width: 350px;" class="card-img-top">
                                        <h5 class="card-title text-center" style="font-size: 1.1em">Teen Ballet, Jazz, Hip Hop & Tap</h5>
                                        <p class="text-center card-text"style="white-space: normal; height: 24px;">Class designed for ages 12+.</p>
                                        <div class="d-flex justify-content-center mb-3">
                                            <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button class="btn btn-danger">ENROLL NOW</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-controls d-flex justify-content-center">
                            <button id="slide-left" class="mr-5"><i class="arrow click-left d-flex align-self-center"></i></button>
                            <button id="slide-right"><i class="arrow click-right d-flex align-self-center"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div id="spotlight">
                            <h1 class="txt-black-title pb-2 mt-5" style="padding-left: 15px;">Spotlight Acting Academy</h1>
                            <div class="container">
                                <div class="row" style="height: 492.267px;">
                                    <div class="col-sm">
{{--                                        <img src="images/spotlight-acting-sb.jpg" alt="" class="d-none d-md-block" style="height: 433px;">--}}
                                        <img src="images/spotlight-acting-sb.jpg" alt="">
                                    </div>
                                    <div class="col-sm">
                                        <p class="pt-2">
                                            At Spotlight Acting Academy, the doors are always open for students with a range of theatre experience. We offer the opportunity for students to explore their interest and passion in not only acting, but musical theatre and performance.
                                        </p>
                                        <a href="https://app.thestudiodirector.com/danceunlimitedpac/portal.sd?page=Login" target="_blank"><button type="button" class="btn btn-danger mb-3">ENROLL NOW</button></a>
                                        <a href="spotlight-acting-academy"><button type="button" class="btn btn-outline-danger mb-3">LEARN MORE</button></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container d-flex justify-content-center py-5">
                <div class="row">
                    <div class="col-md text-center d-flex align-items-center">
                        <div>
                            <h1 class="txt-black-title">We Have Built a Reputation for Excellence in Dance Instruction</h1>
                            <p>
                                From your child’s first class to their graduation performance, DUPAC has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, DUPAC is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                            </p>
                        </div>
                    </div>
                    <div class="col-md">
                        <img src="/images/mtjgd-cert.jpg" alt="more than just great dancing certification" class="img-fluid" style="max-width: 600px; width: 100%; height: auto;">
                    </div>
                </div>
            </div>

    @endsection
