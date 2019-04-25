@extends('layouts.mainLayout')
@section('meta-tag')
@endsection

@section('content')

    <section class="niuBanner">
        <div class="overlay"></div>
        <div class="container">


        <div class="niuBannerContent">
            <img src="image/niuDesignLogo.png" alt=""> <h1>Noida Internation University
            <p><i class="fa fa-map-marker"></i> Plot 1, Yamuna Expy, Sector 17A, Uttar Pradesh 203201</p>
            </h1>
        </div>
        </div>
    </section>

    <section class="universityPage">

        <article class="tabContentFull">
            <div class="container">

                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="info-tab" data-toggle="pill" href="#info" role="toolbar" aria-controls="info" aria-selected="true">Info</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="pill" href="#courses-fee" role="tab" aria-controls="courses-fee" aria-selected="false">Courses </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="hostel-tab" data-toggle="pill" href="#hostel" role="tab" aria-controls="hostel" aria-selected="false">Hostel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="scholarship-tab" data-toggle="pill" href="#scholarship" role="tab" aria-controls="scholarship" aria-selected="false">Scholarship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="gallery-tab" data-toggle="pill" href="#gallery" role="tab" aria-controls="gallery" aria-selected="false">Gallery</a>
                    </li>
                </ul>
            </div>
        </article>

        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="info" role="tabpanel" aria-labelledby="info-tab">

                            <section class="infoTab">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>ABOUT Noida International University</h3>
                                        <img src="image/slider2.jpg" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>

                                        <div class="smallBoxes">
                                            <h4>Overview</h4>
                                            <p>Noida International University is a UGC(University Grants Commision) recognized university and is sponsored by the Maruti Educational Trust. It was fiven the status of a university by the
                                            Goverment if Uttar Pradesh vide Notification no 1108(2)/ LXXIX-VI-1-10-1(ka) 23-10 Lucknow, dated October 12, 2010, Act no.27 of 2010. The 75 acres
                                                campus of Noida International University is strategically located near the ultra-modern Yamuna Expressway Educational
                                                Hub, Gautam Budh Nagar.
                                            </p>
                                        </div>


                                        <div class="smallBoxes">
                                            <h4>Our Beliefs</h4>
                                            <p>At NIU, we believe in creating leaders by imparting the requisite knowledge and expertise to shape the 21st century. To do
                                            that, we invest in  state-of-the-art tools necessary for successful and useful innovations in the most conducive environment
                                                . For example we create an atmosphere of entrepreneurship and risk management that allows our students to be globally competitive.
                                            </p>
                                        </div>

                                        <div class="smallBoxes">
                                            <h4>Vision</h4>
                                            <p>The motto of Noida International University is to shape pre-eminent leaders for the 21st century
                                            through a research driven education system, with the promise to deliver our natnion with its fines scholars
                                            gifted with disciplined minds, who shall spread their wings and soar into the storm of challenges and odds, fearlessly.</p>
                                        </div>


                                    </div>
                                    <div class="card-footer text-muted">
                                        <div class="Supportquery">
                                            <h3>Have a query, kindly reach out?</h3>
                                            <a href="mailto:info@vinayana.in">info@vinayana.in</a>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">About text</div> -->
                        <div class="tab-pane fade" id="courses-fee" role="tabpanel" aria-labelledby="courses-fee">
                            <section class="courses">

                                <div class="card p-3">
                                    <h2 class="coursesH2">School of Engineering And Technology</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Computer Science </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Electrical </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Electrical & Electronics </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Electronic & Communication </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Mechanical </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Civil </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Information Technology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Electronic Instrument & Control </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Automobile </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech (Hons) </h3>
                                                    <h4>Biotechnology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCB</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech-IBM:- Cloud Computing </h3>
                                                    <h4>B.Tech - IBM </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/ Lateral Entry - 2nd year </h3>
                                                    <h4>B.Tech - IBM </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% diploma engg / B.sc</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

{{--                                    End Row--}}
                                    <h2 class="coursesH2">School Of Jurnalism & Mass Communication</h2>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Journalism & Mass Communication </h3>
                                                    <h4>BA </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50%  10+2</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Journalism & Mass Communication </h3>
                                                    <h4>MA </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in graduation relevant Subjects</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <h2 class="coursesH2">School of Sciences</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc General </h3>
                                                    <h4>Physics/Chemistry/Maths </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc (Hons) </h3>
                                                    <h4>Computer, Microbiology, PCM </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM?PCB</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc (Hons) </h3>
                                                    <h4>Agriculture </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCB</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Sc </h3>
                                                    <h4>PCM,Computer,Microbiology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Graduation</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BCA </h3>
                                                    <h4>Computer Application </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 /PCM</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MCA </h3>
                                                    <h4>Civil </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Graduations</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MCA Lateral Entry </h3>
                                                    <h4>Civil </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BCA</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
{{--                                    End Row--}}

{{--                                    STart row--}}
                                    <h2 class="coursesH2">School of Fine Arts</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BFA</h3>
                                                    <h4>Painting, Applied Arts </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 Any stram</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MFA </h3>
                                                    <h4>Painting, Applied Arts </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BFA</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
{{--                                    End Row--}}
{{--                                    School of Liberal Arts--}}
                                    <h2 class="coursesH2">School of Liberal Arts</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.A/B.A(Hons)</h3>
                                                    <h4>English,History,Psychology,Political, Public Admin. International Relations</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MA </h3>
                                                    <h4>English,History,Psychology,Political, Public Admin. International Relations</h4>

                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Graduation</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

{{--                                    End Row--}}


{{--                    Scholl of law--}}

                                    <h2 class="coursesH2">School of Law & Legal Affairs</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BBA LLb </h3>
                                                    <h4></h4>

                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 5 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BBA LLb (Hons) </h3>
                                                    <h4></h4>

                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 5 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>LLB </h3>
                                                    <h4></h4>

                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Graduation</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>LLM (Full time Program) </h3>
                                                    <h4></h4>

                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in LLB or equivalent</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>


                                    </div>


{{--                                    School of Architecture--}}
                                    <h2 class="coursesH2">School of Law & Legal Affairs</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Arch</h3>
                                                    <h4>Bachelor of Architecture</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 5 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 / PCM </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BID</h3>
                                                    <h4>Bachelor of Interior Designing</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    {{--                                    End architecture--}}

{{--                                    School of Education--}}

                                    <h2 class="coursesH2">School of Law & Legal Affairs</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Ed</h3>
                                                    <h4>Bachelor of Education</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in graduation </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.A + B.Ed </h3>
                                                    <h4>Integrated Program (Proposed)</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MA</h3>
                                                    <h4>Education</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Bachelor's  </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                    </div>

{{--                                    End school of education--}}

{{--                                    Scholl of Business Management--}}

                                    <h2 class="coursesH2">School of Business Management</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MBA<small>(Dual Specialization)</small></h3>
                                                    <h4>Marketing, finance, HR,IT,Banking & finance,..</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in graduation </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BBA / BBA-Security </h3>
                                                    <h4>Security Management</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Com</h3>
                                                    <h4>Master of Commerce</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in Bachelor's  </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Com</h3>
                                                    <h4>Bachelor of Commerce</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/commerce </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BBA + MBA </h3>
                                                    <h4>Integrated </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BA</h3>
                                                    <h4>Economics</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/Economics </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma</h3>
                                                    <h4>Financial, Marketing, Business Entrepreneurship, Business</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MA </h3>
                                                    <h4>Economics</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BA(economics) </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>

                                    </div>

{{--                                    End sbm--}}

{{--                                    School Nursing & Health--}}
                                    <h2 class="coursesH2">School of Nursing & Health  Sciences</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>GNM </h3>
                                                    <h4>General Nursing & Midwifery</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>ANM </h3>
                                                    <h4>Auxiliary Nursing & Midwifery</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BPT </h3>
                                                    <h4>Bachelor in Physiotherapy</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BMLT </h3>
                                                    <h4>Bachelor in Medical Lab Technician</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc </h3>
                                                    <h4>Ot Technique + diploma in Clinical Nurse</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3.5 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Sc </h3>
                                                    <h4>Optometry/Renal Dialsis/Radiology</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc </h3>
                                                    <h4>Allied Health Science/public health/sc/OTT</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB</abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma </h3>
                                                    <h4>OTT/CT/Blood/X-Ray</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Year</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2/PCB </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma </h3>
                                                    <h4>Ambulance Technician/Critical care/ICU</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Year</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MPH </h3>
                                                    <h4>Master of public health</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BA(economics) </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma in Clinical Nurse Assistant </h3>
                                                    <h4>First Aid & Emergency Care</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Year</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10<sup>th</sup>/ANM/GNM/B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma in Clinical Nurse Assistant </h3>
                                                    <h4>Home Nursing, family welfare, child health</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Year</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
{{--End --}}

                                    <h2 class="coursesH2">Center For Research Studies</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Ph.D </h3>
                                                    <h4>Master with Relevant subjects</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> min. 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50%  in masters  </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Phill </h3>
                                                    <h4>All Streams</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in masters </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                            </section>
                        </div>
{{--                        --}}
                        <div class="tab-pane fade" id="scholarship" role="tabpanel" aria-labelledby="scholarship">
                            <section class="scholarshipTab">
                                <section class="scholarship">
                                    <div class="container">
                                        <h2>Scholarships on Offer</h2>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="scholarshipBox">
                                                    <h3 class="pb-20">Scholarship For PG Courses</h3>
                                                    <table>
                                                        <tr>
                                                            <th>Scholarship %</th>
                                                            <th>Score (Boys/Girls)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>15%</td>
                                                            <td>70%-85%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30%</td>
                                                            <td>86%-95%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100%</td>
                                                            <td>96% and Above</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="scholarshipBox">
                                                    <h3 class="pb-20">Scholarship for UG Courses</h3>
                                                    <table>
                                                        <tr>
                                                            <th>Scholarship %</th>
                                                            <th>Score (Boys/Girls)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>15%</td>
                                                            <td>70%-85%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30%</td>
                                                            <td>86%-95%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100%</td>
                                                            <td>96% and Above</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="scholarshipBox">
                                                    <h3>Scholarship Under Sports Quota</h3>
                                                    <table>
                                                        <tr>
                                                            <th>Scholarship %</th>
                                                            <th>Score (Boys/Girls)</th>
                                                        </tr>
                                                        <tr>
                                                            <td>15%</td>
                                                            <td>70%-85%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>30%</td>
                                                            <td>86%-95%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>100%</td>
                                                            <td>96% and Above</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <article class="otherScholarships">
                                            <h2>Other Scholarships Offered</h2>
                                            <ul>
                                                <li> <span class="fa fa-caret-right"></span><p> Son / Daughter or Grandson / Granddaughter of Freedom Fighters-20% concession in Tuition Fee.</p></li>
                                                <li><span class="fa fa-caret-right"></span> <p> Son / Daughter of Armed / Para-Military Forces / State Police-20% concession in Tuition Fee.</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p> Students having more that 50% Physical impaired-20% concession in Tution Fee fir full course.</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p class="iss">Son / Daughter / Spouse of University Employee-20% concession in Tuition Fee, till the staff is in service for 1st year only.</p></li>

                                                <li> <span class="fa fa-caret-right"></span><p>Staff Pursuing higher studies-20% concession in Tuition Fee, till the staff is in service for 1st year only</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p> Scholarship Schemes are not applicable for 1 year Diploma & Short term Programs and Research Programs.</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p>Scholarship is applicable only on Tuition Fees of First Year.</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p class="iss"> Sibling Scholarship (for blood relations only)-20% concession in Tuition Fee ( T & c apply) applicable only for one candidate.</p></li>
                                                <li> <span class="fa fa-caret-right"></span><p> Students (with 60% or above) Pursing higher studies-20% of Tuition Fee for 1st year only.</p></li>
                                            </ul>
                                        </article>
                                    </div>
                                </section>




                            </section>
                        </div>
                        <div class="tab-pane fade" id="hostel" role="tabpanel" aria-labelledby="hostel">
                            <section class="hostelSection">
                                <div class="card">
                                    <div class="card-header">
                                        <h3>College Hostel</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="hostelLeft">
                                                    <div class="hostelImage">
                                                        <img src="image/niu-hostel.jpg" alt="">
                                                    </div>
                                                    <div class="hostelBox">
                                                        <table>
                                                            <tr>
                                                                <th>Types of Accommodation</th>
                                                                <th>Ac</th>
                                                                <th>Non- Ac</th>
                                                            </tr>
                                                            <tr>
                                                                <td>Double Seater</td>
                                                                <td>1,25000</td>
                                                                <td>95,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Triple Seater</td>
                                                                <td>1,05000</td>
                                                                <td>90,000</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Quadruple Seater</td>
                                                                <td>95,000</td>
                                                                <td>85,000</td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="hostelFacility">
                                                    <ul>
                                                        <li>The hostel infrastructure and facilities are really very good.</li>
                                                        <li>Easily affordable rooms fitted to everyone's pocket</li>
                                                        <li>Facilities provided are also very good.2-3 students can live in one room.</li>
                                                        <li> 24*7 Electric Backup</li>
                                                        <li>Food facilities are also good.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="card-footer">
                                        <div class="hostelFacility">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <div class="hostelFacilityIcon">
                                                            <img src="decor.jpg" alt="">
                                                            <h4>Best Decor
                                                            </h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hostelFacilityIcon">
                                                            <img src="pocket.jpg" alt="">
                                                            <h4>Pockets Friendly</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hostelFacilityIcon">
                                                            <img src="hostelLiving.jpg" alt="">
                                                            <h4>Living Room Good</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hostelFacilityIcon">
                                                            <img src="backup.jpg" alt="">
                                                            <h4>Electric Backup</h4>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="hostelFacilityIcon">
                                                            <img src="goodfood.jpg" alt="">
                                                            <h4>Good Food</h4>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery">

                            <div class="row">


                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/1.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/1.jpg" class="zoom img-fluid "  alt="">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/2.jpeg"  class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/2.jpeg" class="zoom img-fluid"  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/3.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/3.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/4.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/4.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/5.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/5.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/6.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/6.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/7.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/7.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/8.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/8.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/9.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/9.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/niu-Gallery/10.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/niu-Gallery/10.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>




                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="applyDiv">
                        <a href="javascript:void(0)"  data-target="#myModal" data-toggle="modal" class="applyNow">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
        @endsection
