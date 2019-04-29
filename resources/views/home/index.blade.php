@extends('layouts.mainLayout')
@section('meta-tag')
    @endsection
@section('content')


    <section class="showcase">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
{{--                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
            </ol>
            <div class="carousel-inner">
{{--                <div class="carousel-item active">--}}
{{--                    <img class="d-block w-100" src="image/newImage/banner2.jpg" alt="First slide">--}}
{{--                </div>--}}
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/slider2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/slider3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="showcaseContent">
            <div class="showcaseContentInside">
                <h1>Explore and begin for growth to settle</h1>
                <p>We educate, enhance, and uplift an affection of learning, cooperation, and concern for skilled students and talent.</p>
            </div>
        </div>
    </section>
    <!-- Fixed item enquiry form fixed -->


    <section class="offeringCourses" >
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="offerBoxes" >
                        <div class="row">
                            <div class="col-4">
                                <img src="image/book-icon.png" alt="">
                            </div>
                            <div class="col-8">
                                <h3>12,000</h3>
                                <p>Online Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" >
                    <div class="offerBoxes" >
                        <div class="row">
                            <div class="col-4">
                                <img src="image/expert-icon.png" alt="">
                            </div>
                            <div class="col-8">
                                <h3>3,500</h3>
                                <p>Expert Instruction</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="offerBoxes block" >
                        <div class="row">
                            <div class="col-4">
                                <img src="image/think-icon.png" alt="">
                            </div>
                            <div class="col-8">
                                <h3>Unlimited</h3>
                                <p>Online Courses</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="offerBoxes br-md-0" >
                        <div class="row">
                            <div class="col-4">
                                <img src="image/learning-icon.png" alt="">
                            </div>
                            <div class="col-8">
                                <h3>Learn</h3>
                                <p>From Anywhere</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- thecareer gurdian -->

    <section class="careerGuardian">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="careerGuardianContent">


                        <h2><span class="yellow">Welcome To</span> <strong>Vinayana</strong>&nbsp;<small>the career guardian</small></h2>
{{--                        <p class="cgcP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque obcaecati, tenetur iusto dignissimos veritatis a nobis praesentium, id quam dolores nemo odit alias repellendus voluptate.</p>--}}
                        <p>Considering the most favorable type of college, one needs a lot of effort to choose the correct guidance from an expert counselor. Before visiting to any college a proper guidance is mandatory for each level of student to grow their career in various fields. Vinayana, a counseling zone serves the best outcome to those who require higher level of growth in future. Vinayana, a joint effort of probably the most learned advisers and specialists plans to help and guide the teachers, educators just as the schools (as an association) through their experience which will indeed help you to stabilize in your life</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="future">
        <div class="container">
            <div class="futureContent">
                <h2><span class="yellow">Choose</span> Your Future</h2>
                <p class="cgcP">Our activated, hands-on approach to learning shows students how to put their knowledge to work in the world full of prime courses for better and stabled future.</p>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Agriculture-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Agriculture</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Art.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Arts & Humanities</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Commers-Banking-Icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Commerce & Banking</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Dental-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Dental</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Design-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Design</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Education.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Education</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Engineering-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Engineering</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Hotel-Management-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Hotel Management</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Information-Technology-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Information Technology</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Law.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Law</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Management-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Management</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Mass-Communication.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Mass Communication</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Medical.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Medical</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Nursing-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Nursing</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Paramedical.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Paramedical</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Performing-Art.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Performing Arts</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Pharmacy.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Pharmacy</h3>

                                </div>
                                </a>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <a href="javascript:void(0)">
                                <div class="futureIcon">
                                    <img src="image/Icons/Sciences-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Sciences</h3>

                                </div>
                                </a>
                            </div>
                        </td>





                    </tr>



                </table>
            </div>
        </div>
    </section>

    <section class="universities">
        <div class="container">


        <div class="row">
            <div class="col-md-6">
                <div class="universityBox">
                    <a href="/noida-international-university">
                        <div class="universityImage">
                            <div class="uniImgOver">

                            </div>
                           <img src="image/uni1.jpg" alt="">
                            <div class="universityLogo">
                                <img src="image/niuDesignLogo.png" alt="">
                                <h3>Noida Internation University <br>
                                    <small><i class="fa fa-map-marker"></i>  Plot 1, Yamuna Expy, Sector 17A, Uttar Pradesh 203201</small>
                                </h3>

                            </div>
                        </div>
                    </a>
                    <div class="universityFooter">
                        <div class="w-50">
                            <a href="javascript:void(0)"  data-target="#myModal" data-toggle="modal" class="applyUni">Apply Now</a>
                        </div>
                        <div class="w-50">
                            <a href="/noida-international-university" class="viewUni">View Details</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="universityBox">
                    <a href="/glocal-university">
                    <div class="universityImage">
                        <div class="universityImage">
                            <div class="uniImgOver">

                            </div>
                            <img src="image/uni2.jpg" alt="">
                            <div class="universityLogo">
                                <img src="image/gloculLogoDesign.png" alt="">
                                <h3>Glocal University <br>
                                    <small><i class="fa fa-map-marker"></i> Delhi-Yamunotri Marg, SH 57, Mirzapur Pole, Uttar Pradesh 247121</small>
                                </h3>

                            </div>
                        </div>
                    </div>
                    </a>
                    <div class="universityFooter">
                        <div class="w-50">
                            <a href="javascript:void(0)"  data-target="#myModal" data-toggle="modal" class="applyUni">Apply Now</a>
                        </div>
                       <div class="w-50">
                           <a href="/glocal-university" class="viewUni">View Details</a>
                       </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection