<footer class="blueSection">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footerCommonBox">
                   <div class="footer-logo">
                       <img src="image/Vinayana-white-Logo.png" alt="">
                   </div>
                    <div class="enquiryLinks pb-20">
                        <a href="tel:+919999127633"><i class="fa fa-phone"></i>+91 9999127633</a>
                        <a href="mailto:info@vinayana.in"><i class="fa fa-envelope"></i>info@vinayana.in</a>
                    </div>


                    <div class="footer-social">
                        <ul>
                            <li >
                                <a  href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="plC">
                                <a  href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class=".pxC">
                                <a  href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </li>

                        </ul>
                    </div>
                    
                    
                </div>
            </div>
            <div class="col-md-3">
                <div class="footerCommonBox">
                    <h3>University</h3>
                    <ul>
                        <li ><a href="/noida-international-university" >NIU</a></li>
                        <li ><a href="/glocal-university" >Glocal University</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footerCommonBox">
                    <h3>About Vinayana</h3>
                    <ul>
                        <li><a href="about-us">Who we are</a></li>
                        <li><a href="terms-and-conditions">Terms and Conditions</a></li>
                        <li><a href="privacy-policy">Privacy Policy</a></li>
{{--                        <li><a href="programs">Programs</a></li>--}}
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footerCommonBox">
                    <h3>
                        Customer Services
                        </h3>
                    <ul>

                        <li><a href="feedback">Feedback</a></li>
                        <li><a href="contact-us">Contact Us</a></li>
                    </ul>
                    
                </div>
            </div>
        </div>

    </div>

    <div class="copyright">
        <p>Copyright &copy; 2019 Vinayana All Rights Reserved </p>
    </div>

    <section class="Enquiry2019">
        <div class="form2019 mobileEnquiry">
            <form id="enquire__2019"  method="post" >
                <input type="hidden" value="{{csrf_token()}}" name="token1">
                <div class="inner-addon left-addon">
                    <i class="fa fa-user"></i>
                    <input type="text" name="name" id="e-name" class="form-control" placeholder="Name" />
                </div>

                <div class="inner-addon left-addon">
                    <i class="fa fa-envelope"></i>
                    <input type="email" id="e-email" name="email" class="form-control" placeholder="Email" />
                </div>


                <div class="inner-addon left-addon">
                    <i class="fa fa-phone"></i>
                    <input type="text" id="e-phone" name="phone" class="form-control" placeholder="Phone" />
                </div>
                <div class="inner-addon left-addon">
                    <i class="fa fa-comments-o"></i>
                    <textarea  name="" id="e-messages" rows="4" placeholder="Message" class="form-control"></textarea>

                </div>

                <input type="submit" value="Submit" class="form-control">

            </form>

            <div>

        </div>








        </div>
        <div class="showFormTag">
            <div class="w-35">
                <a href="javascript:void(0);" class="EnquiryShow"><img src="image/Enquiry_icon.png" alt=""></a>
            </div>
        </div>
    </section>


    <div class="d-iB inCall">
        <div class="whatsappCall">
            <div class="d-iB">
                <a href="javascript:void(0);" class="whatsappButton">
                    <img src="image/whatsapp icon.png" width="35" class="d-inline" alt="">

                </a>

            </div>

        </div>

        <a href="tel:+919999127633">+91-9999127633</a>

    </div>
    <!-- call  -->


    <div class="d-iB inCall2">
        <div class="callingCall">
            <div class="w-35 d-iB">
                <a href="javascript:void(0);" class="callingButton">
                    <img src="image/Call icon.png" alt="">
                </a>
            </div>

        </div>
        <a href="tel:+919999127633">+91-9999127633</a>

    </div>

</footer>


<style>


</style>
@include('common.enquiry')