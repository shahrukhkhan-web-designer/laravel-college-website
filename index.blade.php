@extends('layouts.mainLayout')
@section('meta-tag')
    @endsection
@section('content')


    <section class="showcase">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="image/newImage/banner1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="image/newImage/banner2.jpg" alt="Second slide">
                </div>
{{--                <div class="carousel-item">--}}
{{--                    <img class="d-block w-100" src="image/newImage/girlSmiling.jpg" alt="Third slide">--}}
{{--                </div>--}}
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
                <h1>Lorem Ipsum is simply dummy</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, sunt autem. Sit reiciendis quam earum quos, aliquam repellendus error itaque possimus, odit quibusdam doloribus quo ea nam quidem commodi esse!</p>
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
                    <div class="offerBoxes" >
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
                        <p class="cgcP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque obcaecati, tenetur iusto dignissimos veritatis a nobis praesentium, id quam dolores nemo odit alias repellendus voluptate.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis distinctio, animi asperiores, id qui, expedita minima assumenda ipsum iste ea non placeat. Natus aliquid, itaque ad totam odio necessitatibus aspernatur alias tenetur sequi eaque amet, accusantium unde reiciendis consequatur quasi iste, error officiis laudantium magni quis accusamus debitis! Facilis distinctio doloribus excepturi similique hic nostrum. Cum vitae quisquam numquam ab.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="future">
        <div class="container">
            <div class="futureContent">
                <h2><span class="yellow">Choose</span> Your Future</h2>
                <p class="cgcP">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit beatae quasi reiciendis deserunt corrupti minima soluta ipsam non ad impedit. Dolor a animi libero nisi aliquid ad nemo architecto maxime.</p>
            </div>
            <div class="row">
                <table>
                    <tr>
                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Agriculture-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Agriculture</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Art.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Arts & Humanities</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Commers-Banking-Icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Commerce & Banking</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Dental-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Dental</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Design-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Design</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Education.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Education</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Engineering-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Engineering</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Hotel-Management-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Hotel Management</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Information-Technology-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Information Technology</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Law.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Law</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Management-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Management</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Mass-Communication.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Mass Communication</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Medical.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Medical</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Nursing-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Nursing</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Paramedical.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Paramedical</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                    </tr>


                    <tr>
                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Performing-Art.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Performing Arts</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Pharmacy.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Pharmacy</h3>
                                    <p>6052 colleges</p>
                                </div>
                            </div>
                        </td>

                        <td>
                            <div class="futureBox">
                                <div class="futureIcon">
                                    <img src="image/Icons/Sciences-icon.png" alt="">
                                </div>
                                <div class="futureboxContent">
                                    <h3>Sciences</h3>
                                    <p>6052 colleges</p>
                                </div>
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
                        <div class="universityImage">
                            <a href="/university-details"><img src="image/newImage/collegue.jpg" alt=""></a>
                        </div>
                    <div class="universityFooter">
                        <a href="" class="applyUni">Apply Now</a>
                        <a href="" class="viewUni">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="universityBox">
                    <div class="universityImage">
                        <div class="universityImage">
                            <a href="/university-details"><img src="image/newImage/collegue.jpg" alt=""></a>
                        </div>
                    </div>
                    <div class="universityFooter">
                        <a href="" data-toggle="modal" data-target="#exampleModalCenter" class="applyUni">Apply Now</a>
                        <a href="/university-details" class="viewUni">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection