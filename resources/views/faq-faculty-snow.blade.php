@extends('layouts.app-snow')
@section('title', 'About our Faculty | Dance Unlimited')
@section('content')

{{--    <div class="banner-wrap">--}}
{{--        <div class="banner"></div>--}}
{{--    </div>--}}

{{--<img src="/images/du-faculty.jpg" alt="faculty" class="img-fluid" style="width: 100%;">--}}

        @include("_faculty-modals")

{{--    <div class="container py-5">--}}
{{--        <h1 class="text-center"><strong>About our Faculty</strong></h1>--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-3 my-3">--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <img src="/images/faculty-amy.jpg" alt="headshot" class="shadow rounded" style="height: 300px; width: 100%; object-fit: contain;">--}}
{{--                </div>--}}
{{--                <div class="text-center mt-2">--}}
{{--                    <h2><strong>AMY REYNOLDS-REED</strong></h2>--}}
{{--                    <p>--}}
{{--                        Owner/ Artistic Director/ Instructor--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <ul>--}}
{{--                    <li class="my-2"> (Owner/Artistic Director/Dance Instructor) Opened Dance Unlimited in August 1999.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Amy is a professional teacher/dancer with 30+ years’ experience as an instructor/dancer of jazz, classical ballet, tap, modern, music theatre, contemporary and pointe. Originally from Yukon, OK, and a graduate of the UCO Dance Program.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Amy was a member of the UCO Dance Faculty for 6 years where she instructed Jazz, Tap and Modern dance technique classes plus Dance Pedagogy. Then switched gears to join the University of Oklahoma, Weitzenhoffer School of Musical Theatre. She served on the Dean’s Committee and Recruitment Committee at OU for 12 years. Most recently she finished up 4 years at UCO as a Professor in the Music Theatre department.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Amy is an accomplished choreographer. Amy’s choreography can be seen not only in the year-end productions, but also on the VIBE Dance Company, collegiately, and regionally.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Choreography credits include Waitress (Dallas Theatre Center), Jersey Boys (Lyric Theare OKC), Matilda (Lyric Theatre OKC), Head Over Heels (Lyric Plaza), Newsies! (Lyric Theatre OKC), Rock of Ages (Lyric Theatre at the Plaza), Freaky Friday (Lyric Theatre of OKC), Philharmonic Christmas Show, Billy Elliot, West Side Story, Hairspray, Call Me Madam (Lyric Theatre) The Wedding Singer (Sooner Theatre), Peter and the Star Catcher, Little Me (City Rep Theatre), South Pacific (Jewel Box Theatre), A Funny Thing Happened on the Way to the Forum, You’re A Good Man Charlie Brown (City Rep Theatre), The Fantasticks (OCU), The Will Rogers Follies (Lyric Theatre/Grandbury Opera House), Jesus Christ Superstar and Cabaret (Lyric Theatre of OKC) and The Pirates of Penzance (OCU), Man of LaMancha (UCO), Once Upon A Mattress, The Scarlet Pimpernel and A Chorus Line (OU), Most Happy Fellow (UCO)--}}
{{--                    </li>--}}
{{--                    <li class="my-2">Amy co-produced/directed the OKC Dance Project ”, a local jazz/contemporary dance company, performances of “Common Thread” and “Woven”.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Favorite Performance Credits include Joseph and the Amazing Technicolor Dreamcoat, La Cage Aux Folles, Hair, Chicago, Grease, The Best Little Whorehouse in Texas, Can-Can, West Side Story, and A Funny Thing Happened On The Way To The Forum. Amy also worked in Boca Raton at the Royal Palm Dinner Theater and abroad on Royal Caribbean’s Rhapsody of the Seas.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Amy’s many years of acquired knowledge and experience have given her the tools to teach with a great appreciation for each student’s individual needs and awareness of how to best help them realize their ultimate goals. This enthusiasm has led many of her students over the years to personal growth and competitive success.--}}
{{--                    </li>--}}
{{--                    <li class="my-2"> Amy is also a very proud mom to Krayson and Ember!--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <hr class="my-4">--}}
{{--        <div class="row">--}}
{{--            <div class="col-sm-3 my-3">--}}
{{--                <div class="d-flex justify-content-center">--}}
{{--                    <img src="/images/staff-jonathan.jpg" alt="headshot" class="shadow rounded" style="height: 300px; width: 100%; object-fit: contain;">--}}
{{--                </div>--}}
{{--                <div class="text-center mt-2">--}}
{{--                    <h2><strong>JONATHAN BECK REED</strong></h2>--}}
{{--                    <p>--}}
{{--                        Owner/ Spotlight Acting Director--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-sm">--}}
{{--                <ul>--}}
{{--                    <li class="my-3">Equity professional award winning stage, film and television Actor, Director, Designer, Arts Educator--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Founding Member and Associated Artist for Oklahoma City Repertory Theater (ala OKCREP)--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Stage and in Film:  starred opposite such Emmy and Tony Award Winners and Celebrities as Don Knotts, Bob Hope, Chris Kattan, G.W. Bailey, Rip Taylor, Ann Reinking, Gwen Verdon, Megan Mullally, Charlotte d'Amboise, Kristin Chenoweth, Kelli O'Hara, Wil Chase, Charles Busch, and Norbert Leo Butz, Vince Gill, and Amy Grant, among others.--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Theater credits include Hysterium in the B'way Revival of A Funny Thing Happened on the Way to the Forum, Garson Hobart in the First National Tour of “Norman, Is that You?”, Julian Marsh in the B'way Third Nat'l Tour of 42nd Street, Harold Hill in the 30th Anniversary Revival of The Music Man (a role he’s distinguished to have played over 500 times in multiple productions, recently being recognized for his work with a Broadway World Award as Best Actor in a Musical), and Noble, et al in the Off-B'way Revival of Little Me working closely with the Shows legendary Composer, Cy Coleman.--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Created the Role of Texas in the Off B'way World Premier of Tom Jones/Harvey Schmidt’s Western romp, Roadside.--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Additional standout Roles: Fagin in Oliver! (Lyric Stage/Dallas, Best Actor in a Musical Column Award ), Cyrano DeBergerac in Cyrano! (Omaha Playhouse), Noble, et al in Little Me (Royal Palm, Best Actor in a Musical Carbonell Award; Birmingham Theater, Best Actor in a Musical-Detroit Critics Award, Oklahoma City Repertory Theater), Prof. Henry Higgins in My Fair Lady (B'Way Intl. Revival Tour, Oklahoma City Repertory Theater), Tevye in Fiddler on the Roof (Lyric Theater OKC), Bill Snibson in Me and My Girl (Pittsburgh Playhouse, Lyric Theater; The OKC Gazettes Best Actor Award), Scrooge in A Christmas Carol (Nat'l Tour and Lyric Theater OKC), Ned Weeks in The Normal Heart (Oklahoma City Repertory Theater), Will in The Will Rogers Follies (Lyric Theater OKC, The Royal Palm; Best Actor in a Musical Carbonell Nominee), Captain Hook in Peter Pan (Intl. Tour, Lyric Theater OKC), Inspector Goole in An Inspector Calls (Lyric Theater OKC), Starbuck in 110 in the Shade (Nat'l Tour), Ira in Laughter in the 23rd Floor (Oklahoma City Repertory Theater), Oscar Madison in The Odd Couple (Lyric Theater OKC), Father Rivard in The Runner Stumbles (Carpenter Square, Directed by the Playwright, Milan Stitt), Brick in Cat on a Hot Tin Roof (Oklahoma Theater Center), “Everyone Else” in Dan Goggins Balancing Act (Players Theater Columbus), George in Of Mice and Men (Oklahoma Theater Center), Steve Heidebrecht in August: Osage County (Oklahoma City Repertory Theater), Dr. Franknfurter in Rocky Horror (Carpenter Square), and the 10 Roles originated by Greater Tuna Legend Jaston Williams in the 4 "TUNA" Shows, in multiple productions over the past 35 years.--}}
{{--                    </li>--}}
{{--                    <li class="my-3">JTF Director--}}
{{--                    </li>--}}
{{--                    <li class="my-3">Dedicated and celebrated educator in the Arts--}}
{{--                    </li>--}}
{{--                    <li class="my-3">16 years visiting Professor in the prestigious Oklahoma City University Music Theater Department--}}
{{--                    </li>--}}
{{--                    <li class="my-3">2 years in the Oklahoma University Weitzenhoffer School of Music Theater--}}
{{--                    </li>--}}

{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <!-- end of owners/director -->
    <!-- start of staff -->

    <div class="bg-white py-5">
        <div class="container">
                    <h1 class="text-center"><strong>About our Faculty</strong></h1>
{{--            <p class="text-center"><strong>update coming soon</strong></p>--}}
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4 mt-5">
                <x-instructor modal="amy-reed" image="new-headshots/AMY REYNOLDS REED dance unlimited okc25.jpg" name="Amy Reynolds-Reed" title="Owner/ Artistic Director/ Instructor" bio="
<li class='my-2'> (Owner/Artistic Director/Dance Instructor) Opened Dance Unlimited in August 1999.
                </li>
                <li class='my-2'> Amy is a professional teacher/dancer with 30+ years’ experience as an instructor/dancer of jazz, classical ballet, tap, modern, music theatre, contemporary and pointe. Originally from Yukon, OK, and a graduate of the UCO Dance Program.
                </li>
                <li class='my-2'> Amy was a member of the UCO Dance Faculty for 6 years where she instructed Jazz, Tap and Modern dance technique classes plus Dance Pedagogy. Then switched gears to join the University of Oklahoma, Weitzenhoffer School of Musical Theatre. She served on the Dean’s Committee and Recruitment Committee at OU for 12 years. Most recently she finished up 4 years at UCO as a Professor in the Music Theatre department.
                </li>
                <li class='my-2'> Amy is an accomplished choreographer. Amy’s choreography can be seen not only in the year-end productions, but also on the VIBE Dance Company, collegiately, and regionally.
                </li>
                <li class='my-2'> Choreography credits include Waitress (Dallas Theatre Center), Jersey Boys (Lyric Theare OKC), Matilda (Lyric Theatre OKC), Head Over Heels (Lyric Plaza), Newsies! (Lyric Theatre OKC), Rock of Ages (Lyric Theatre at the Plaza), Freaky Friday (Lyric Theatre of OKC), Philharmonic Christmas Show, Billy Elliot, West Side Story, Hairspray, Call Me Madam (Lyric Theatre) The Wedding Singer (Sooner Theatre), Peter and the Star Catcher, Little Me (City Rep Theatre), South Pacific (Jewel Box Theatre), A Funny Thing Happened on the Way to the Forum, You’re A Good Man Charlie Brown (City Rep Theatre), The Fantasticks (OCU), The Will Rogers Follies (Lyric Theatre/Grandbury Opera House), Jesus Christ Superstar and Cabaret (Lyric Theatre of OKC) and The Pirates of Penzance (OCU), Man of LaMancha (UCO), Once Upon A Mattress, The Scarlet Pimpernel and A Chorus Line (OU), Most Happy Fellow (UCO)
                </li>
                <li class='my-2'>Amy co-produced/directed the OKC Dance Project ”, a local jazz/contemporary dance company, performances of “Common Thread” and “Woven”.
                </li>
                <li class='my-2'> Favorite Performance Credits include Joseph and the Amazing Technicolor Dreamcoat, La Cage Aux Folles, Hair, Chicago, Grease, The Best Little Whorehouse in Texas, Can-Can, West Side Story, and A Funny Thing Happened On The Way To The Forum. Amy also worked in Boca Raton at the Royal Palm Dinner Theater and abroad on Royal Caribbean’s Rhapsody of the Seas.
                </li>
                <li class='my-2'> Amy’s many years of acquired knowledge and experience have given her the tools to teach with a great appreciation for each student’s individual needs and awareness of how to best help them realize their ultimate goals. This enthusiasm has led many of her students over the years to personal growth and competitive success.
                </li>
                <li class='my-2'> Amy is also a very proud mom to Krayson and Ember!
                </li>
"/>
                <x-instructor modal="jonathan-reed" image="new-headshots/JONATHAN BECK REED dance unlimited okc24.jpg" name="Jonathan Beck Reed" title="Owner/ Spotlight Acting Director" bio="
<li class='my-2'>Equity professional award winning stage, film and television Actor, Director, Designer, Arts Educator
                </li>
                <li class='my-2'>Founding Member and Associated Artist for Oklahoma City Repertory Theater (ala OKCREP)
                </li>
                <li class='my-2'>Stage and in Film:  starred opposite such Emmy and Tony Award Winners and Celebrities as Don Knotts, Bob Hope, Chris Kattan, G.W. Bailey, Rip Taylor, Ann Reinking, Gwen Verdon, Megan Mullally, Charlotte d'Amboise, Kristin Chenoweth, Kelli O'Hara, Wil Chase, Charles Busch, and Norbert Leo Butz, Vince Gill, and Amy Grant, among others.
                </li>
                <li class='my-2'>Theater credits include Hysterium in the B'way Revival of A Funny Thing Happened on the Way to the Forum, Garson Hobart in the First National Tour of “Norman, Is that You?”, Julian Marsh in the B'way Third Nat'l Tour of 42nd Street, Harold Hill in the 30th Anniversary Revival of The Music Man (a role he’s distinguished to have played over 500 times in multiple productions, recently being recognized for his work with a Broadway World Award as Best Actor in a Musical), and Noble, et al in the Off-B'way Revival of Little Me working closely with the Shows legendary Composer, Cy Coleman.
                </li>
                <li class='my-2'>Created the Role of Texas in the Off B'way World Premier of Tom Jones/Harvey Schmidt’s Western romp, Roadside.
                </li>
                <li class='my-2'>Additional standout Roles: Fagin in Oliver! (Lyric Stage/Dallas, Best Actor in a Musical Column Award ), Cyrano DeBergerac in Cyrano! (Omaha Playhouse), Noble, et al in Little Me (Royal Palm, Best Actor in a Musical Carbonell Award; Birmingham Theater, Best Actor in a Musical-Detroit Critics Award, Oklahoma City Repertory Theater), Prof. Henry Higgins in My Fair Lady (B'Way Intl. Revival Tour, Oklahoma City Repertory Theater), Tevye in Fiddler on the Roof (Lyric Theater OKC), Bill Snibson in Me and My Girl (Pittsburgh Playhouse, Lyric Theater; The OKC Gazettes Best Actor Award), Scrooge in A Christmas Carol (Nat'l Tour and Lyric Theater OKC), Ned Weeks in The Normal Heart (Oklahoma City Repertory Theater), Will in The Will Rogers Follies (Lyric Theater OKC, The Royal Palm; Best Actor in a Musical Carbonell Nominee), Captain Hook in Peter Pan (Intl. Tour, Lyric Theater OKC), Inspector Goole in An Inspector Calls (Lyric Theater OKC), Starbuck in 110 in the Shade (Nat'l Tour), Ira in Laughter in the 23rd Floor (Oklahoma City Repertory Theater), Oscar Madison in The Odd Couple (Lyric Theater OKC), Father Rivard in The Runner Stumbles (Carpenter Square, Directed by the Playwright, Milan Stitt), Brick in Cat on a Hot Tin Roof (Oklahoma Theater Center), “Everyone Else” in Dan Goggins Balancing Act (Players Theater Columbus), George in Of Mice and Men (Oklahoma Theater Center), Steve Heidebrecht in August: Osage County (Oklahoma City Repertory Theater), Dr. Franknfurter in Rocky Horror (Carpenter Square), and the 10 Roles originated by Greater Tuna Legend Jaston Williams in the 4 'TUNA' Shows, in multiple productions over the past 35 years.
                </li>
                <li class='my-2'>JTF Director
                </li>
                <li class='my-2'>Dedicated and celebrated educator in the Arts
                </li>
                <li class='my-2'>16 years visiting Professor in the prestigious Oklahoma City University Music Theater Department
                </li>
                <li class='my-2'>2 years in the Oklahoma University Weitzenhoffer School of Music Theater
                </li>
"/>


                <x-instructor modal="chelsea" image="new-headshots/CHELSEA JONES dance unlimited okc1.jpg" name="Chelsea Jones" title="Faculty Management/ Lead instructor" bio="
<li class='my-2'>Has been with DU for 26 years first as student and 12 years teaching</li>
<li class='my-2'>Member of the Vibe Dance Company / 6 years </li>
<li class='my-2'>Current Head of the Dance Department at Heritage Hall </li>
<li class='my-2'>Member of MTJGD and YPAD </li>
<li class='my-2'>Choreography: Vibe dance Company, Spotlight Acting Academy, and Heritage Hall Heritage Hall Performing Arts </li>
<li class='my-2'>Loves teaching and inspiring others to teach!</li>
<li class='my-2'>Hopes to inspire others to love dance as well!</li>
<li class='my-2'>When not teaching loves to workout, read, and spend time with her family </li>
<li class='my-2'>Mom of Jentry (9) and Janson (6) </li>

"/>
{{--                <x-instructor modal="makenzie" image="staff-makenzie.jpg" name="makenzie ford" title="Spotlight Associate Director/ Voice/ Instructor" bio=""/>--}}
{{--                <x-instructor modal="keyna-new" image="faculty-keyna.jpg" name="keyna allen" title="Vibe Team Financial Administrator" bio="--}}
{{--<li class='my-2'> Bachelor’s Degree in Dance Performance from Oklahoma City University</li>--}}
{{--<li class='my-2'> Certified in American Ballet Theatre’s National Training Curriculum level Pre-Primary through level 5</li>--}}
{{--<li class='my-2'> YPAD Certified</li>--}}
{{--<li class='my-2'> 2 years teaching ballet and tap at Classen School of Advanced Studies Middle School</li>--}}
{{--<li class='my-2'> Professional Performance Credits: Lyric Theatre OKC, Music Theatre Wichita, Larrwell Productions, Silvertree Productions</li>--}}
{{--<li class='my-2'> Full-time ballet faculty at Oklahoma City University</li>--}}
{{--<li class='my-2'> 9 years at Dance Unlimited - so lucky to be a part of this dance family!</li>--}}
{{--"/>--}}
                <x-instructor modal="lesa-new" image="new-headshots/LESA DETERMAN dance unlimited okc2.jpg" name="Lesa Determan" title="Dance Instructor" bio="
<ul>
<li>Lesa began dancing at the age of three at Applause Studios in Oklahoma City under the direction of Patricia Oplontnik.</li>
<li>She became a member of the competition company at the age of eight and continued competing through high school.</li>
<li>Lesa had the opportunity to study with various professional artists such as Keith Clifton, Rhonda Miller, Greg Russel, and Jeff Amsden.</li>
<li>In 1997, Lesa competed in the Miss Dance of Oklahoma competition, taking 5th place and going on to compete at the Dance Masters of America National Convention in Orlando, FL, taking 2nd runner up in her age division.</li>
<li>After graduating high school in 1998, she went to the University of Central Oklahoma where she was a member of the Kaleidoscope Dancers Company for four years.</li>
<li>During her college career, Lesa toured to various middle schools and high schools performing for children of all ages.</li>
<li>She also performed in Opening Night in Bricktown.</li>
<li>Attended the American College Dance Festival and was selected to perform in the closing Gala.</li>
<li>Lesa graduated with a Bachelor of Business Administration in 2003.</li>
<li>She has taught here at Dance Unlimited PAC for the past 27 years.</li>
<li>She has trained and completed professional development with More than Just Great Dancing, Dance Teacher Web Summer Expo, and Julie Kay Stallcup Intensives.</li>
<li>Lesa is YPAD certified.</li>
</ul>
"/>
                <x-instructor modal="emily-ham" image="new-headshots/EMILY HAM dance unlimited okc6.jpg" name="Emily Ham" title="Dance Instructor" bio="
<li class='my-2'>Emily was born and raised in Edmond, Oklahoma.</li>
<li class='my-2'>Grew up dancing at Dance Unlimited Performing Arts Center. </li>
<li class='my-2'>Pursued and Graduated from The University of Oklahoma, with a BFA in Modern Dance Performance. </li>
<li class='my-2'>Member of the Contemporary Dance Oklahoma Company where she was able to work with and perform work by choreographers such as Carla Maxwell/Jose Limon, Alvin Ailey, Jessica Lang, and Austin Hartel. </li>
<li class='my-2'>Performer with Hartel Dance Group, traveling to the International Fringe Festival</li>
<li class='my-2'>Performer and Original Co Member / Oklahoma City Dance Project</li>
<li class='my-2'>Performer with Hannah Kahn Dance Company in Denver, CO under the artistic direction of Hannah Kahn. </li>
<li class='my-2'>Recent: pursuing her passion for teaching dance, serving the community as a board member of the Oklahoma International Dance Festival, working for Mercy as a physical therapist assistant, and assisting with The Vibe Dance Company at DU. </li>

"/>
                <x-instructor modal="michelle-rambo" image="new-headshots/MICHELLE RAMBO dance unlimited okc19.jpg" name="Michelle Rambo" title="Dance Instructor" bio="
<p>Michelle Rambo travels state to state spreading her energy, knowledge, and love for teaching master classes to everyone who appreciates the art of dance. She is on faculty for the Weitzenhoffer School of Musical Theatre at the University of Oklahoma, serves as Artistic Director over the assistant program for the traveling dance intensive The Dance Effect, and owns M2RDANCE.</p>
<p>Her high-energy teaching has taken her to the American College Dance Association at Southeast Missouri State University, Anderson Indiana University, Oklahoma City University, University of Oklahoma, University of Central Oklahoma, The Dance Effect intensive, 8 Count Studio, and the professional RACE Dance Collective in Oklahoma City. Michelle's teaching also continues with the Oklahoma City professional NBA O'City Crew, fine arts schools in the Texas and Kansas areas, and the professional Dallas Black Dance Theatre Summer Intensive in Dallas, Texas.</p>
<p>Michelle's work has been showcased during the pre-game performance for the Oklahoma City Thunder, The Women That Soar awards show, Disney World in Orlando, Florida, Fabletics, the University of Oklahoma Weitzenhoffer School of Musical Theatre, Southern Plain Productions, the University of Oklahoma Dance Department, and most recently with Lyric Theatre of Oklahoma on Sister Act as assistant choreographer.</p>
<p>Michelle continues to focus on family, teaching, traveling, judging competitions, and living one day at a time.</p>
"/>
{{--                <x-instructor modal="jessica" image="staff-jessica.jpg" name="jessica cajina" title="Dance Instructor" bio=""/>--}}
                <x-instructor modal="lily" image="new-headshots/LILLY HUGHES dance unlimited okc3.jpg" name="Lilly Hughes" title="Vibe Co. Director / Dance Instructor" bio="
<li class='my-2'> Bachelor of Science in Dance Management from Oklahoma City University
</li>
<li class='my-2'> Over 20 years of dance training in tap, ballet, pointe, lyrical, jazz, musical theater, ballroom, and hip hop
</li>
<li class='my-2'> Blue Cobalt Award recipient for Most Promising Sophomore at OCU
</li>
<li class='my-2'> Lead dancer & Line Captains for multiple American Spirit Dance Company productions at OCU
</li>
<li class='my-2'> Director’s Assistant to Chairwoman Jo Rowan at OCU
</li>
<li class='my-2'> Senior Leadership Award recipient from OCU’s Ann Lacy School of Dance
</li>
<li class='my-2'> Former President of Students of Arts Management at OCU
</li>
<li class='my-2'> Faculty Choreographer for MOVE! Dance for the World of Entertainment at OCU
</li>
<li class='my-2'> Master Tap Instructor at Alpha Omega: The Intensive (Destin, FL)
</li>
<li class='my-2'> Stage Manager & Choreographer’s Assistant for Spotlight Dance Cup Nationals
</li>
<li class='my-2'> Former Marketing & Communications Specialist & Pep Director for OCU’s Dance Department
</li>
<li class='my-2'> Choreography was recently nominated for the Industry Dance Awards Best Tap Dance 2025
</li>
<li class='my-2'> Choreography has won multiple & two-time national championships across the nation
</li>
<li class='my-2'> Actively teaches, choreographs across the country, and judges for national dance competitions
</li>
<li class='my-2'> Choreography recently earned a bronze medal at the IDO World Tap Championship in Prague, Czech Republic
</li>
"/>
                <x-instructor modal="cameelah-cook" image="new-headshots/CAMEELAH PENNINGTON COOK dance unlimited okc12.jpg" name="Cameelah Pennington Cook" title="Dance Instructor" bio="
<p>Cameelah Pennington Cook is a native of Oklahoma City, Oklahoma. She is currently the Dance Director at Classen School of Advanced Studies at Northeast High School. She earned her Bachelor of Fine Arts in Modern Dance Performance from the University of Oklahoma in 2011. Cameelah is a graduate of Classen School of Advanced Studies, where she studied as a dance major.</p>
<p>Cameelah has been a member of several professional dance companies including Contemporary Dance Oklahoma, Dayton Contemporary Dance Company, Hartel Dance Group, and R.A.C.E. Dance Collective. She also currently holds a certification in Acrobatic Arts and is a member of the National Dance Education Organization.</p>
<p>Her favorite styles of dance to teach include modern, jazz, and tap, and her favorite style to take is ballet. In her rare spare time, Cameelah loves baking and crafting. She loves spending time adventuring with her husband and daughter. Most of all, she enjoys sharing her love of dance with her students all over the city. She is thankful to be teaching for a thirteenth season at DU!</p>
"/>
                <x-instructor modal="alyssa" image="new-headshots/ALYSSA WILMOT dance unlimited okc10.jpg" name="Alyssa Wilmot" title="Acting Teacher" bio="
<li class='my-2'>Theater Education Student, University of Central Oklahoma</li>
<li class='my-2'>3rd Year Spotlight Acting Teacher</li>
<li class='my-2'>Assistant Director Matilda Summer at the Hall</li>
<li class='my-2'>Director OCAE Summer program</li>
<li class='my-2'>Passionate about teaching children of all ages and thankful for the opportunity to be part of this amazing team</li>
<li class='my-2'>Getting married in the spring! (yay!!)</li>
<li class='my-2'>HUGE Swiftie</li>

"/>
                <x-instructor modal="sophia" image="new-headshots/SOPHIA MANLEY dance unlimited okc17.jpg" name="Sophia Manley" title="Dance Instructor" bio="
<ul>
<li>Originally from the greater Los Angeles area.</li>
<li>Trained in commercial jazz, theater jazz, theater tap, rhythm tap, lyrical, contemporary, latin jazz, ballet, pointe, and hip-hop.</li>
<li>Tremaine Dance Company assistant for five years.</li>
<li>BS in Dance Pedagogy from Oklahoma City University.</li>
<li>Performed with Oklahoma City University's Stars Dance Company and the American Spirit Dance Company.</li>
<li>Current Dance Director at Roosevelt Middle School in Oklahoma City Public Schools, and OKCPS dance teacher for three years.</li>
<li>Ensemble in The Prom with Lyric Theater of Oklahoma.</li>
<li>Justin Bieber Purpose Tour featured dancer in Los Angeles.</li>
</ul>
"/>
                <x-instructor modal="gina" image="new-headshots/GINA FOXHOVEN dance unlimited okc8.jpg" name="Gina Foxhoven" title="Dance Instructor" bio="
<ul>
<li>Born and raised in OKC.</li>
<li>BFA in Dance Performance and Business Administration minor, graduating Magna Cum Laude.</li>
<li>Looking forward to her 3rd year teaching at DU!</li>
<li>Business Owner: GMF, Inc. Real Estate, DSCLOZ, Hank's Restaurant, Big Biang Theory Restaurant, Carletti's Restaurant, and GMF Consulting.</li>
<li>Appointed by the Mayor to serve as Commissioner for the International Building Code Commission.</li>
<li>Credits: MTV Africa, Pussycat Dolls, Warner Brothers, FOX News, DeadCenter, Six Flags, Shen Wei Dance Company, Gallim Dance Company, and ACDF Nationals Champion.</li>
<li>Past Board Positions: Downtown OKC Business Improvement District Board of Directors, West Village Board of Directors, Urban Land Institute Impact Awards Chair, and Plaza District President.</li>
<li>Volunteer at Christ the King Catholic Church.</li>
<li>Constantly booking trips around the world: cave diving, white water rafting through the Swiss Alps, snorkeling between tectonic plates, lowered into a volcano, hiking the largest glacier in Europe, paragliding and skydiving in Switzerland, completing Angel's Landing, and hiking a 1500 BC Mayan ruin.</li>
<li>Standard poodle named Rumor and tiny toy poodle named Clue.</li>
<li>Gina sees no barriers and looks forward to newfound goals while always staying true to her roots and remaining eager to learn from those around her.</li>
</ul>
<p><em>'Whatever you do, work at it with all your heart, as if working for the Lord, not for human masters.' Colossians 3:23</em></p>
"/>
{{--                <x-instructor modal="kelly" image="/staff/KELLY.jpg" name="Kelly Simmons" title="Dance Instructor" bio="--}}
{{--﻿--}}
{{--<li class='my-2'>Graduated from OCU as a Bachelor of Performing Arts in Dance--}}
{{--</li>--}}
{{--<li class='my-2'>Performed with Lyric Theater in various shows for the 2006 and 2007 seasons--}}
{{--</li>--}}
{{--<li class='my-2'>Has been teaching at Dance Unlimited for 4 years (not consecutively)--}}
{{--</li>--}}
{{--<li class='my-2'>Graduated from OU Health Sciences Center as a Doctor of Physical Therapy--}}
{{--</li>--}}
{{--<li class='my-2'>Has worked as a Physical Therapist at Oklahoma Children’s Hospital for 14 years and currently is the Manager of Pediatric Rehabilitation Services--}}
{{--</li>--}}
{{--<li class='my-2'>3 kids at DU: Jaxon (piano), Kadence (dance, Vibe), Jameson (acting, voice, piano)--}}
{{--</li>--}}
{{--"/>--}}
{{--                <x-instructor modal="rachel" image="/staff/RACHEL.jpg" name="Rachel Kundzins" title="Dance Instructor" bio="--}}
{{--<li class='my-2'>Born in Halifax Nova Scotia. </li>--}}
{{--<li class='my-2'>Trained classically with The East Coast Dance Academy, Maritime Conservatory, The Nutmeg Conservatory, and The Alberta School. </li>--}}
{{--<li class='my-2'>Moved to OKC to join the Oklahoma City Ballet’s Second Company and later joined the Company as an apprentice. </li>--}}
{{--<li class='my-2'>She looks forward to continuing to share her experience and love of ballet with all her students this year! </li>--}}

{{--"/>--}}
                <x-instructor modal="hannah-b" image="new-headshots/HANNAH BUCHANAN dance unlimited okc4.jpg" name="Hannah Buchanan" title="Dance Instructor" bio="
<li class='my-2'>BBA in Management Information Systems and Accounting from the University of Oklahoma</li>
<li class='my-2'>Looking forward to her 2nd year teaching Starlette Classes at DU!</li>
<li class='my-2'>Over 10 years as a student at DU</li>
<li class='my-2'>Dance Assistant Teacher at DU / 5 years</li>
<li class='my-2'>DU Admin / 2 years</li>
<li class='my-2'>Elementary School substitute teacher / 5 years</li>
<li class='my-2'>Over 10 years teaching, tutoring, and volunteering with students ages 2-16 </li>
<li class='my-2'>Certified Project Manager</li>

"/>
{{--                <x-instructor modal="heidi" image="faculty-heidi.jpg" name="Heidi Wallace" title="Voice Instructor" bio="Heidi is an Oklahoma native who just relocated from Arkansas where she taught acting, voice, piano, workshops and created classes for Arkansas Art Center Children’s Theatre’s, Conway Institute of Music and Wildwood Park for the Arts. Heidi has over 25 years of experience performing and studying. She attended Oklahoma City University for Musical Theatre. Her favorite recent roles include Bright Star (Alice), Avenue Q (Kate Monster), Life Sucks (Ella), Sweeney Todd (Begger Woman). She enjoys spending time with her husband, Kurt, and two young children Christian and Alice who are all Broadway Fanatics."/>--}}
{{--                <x-instructor modal="jane" image="faculty-jane.jpg" name="Jane Neil" title="Voice and Piano Instructor" bio="--}}

{{--<li class='my-2'>   	BFA in Musical Theater from Oklahoma University--}}
{{--</li>--}}
{{--<li class='my-2'>   	Shows directed: Mulan, Lion King, Willy Wonka, All Shook Up and more!--}}
{{--</li>--}}
{{--<li class='my-2'>   	Brooke Fine arts instructor in Tulsa before DU--}}
{{--</li>--}}
{{--<li class='my-2'>   	Performance credits: Laurey in “Oklahoma,” Gabriella in “High School Musical,” Mary Jane in “Big River,” and more!--}}
{{--</li>--}}
{{--<li class='my-2'>   	DU instructor for 10 years--}}
{{--</li>--}}
{{--"/>--}}
{{--                <x-instructor modal="nicole" image="faculty-nicole.jpg" name="nicole vaughn" title="Customer Care team & Dance Instructor" bio=""/>--}}
{{--                <x-instructor modal="hannah-m" image="faculty-hannah.jpg" name="hannah malinoski" title="Customer Care team" bio=""/>--}}
                <x-instructor modal="jane-k" image="new-headshots/JANE KINGREY dance unlimited okc22.jpg" name="Jane Kingrey" title="Dance Instructor" bio="
<li class='my-2'>       DU and Vibe alumni
</li>
<li class='my-2'>       Former member and choreographer for Edmond North Pom
</li>
<li class='my-2'>       Junior dance pedagogy major at Oklahoma City University
</li>
<li class='my-2'>       Performance credits: Star Dance Company, OCU Pep Dancers
</li>
<li class='my-2'>       DU instructor and Vibe faculty member of 2 years- Dance Unlimited is her second home and she feels so lucky to be a part of this wonderful family!
</li>
"/>
{{--                <x-instructor modal="destyni" image="faculty-destyni.jpg" name="Destyni Williams" title="Customer Care team" bio=""/>--}}
                <x-instructor modal="haley" image="new-headshots/HALEY KINNARD dance unlimited okc11.jpg" name="Haley Kinnard" title="Private Voice Instructor, Acting Teacher" bio="
<p>Haley Kinnard is a graduate of the University of Central Oklahoma where she studied musical theatre and received a Bachelor of Music. When she is not working with her voice and acting students, you can find her performing in musicals around the metro! She has always had a passion for sharing her love of music with others and is grateful to be starting another year of teaching with Spotlight!</p>
"/>
{{--                <x-instructor modal="megan" image="/staff/MEGAN.jpg" name="Megan Murray" title="Dance Instructor" bio="--}}
{{--<li class='my-2'>Megan began tap dancing at 8 years old under the directorship of Prof. Robert L. Reed. </li>--}}
{{--<li class='my-2'>She has travelled all over the country learning from other tap master’s and performing in showcases in New York, Detroit, and St. Louis. </li>--}}
{{--<li class='my-2'>She has performed the choreography of greats such as Jason Samuels-Smith, Gregg Russell, Cathie Nicholas (Nicholas Brothers), Bill Irwin, and won awards such as Most Innovative Tap Teacher and the Barebones Trailblazer Award.</li>--}}
{{--<li class='my-2'>Megan grew up acting in film & television and playing music in addition to dance and graduated from Berklee College of Music with a degree in Interdisciplinary Music Studies.</li>--}}
{{--<li class='my-2'>It is one of her many goals to keep intensive tap studies alive by teaching, choreographing and performing tap, and to honor the legacy of her late mentor, The Professor.</li>--}}

{{--"/>--}}
                <x-instructor modal="hannah-mil" image="new-headshots/HANNAH MILNER dance unlimited okc15.jpg" name="Hannah Milner" title="Dance Instructor" bio="
<ul>
<li>Degree in Bachelor of Science in American Dance Pedagogy from Oklahoma City University.</li>
<li>2 years as an administrative assistant at the Ann Lacy School of American Dance and Entertainment at OCU.</li>
<li>5 years at Harding Fine Arts Academy as the Director of Dance and 4 years as Fine Arts Department Head.</li>
<li>Head Coach of the Harding Fine Arts award-winning competitive dance team.</li>
<li>14 years of studio teaching experience.</li>
<li>2 years on the O City Crew and 2 years as Thunder Gameday Emcee.</li>
<li>Accolades: HFAA Teacher of the Year for the 2024-2025 school year, award-winning choreographer, and Dance Makers Hip Hop scholarship winner.</li>
<li>Years at DU: 4.</li>
<li>This year, I am excited to help dancers grow in their technique and confidence, foster their love of dance, and build a strong community within the classroom. I cannot wait to meet everyone and get to work!</li>
</ul>
"/>
{{--                <x-instructor modal="lacey" image="headshot-placeholder.jpg" name="Lacey Fowler" title="Dance Instructor" bio="--}}
{{--<li class='my-2'>Senior dance performance major at Oklahoma City University</li>--}}
{{--<li class='my-2'>Performance credits: Lyric Theatre of Oklahoma, Star Dance Company, OCU Pep Dancers</li>--}}
{{--<li class='my-2'>Dance instructor at Performing Arts Centre in St. Charles, MO and Angie’s Studio of Dance and Tumbling in Wentzville, MO</li>--}}
{{--<li class='my-2'>Former member of Performing Arts Centre’s competition team and St. Dominic’s Varsity Dance Team </li>--}}

{{--"/>--}}
{{--                <x-instructor modal="hope" image="/staff/HOPE.jpg" name="Hope Thornton" title="Dance Instructor" bio="--}}
{{--<li class='my-2'>Former performer with Flyte Asia Dance Company </li>--}}
{{--<li class='my-2'>Former dance instructor and choreographer for Kings Gate Private Christian School </li>--}}
{{--<li class='my-2'>Over 20 years of dance experience</li>--}}
{{--<li class='my-2'>10 years of teaching experience </li>--}}
{{--<li class='my-2'>Youth pastor at All Saints Community Church</li>--}}
{{--<li class='my-2'>Excited to start her second year as DU faculty</li>--}}

{{--"/>--}}
                <x-instructor modal="blakely" image="new-headshots/BLAKELY ARLEDGE dance unlimited okc5.jpg" name="Blakely Arledge" title="Customer Care Team/ Dance Instructor" bio="
<ul>
<li>Former professional NBA dancer for the Oklahoma City Thunder for 2 seasons.</li>
<li>Competitive dancer for 15+ years.</li>
<li>Former member and part-time choreographer for Deer Creek Pom.</li>
<li>Acrobatic Arts certified.</li>
<li>Current teacher and company member at RACE Dance Collective.</li>
<li>Current teacher at 8 Count Dance Studio.</li>
<li>Going into her 2nd year teaching at DU! She loves the atmosphere and is excited for another season of watching these incredible kids grow here.</li>
<li>Excited to greet you all at the front desk! Come talk to her if you have any questions.</li>
<li>Loves her dog Rocky and cat Ritzy.</li>
</ul>
"/>
{{--                <x-instructor modal="brigitte" image="/staff/BRIGITTE.jpg" name="Brigitte Goulart" title="Customer Care Team/ Dance Instructor" bio="--}}
{{--<li class='my-2'>Graduate from Oklahoma City University with a BFA in Acting</li>--}}
{{--<li class='my-2'>4x RACE Dance Company Member</li>--}}
{{--<li class='my-2'>RACE Dance Collective Instructor / 4 years (Tap, Jazz, Musical Theatre, Heels)</li>--}}
{{--<li class='my-2'>Local Choreographer & Director (Classen SAS @ NE, Oklahoma Children's Theatre, etc.)</li>--}}
{{--<li class='my-2'>Performance Credits: Oklahoma Children's Theatre, Oklahoma Repertory Theatre, OKC Improv, The Polar Express Train Rides, etc.)</li>--}}
{{--<li class='my-2'>Excited for my 6th year teaching, directing, choreographing, and inspiring! </li>--}}

{{--"/>--}}
{{--                <x-instructor modal="morgan" image="/staff/MORGAN.jpg" name="Morgan Tillman" title="Dance Instructor / Teaching Assistant" bio="--}}

{{--<li class='my-2'>          	From Norman OK!--}}
{{--</li>--}}
{{--<li class='my-2'>          	Competitive dancer for 10 years--}}
{{--</li>--}}
{{--<li class='my-2'>  	Featured dancer in professional pop music video.--}}
{{--</li>--}}
{{--<li class='my-2'>  	Competitive Pom Team member and captain--}}
{{--</li>--}}
{{--<li class='my-2'>  	Strong dancer trained in commercial jazz, theater jazz,	tap, lyrical, contemporary, latin jazz, ballet, pointe, hip-hop and--}}
{{--</li>--}}
{{--<li class='my-2'>          	spent several years cultivating string leadership skills through dedicated study and hands on experience--}}
{{--</li>--}}
{{--<li class='my-2'>  	Licensed Cosmetologist, and mom to a little girl!--}}
{{--</li>--}}
{{--<li class='my-2'>          	I can’t wait to begin the year with everyone! I am dedicated to helping students build confidence, refine technique and discover their love for dance!--}}
{{--</li>--}}
{{--"/>--}}
                <x-instructor modal="harlie-leep" image="new-headshots/HARLIE LEEP dance unlimited okc14.jpg" name="Harlie Leep" title="Dance Instructor" bio="<p>Harlie Leep has danced for 17 years, including 7 years of competitive dance. She trained at Classen School of Advanced Studies as a dance major, studying a variety of styles and disciplines. She currently serves as the Head Cross Country and Track Coach at Classen SAS while pursuing a degree in Sports Management-Performance with a multidisciplinary minor focused on Kinesiology, Allied Health, Life Science, and Physical and Rehabilitation Medicine.</p>"/>
                <x-instructor modal="indya-king" image="new-headshots/INDYA KING dance unlimited okc18.jpg" name="Indya King" title="Dance Instructor" bio="<ul><li>Originally from Tampa, Florida.</li><li>Trained in jazz, tap, ballet, contemporary, modern, hip hop, musical theatre, liturgical, and African-style dance.</li><li>2nd year with DU!</li><li>Currently a professional dancer with OKC Thunder's O'City Crew.</li><li>BS in Entertainment Business from Oklahoma City University.</li><li>Former Student Director and Choreographer for the Oklahoma City University Pep Dancers.</li><li>Recently served as the Director of Student Life and Student Life Team Member for Southeastern Summer Theatre Institute.</li><li>Experience with company management, stage management, event planning, and lighting design.</li><li>Loves pouring into the young generation of dancers and strives to one day own a dance studio!</li></ul>"/>
                <x-instructor modal="kathryn-zello" image="new-headshots/KATHRYN ZELLO dance unlimited okc23.jpg" name="Kathryn Zello" title="Dance Instructor" bio="<p>Bio coming soon!</p>"/>
                <x-instructor modal="kyra-birkner" image="new-headshots/KYRA BIRKNER dance unlimited okc7.jpg" name="Kyra Birkner" title="Dance Instructor" bio="<p>Kyra Michele Birkner is a Dance Performance major at Oklahoma City University. Originally from North Carolina, she trained at University of North Carolina School of the Arts and has experience in a variety of dance styles. Guided by the values of curiosity, honesty, confidence, and kindness, Kyra is passionate about sharing her love of dance and creating a positive, supportive environment where students can build confidence, develop their skills, and enjoy movement.</p>"/>
                <x-instructor modal="livia-hartman" image="new-headshots/LIVIA HARTMAN dance unlimited okc16.jpg" name="Livia Hartman" title="Dance Instructor" bio="<p>Bio coming soon!</p>"/>
                <x-instructor modal="maddie-mason" image="new-headshots/MADDIE MASON dance unlimited okc13.jpg" name="Maddie Mason" title="Dance Instructor" bio="<p>Bio coming soon!</p>"/>
                <x-instructor modal="makayla-fontaine" image="new-headshots/MAKAYLA FONTAINE dance unlimited okc20.jpg" name="Makayla Fontaine" title="Dance Instructor" bio="<p>Originally from Edmond, Oklahoma, Makayla developed her passion for dance at Dance Unlimited Performing Arts Center under the direction of Amy Reynolds Reed and through involvement in various community theatre productions throughout the Oklahoma City area. She further refined her tap technique while studying with Lynn Cramer at the University of Oklahoma and was honored to attend the invitation-only Radio City Rockettes Summer Conservatory for two consecutive summers. Her training continued in New York City with Exactitude Dance and Precision Dance Company.</p><p>Makayla's professional performance credits include Lyric Theatre of Oklahoma's Dreamgirls and West Side Story, as well as Oklahoma Philharmonic's Ragtime. Favorite community and regional theatre credits include The Color Purple, Hairspray, and 9 to 5.</p><p>After graduating from the University of Oklahoma with a BA in Psychology, Makayla spent several years living in New York City and later Houston before recently returning home to Oklahoma. In addition to holding an MBA from Liberty University and working full-time in fundraising for MD Anderson Cancer Center, Makayla enjoys traveling, discovering new restaurants, and spending quality time with family and friends.</p><p>Whether in the studio, on stage, or in the classroom, Makayla cherishes every opportunity to dance, teach, and share her love of ballet, jazz, musical theatre, and tap with students of all ages.</p>"/>
                <x-instructor modal="mckenzie-morgan" image="new-headshots/MCKENZIE MORGAN dance unlimited okc9.jpg" name="McKenzie Morgan" title="Acting Teacher" bio="<p>McKenzie Morgan is thrilled to be back home teaching at Spotlight and DU! She grew up in Edmond and is a proud DU, VIBE, and Spotlight alum. McKenzie recently graduated from Viterbo Conservatory for the Performing Arts with a BFA in Musical Theatre and minors in Music, Dance, and Arts Administration. She has directed and choreographed at Viterbo and regional theatres and is passionate about helping young performers grow their skills, confidence, and love for theatre!</p>"/>
                <x-instructor modal="rachel-dukes" image="new-headshots/RACHEL DUKES dance unlimited okc21.jpg" name="Rachel Dukes" title="Dance Instructor" bio="<p>Bio coming soon!</p>"/>
{{--                <x-instructor modal="" image="headshot-placeholder.jpg" name="" title="" bio=""/>--}}

            </div>
        </div>
    </div>

@endsection
