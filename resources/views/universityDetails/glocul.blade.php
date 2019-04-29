@extends('layouts.mainLayout')
@section('meta-tag')
@endsection

@section('content')

    <section class="glocalBanner">
        <div class="overlay"></div>
        <div class="container">


            <div class="niuBannerContent">
                <img src="image/gloculLogoDesign.png" alt=""> <h1>Glocal University
                    <p><i class="fa fa-map-marker"></i> Delhi-Yamunotri Marg, SH 57, Mirzapur Pole, Uttar Pradesh 247121</p>
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
                                        <h3>ABOUT Glocal University</h3>
                                        <img src="image/slider3.jpg" alt="">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title"></h4>
                                        <p>At the Glocal University, we strongly believe in harnessing the power of knowledge by combining learning with extensive application-based study and professional ethics, thus maximizing one’s overall potential and nurturing a winning mentality in each of our students.</p>
                                        <p>We believe in a radical approach towards education with in-depth study and international teaching techniques that encourage a practical application of knowledge along with a code of ethics, hence developing one’s inner self and providing the perfect edge.</p>
                                        <ul>
                                            <li>Eight major schools and 55+ UG/postgraduate/professional courses to offer</li>
                                            <li>Highly esteemed and qualified faculty with years of rich industry experience</li>
                                            <li>Sprawling 350-acre campus and world-class infrastructure</li>
                                            <li>State-of-the-art facilities, fully furnished hostels and recreation centres</li>
                                            <li>Recognized by UGC under Section 22 of UGC Act 1956 and established by the Glocal University Act, 2011 (UP Act no. 2 of 2012) (as passed by the Uttar Pradesh legislature)</li>
                                        </ul>

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

                                    <h2 class="coursesH2">Glocal School of Technology</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech  </h3>
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
                                                    <h3>B.Tech/B.Tech </h3>
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
                                                    <h3>B.Tech/B.Tech </h3>
                                                    <h4>CSE with Data Science </h4>
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
                                                    <h3>B.Tech/B.Tech  </h3>
                                                    <h4>CSE Big Data Analysis </h4>
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
                                                    <h3>B.Tech/B.Tech </h3>
                                                    <h4>Petroleum Engineering </h4>
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
                                                    <h3>B.Tech </h3>
                                                    <h4>CSE with Azure cloud administration </h4>
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
                                                    <h3>B.Tech </h3>
                                                    <h4>CSE with Internet of things </h4>
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
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Tech </h3>
                                                    <h4>Mechanical Manufacturing Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr>2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.Tech</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Tech </h3>
                                                    <h4>Civil Structural Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.Tech</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Tech </h3>
                                                    <h4>Computer Science </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.Tech</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Tech </h3>
                                                    <h4>Civil Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.Tech</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Tech </h3>
                                                    <h4>Mechanical Thermal Enginering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% B.Tech</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            <h2 class="coursesH2">Department of Computer science</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BCA </h3>
                                                    <h4>Bachelor Computer Application </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>MCA </h3>
                                                    <h4>Master of Computer Application </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BCA</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="coursesH2">Glocal School of Polytechnic</h2>
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma Automobile Engineering</h3>
                                                    <h4>Engineering </h4>
                                                   <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                   </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma Mechanical Engineering</h3>
                                                    <h4>Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma Civil Engineering</h3>
                                                    <h4>Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma Electronics & Communication Engineering</h3>
                                                    <h4>Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma Electrical Engineering</h3>
                                                    <h4>Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma in Mining Enginering</h3>
                                                    <h4>Engineering </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <h2 class="coursesH2">Glocal School of Business & Commerce</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>BBA</h3>
                                                    <h4>Finance/Marketing/HR </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
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
                                                    <h3>MBA</h3>
                                                    <h4>Finance/Marketing/ HR </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in BBA</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Com</h3>
                                                    <h4>Bachelor of Commerce </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2</abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <h2 class="coursesH2">Glocal Law School</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.A.LL.B /BBA LL.B</h3>
                                                    <h4>Bachelor of Commerce </h4>
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
                                                    <h3>Doctorate</h3>
                                                    <h4>Law, Political Science </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3-6 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> As per university </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.Phil</h3>
                                                    <h4>Law, Political Science </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 1 Year</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>


                                    <h2 class="coursesH2">Glocal School of Pharmacy</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.Pharm</h3>
                                                    <h4>Bachelor of Pharmacy </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 4 Years</abbr>
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
                                                    <h3>D.Pharm</h3>
                                                    <h4>Diploma of Pharmacy </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Doctorate</h3>
                                                    <h4>Phamacutics, Pharmacogonocy, Pharmachemistry </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 3-6 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <h2 class="coursesH2">Paramedical  Courses</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>B.sc</h3>
                                                    <h4>Cardiac Care Technology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Anesthesia Technology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Radiology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Oeration Theatre Technology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Biotechnology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Microbiology </h4>
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
                                                    <h3>B.sc</h3>
                                                    <h4>Medical Lab Technology </h4>
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
                                                    <h3>M.sc</h3>
                                                    <h4>Medical Lab Technology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.sc</h3>
                                                    <h4>Bioechnology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.sc</h3>
                                                    <h4>Microbiology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.sc</h3>
                                                    <h4>BioChemistry </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.sc</h3>
                                                    <h4>Zoology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>M.sc</h3>
                                                    <h4>Botany </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in B.sc </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="courseDescriptionBox">
                                                <a href="">
                                                    <h3>Diploma</h3>
                                                    <h4>Emergency & Taruma Care Technology </h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
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
                                                    <h3>Diploma</h3>
                                                    <h4>Dialysis Technician</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
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
                                                    <h3>Diploma</h3>
                                                    <h4>Caridology Technician</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
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
                                                    <h3>Diploma</h3>
                                                    <h4>C T Scan</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
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
                                                    <h3>Diploma</h3>
                                                    <h4>Optrometry</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
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
                                                    <h3>Diploma</h3>
                                                    <h4>O.T. Technician</h4>
                                                    <nav id="ulNav">
                                                        <abbr>Duration : </abbr>
                                                        <abbr> 2 Years</abbr>
                                                    </nav>
                                                    <nav id="ulNav">
                                                        <abbr>Eligibility : </abbr>
                                                        <abbr class="f-14"> min. 50% in 10+2 </abbr>
                                                    </nav>
                                                </a>
                                            </div>
                                        </div>






                                    </div>

                                </div>
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
                                                    <img src="image/glocal-hostel.jpg" alt="">
                                                </div>
                                                <div class="hostelBox">
                                                    <table>
                                                        <tr>
                                                            <th>Types of Accommodation</th>
                                                            <th>Ac</th>
                                                            <th>Non- Ac</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2 seater (fooding included)</td>
                                                            <td>1,40000</td>
                                                            <td>N/A</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2 seater (fooding not included)</td>
                                                            <td>N/A</td>
                                                            <td>55,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4 seater (fooding not included)</td>
                                                            <td>N/A</td>
                                                            <td>40,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>6 seater (fooding not included)</td>
                                                            <td>N/A</td>
                                                            <td>35,000</td>
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
                        <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="gallery">
                            <div class="row">


                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g1.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g1.jpg" class="zoom img-fluid "  alt="">

                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g2.jpg"  class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g2.jpg" class="zoom img-fluid"  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g3.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g3.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g11.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g11.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g5.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g5.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g6.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g6.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g7.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g7.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>

                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g8.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g8.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g9.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g9.jpg" class="zoom img-fluid "  alt="">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                    <a href="image/glocal/g10.jpg" class="fancybox" rel="ligthbox">
                                        <img  src="image/glocal/g10.jpg" class="zoom img-fluid "  alt="">
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
