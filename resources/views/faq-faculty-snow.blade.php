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
                <x-instructor modal="amy-reed" image="/staff/AMY.jpg" name="Amy Reynolds-Reed" title="Owner/ Artistic Director/ Instructor" bio="
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
                <x-instructor modal="jonathan-reed" image="/staff/JONATHAN.jpg" name="Jonathan Beck Reed" title="Owner/ Spotlight Acting Director" bio="
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


                <x-instructor modal="chelsea" image="/staff/CHELSEA.jpg" name="chelsea jones" title="Faculty Management/ Lead instructor" bio="
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
                <x-instructor modal="lesa" image="/staff/LESA.jpg" name="lesa determan" title="Dance Instructor" bio=""/>
                <x-instructor modal="emily-ham" image="/staff/EMILY.jpg" name="emily ham" title="Dance Instructor" bio="
<li class='my-2'>Emily was born and raised in Edmond, Oklahoma.</li>
<li class='my-2'>Grew up dancing at Dance Unlimited Performing Arts Center. </li>
<li class='my-2'>Pursued and Graduated from The University of Oklahoma, with a BFA in Modern Dance Performance. </li>
<li class='my-2'>Member of the Contemporary Dance Oklahoma Company where she was able to work with and perform work by choreographers such as Carla Maxwell/Jose Limon, Alvin Ailey, Jessica Lang, and Austin Hartel. </li>
<li class='my-2'>Performer with Hartel Dance Group, traveling to the International Fringe Festival</li>
<li class='my-2'>Performer and Original Co Member / Oklahoma City Dance Project</li>
<li class='my-2'>Performer with Hannah Kahn Dance Company in Denver, CO under the artistic direction of Hannah Kahn. </li>
<li class='my-2'>Recent: pursuing her passion for teaching dance, serving the community as a board member of the Oklahoma International Dance Festival, working for Mercy as a physical therapist assistant, and assisting with The Vibe Dance Company at DU. </li>

"/>
                <x-instructor modal="michelle-rambo" image="/staff/MICHELLE-RAMBO.jpg" name="michelle rambo" title="Dance Instructor" bio="
<li class='my-2'> BFA from the University of Central Oklahoma
</li>
<li class='my-2'> Returning for her 8 plus season with Dance Unlimited
</li>
<li class='my-2'> 20 plus years of experience teaching dance
</li>
<li class='my-2'> Dance Instructor and compeGGve judge for the traveling intensive The Dance Eﬀect
</li>
<li class='my-2'> ArGsGc Director over the Protégé Assistant Program for The Dance Eﬀect
</li>
<li class='my-2'> Member of the American College Dance AssociaGon
</li>
<li class='my-2'> Traveling master class instructor
</li>
<li class='my-2'> Entrepreneur owner of M2RDANCE
</li>
<li class='my-2'> Faculty for Weitzenhoﬀer School of Musical Theatre, University of Oklahoma
</li>
<li class='my-2'> Has worked with: ACDA, Professional Race Dance CollecGve, Professional Dallas Black
Dance Theatre, Oklahoma City NBA O’ City Crew, University of Central Oklahoma, OU
Musical Theatre, OU Dance, Oklahoma City University, FableGcs, Southern Plain
ProducGons and the Women that soar awards show to name a few.</li>
"/>
{{--                <x-instructor modal="jessica" image="staff-jessica.jpg" name="jessica cajina" title="Dance Instructor" bio=""/>--}}
                <x-instructor modal="lily" image="/staff/LILLY.jpg" name="lillian ball" title="Vibe Co. Director / Dance Instructor" bio="
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
                <x-instructor modal="cameelah-cook" image="/staff/CAMEELAH.jpg" name="Cameelah Cook" title="Dance Instructor" bio="
<li class='my-2'>   	Graduated with BFA in Modern Dance Performance from the University of Oklahoma
</li>
<li class='my-2'>   	This will be my 13th season with Dance Unlimited
</li>
<li class='my-2'>   	Serves as Dance Director at Classen School of Advanced Studies at Northeast
</li>
<li class='my-2'>   	Has been a member of professional dance companies such as: Dayton Contemporary Dance Company, Hartel Dance Group, and RACE Dance Collective
</li>
<li class='my-2'>   	Certified by Acrobatic Arts
</li>
<li class='my-2'>   	Mom of one awesome 3 year old, Violet!
</li>
<li class='my-2'>   	Currently training as a student in flamenco dance
</li>
<li class='my-2'>   	Loves teaching all kinds of dance, but ballet has my whole heart!
</li>
<li class='my-2'>   	I’m extremely grateful to get to share my love of dance with others everyday!
</li>
"/>
                <x-instructor modal="alyssa" image="/staff/ALYSSA.jpg" name="Alyssa Killingsworth" title="Acting Teacher" bio="
<li class='my-2'>Theater Education Student, University of Central Oklahoma</li>
<li class='my-2'>3rd Year Spotlight Acting Teacher</li>
<li class='my-2'>Assistant Director Matilda Summer at the Hall</li>
<li class='my-2'>Director OCAE Summer program</li>
<li class='my-2'>Passionate about teaching children of all ages and thankful for the opportunity to be part of this amazing team</li>
<li class='my-2'>Getting married in the spring! (yay!!)</li>
<li class='my-2'>HUGE Swiftie</li>

"/>
                <x-instructor modal="sophia" image="/staff/SOPHIA.jpg" name="Sophia Dollenmeyer" title="Dance Instructor" bio="
<li class='my-2'>   originally from the greater Los Angeles area</li>
<li class='my-2'>   	trained in commercial jazz, theater jazz, theater tap, rhythm tap, lyrical, contemporary, latin jazz, ballet, pointe and hip-hop</li>
<li class='my-2'>   	Tremaine Dance Company assistant for five years</li>
<li class='my-2'>   	BS in Dance Pedagogy from Oklahoma City University</li>
<li class='my-2'>   	Performed with the Oklahoma City University's Stars Dance Company and the American Spirit Dance Company.</li>
<li class='my-2'>   	Oklahoma City Public School Dance Teacher</li>
<li class='my-2'>   	Ensemble in The Prom with Lyric Theater of Oklahoma</li>
<li class='my-2'>   	Justin Bieber Purpose Tour featured dancer in Los Angeles  </li>
"/>
                <x-instructor modal="gina" image="faculty-gina.JPG" name="Gina Marie Foxhoven" title="Dance Instructor" bio="
<li class='my-2'>Born & Raised in OKC</li>
<li class='my-2'>BFA in Dance Performance and Business Administration Minor - Graduated Magna Cum Laude</li>
<li class='my-2'>Looking forward to her 2nd year teaching at DU!</li>
<li class='my-2'>Business Owner: Livingston Properties, Hank's Restaurant, Big Biang Theory Restaurant, Carletti's Restaurant, GMF Consulting, HHH Investments LLC</li>
<li class='my-2'>Appointed by the Mayor to serve as Commissioner for the International Building Code Commission</li>
<li class='my-2'>Credits: MTV Africa, Pussycat Dolls, Warner Brothers, FOX News, DeadCenter, Six Flags, Shen Wei Dance Company, Gallim Dance Company, ACDF Nationals Champion</li>
<li class='my-2'>Board Member: Downtown OKC Business Improvement District Board of Directors, West Village Board of Directors (Past President: Urban Land Institute, Plaza District, West Village)</li>
<li class='my-2'>Avid volunteer at Christ the King Catholic Church</li>
<li class='my-2'>Currently learning to play the cello and speak Italian</li>
<li class='my-2'>Constantly booking trips around the world: cave diving, white water rafting through the Swiss Alps, lowered into a volcano, hiking the largest glacier in Europe, paragliding & skydiving in Switzerland, hiking a 1500 BC Mayan Ruin</li>
<li class='my-2'>Standard poodle named Rumor</li>
<li class='my-2'>Gina sees no barriers and looks forward to newfound goals - while always staying true to her roots and remaining eager to learn from those around her.</li>
<li class='my-2'>'Whatever you do, work at it with all your heart, as if working for the Lord, not for human masters.' Colossians 3:23</li>

                "/>
                <x-instructor modal="kelly" image="/staff/KELLY.jpg" name="Kelly Simmons" title="Dance Instructor" bio=""/>
                <x-instructor modal="rachel" image="/staff/RACHEL.jpg" name="Rachel Kundzins" title="Dance Instructor" bio="
<li class='my-2'>Born in Halifax Nova Scotia. </li>
<li class='my-2'>Trained classically with The East Coast Dance Academy, Maritime Conservatory, The Nutmeg Conservatory, and The Alberta School. </li>
<li class='my-2'>Moved to OKC to join the Oklahoma City Ballet’s Second Company and later joined the Company as an apprentice. </li>
<li class='my-2'>She looks forward to continuing to share her experience and love of ballet with all her students this year! </li>

"/>
                <x-instructor modal="hannah-b" image="headshot-placeholder.jpg" name="Hannah Buchanan" title="Dance Instructor" bio="
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
                <x-instructor modal="jane" image="faculty-jane.jpg" name="Jane Neil" title="Voice and Piano Instructor" bio="

<li class='my-2'>   	BFA in Musical Theater from Oklahoma University
</li>
<li class='my-2'>   	Shows directed: Mulan, Lion King, Willy Wonka, All Shook Up and more!
</li>
<li class='my-2'>   	Brooke Fine arts instructor in Tulsa before DU
</li>
<li class='my-2'>   	Performance credits: Laurey in “Oklahoma,” Gabriella in “High School Musical,” Mary Jane in “Big River,” and more!
</li>
<li class='my-2'>   	DU instructor for 10 years
</li>
"/>
{{--                <x-instructor modal="nicole" image="faculty-nicole.jpg" name="nicole vaughn" title="Customer Care team & Dance Instructor" bio=""/>--}}
{{--                <x-instructor modal="hannah-m" image="faculty-hannah.jpg" name="hannah malinoski" title="Customer Care team" bio=""/>--}}
                <x-instructor modal="jane-k" image="headshot-placeholder.jpg" name="Jane Kingrey" title="Dance Insturctor" bio="
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
                <x-instructor modal="haley" image="headshot-placeholder.jpg" name="Haley Kinnard" title="Private Voice Instructor, Acting Teacher" bio="
<li class='my-2'>       Graduate of University of Central Oklahoma with a BM in Musical Theatre
</li>
<li class='my-2'>       Looking forward to starting her 4th year as a private voice teacher and her 7th year as a Director, Choreographer and Music Director of Children’s theatre productions
</li>
<li class='my-2'>       Trinity School/Substitute Teacher
</li>
<li class='my-2'>       Just finished up her summer of performing as a River City Player in Tahlequah, Oklahoma
</li>
<li class='my-2'>       BIG Kelly Clarkson fan
</li>
<li class='my-2'>       Passionate about finding a balance between teaching and continuing her own career as a performer
</li>
"/>
                <x-instructor modal="megan" image="/staff/MEGAN.jpg" name="Megan Murray" title="Dance Instructor" bio="
<li class='my-2'>Megan began tap dancing at 8 years old under the directorship of Prof. Robert L. Reed. </li>
<li class='my-2'>She has travelled all over the country learning from other tap master’s and performing in showcases in New York, Detroit, and St. Louis. </li>
<li class='my-2'>She has performed the choreography of greats such as Jason Samuels-Smith, Gregg Russell, Cathie Nicholas (Nicholas Brothers), Bill Irwin, and won awards such as Most Innovative Tap Teacher and the Barebones Trailblazer Award.</li>
<li class='my-2'>Megan grew up acting in film & television and playing music in addition to dance and graduated from Berklee College of Music with a degree in Interdisciplinary Music Studies.</li>
<li class='my-2'>It is one of her many goals to keep intensive tap studies alive by teaching, choreographing and performing tap, and to honor the legacy of her late mentor, The Professor.</li>

"/>
                <x-instructor modal="hannah-mil" image="/staff/HANNAH-MILNER.jpg" name="Hannah Milner" title="Dance Instructor" bio="
<li class='my-2'>Degree in Bachelor of Science in American Dance Pedagogy from Oklahoma City University</li>
<li class='my-2'>2 years as an administrative assistant at the Ann Lacy School of American Dance and Entertainment at OCU</li>
<li class='my-2'>4 years at Harding Fine Arts Academy as the Director of Dance and 3 years as Fine Arts Department Head</li>
<li class='my-2'>13 years of studio teaching experience</li>
<li class='my-2'>2 years on the O City Crew</li>
<li class='my-2'>Accolades: HFAA Teacher of the Year for the 2024-2025 school year, award winning choreographer, Dance Makers Hip Hop scholarship winner</li>
<li class='my-2'>Years at DU: 3</li>
<li class='my-2'>This year, I am excited to help dancers grow in their technique, foster their love of dance and build a strong community within the classroom. I cannot wait to meet everyone!</li>

"/>
                <x-instructor modal="lacey" image="headshot-placeholder.jpg" name="Lacey Fowler" title="Dance Instructor" bio="
<li class='my-2'>Senior dance performance major at Oklahoma City University</li>
<li class='my-2'>Performance credits: Lyric Theatre of Oklahoma, Star Dance Company, OCU Pep Dancers</li>
<li class='my-2'>Dance instructor at Performing Arts Centre in St. Charles, MO and Angie’s Studio of Dance and Tumbling in Wentzville, MO</li>
<li class='my-2'>Former member of Performing Arts Centre’s competition team and St. Dominic’s Varsity Dance Team </li>

"/>
                <x-instructor modal="hope" image="/staff/HOPE.jpg" name="Hope Thornton" title="Dance Instructor" bio="
<li class='my-2'>Former performer with Flyte Asia Dance Company </li>
<li class='my-2'>Former dance instructor and choreographer for Kings Gate Private Christian School </li>
<li class='my-2'>Over 20 years of dance experience</li>
<li class='my-2'>10 years of teaching experience </li>
<li class='my-2'>Youth pastor at All Saints Community Church</li>
<li class='my-2'>Excited to start her second year as DU faculty</li>

"/>
                <x-instructor modal="blakely" image="/staff/BLAKELY.jpg" name="Blakely Arledge" title="Customer Care Team/ Dance Instructor" bio="
<li class='my-2'>Former Professional NBA dancer for the Oklahoma City Thunder - 2 seasons</li>
<li class='my-2'>Competitive dancer for 15 + years</li>
<li class='my-2'>Former member / part time choreographer for Deer Creek pom</li>
<li class='my-2'>Acrobatic Arts certified teacher</li>
<li class='my-2'>University of Central Oklahoma Associates in Kinesiology</li>
<li class='my-2'>Arledge Law Firm secretary - 2 years</li>
<li class='my-2'>Newly started teaching at DU and loves the atmosphere already!! Excited to teach these incredible kids and grow here!</li>
<li class='my-2'>Excited to greet you all at the front desk!</li>
<li class='my-2'>I love my dog and cat</li>

"/>
                <x-instructor modal="brigitte" image="/staff/BRIGITTE.jpg" name="Brigitte Goulart" title="Customer Care Team/ Dance Instructor" bio="
<li class='my-2'>Graduate from Oklahoma City University with a BFA in Acting</li>
<li class='my-2'>4x RACE Dance Company Member</li>
<li class='my-2'>RACE Dance Collective Instructor / 4 years (Tap, Jazz, Musical Theatre, Heels)</li>
<li class='my-2'>Local Choreographer & Director (Classen SAS @ NE, Oklahoma Children's Theatre, etc.)</li>
<li class='my-2'>Performance Credits: Oklahoma Children's Theatre, Oklahoma Repertory Theatre, OKC Improv, The Polar Express Train Rides, etc.)</li>
<li class='my-2'>Excited for my 6th year teaching, directing, choreographing, and inspiring! </li>

"/>
                <x-instructor modal="morgan" image="/staff/MORGAN.jpg" name="Morgan Tillman" title="Dance Instructor / Teaching Assistant" bio="

<li class='my-2'>          	From Norman OK!
</li>
<li class='my-2'>          	Competitive dancer for 10 years
</li>
<li class='my-2'>  	Featured dancer in professional pop music video.
</li>
<li class='my-2'>  	Competitive Pom Team member and captain
</li>
<li class='my-2'>  	Strong dancer trained in commercial jazz, theater jazz,	tap, lyrical, contemporary, latin jazz, ballet, pointe, hip-hop and
</li>
<li class='my-2'>          	spent several years cultivating string leadership skills through dedicated study and hands on experience
</li>
<li class='my-2'>  	Licensed Cosmetologist, and mom to a little girl!
</li>
<li class='my-2'>          	I can’t wait to begin the year with everyone! I am dedicated to helping students build confidence, refine technique and discover their love for dance!
</li>
"/>
{{--                <x-instructor modal="" image="headshot-placeholder.jpg" name="" title="" bio=""/>--}}

            </div>
        </div>
    </div>

@endsection
