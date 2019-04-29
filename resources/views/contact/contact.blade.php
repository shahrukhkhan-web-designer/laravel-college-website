@extends('layouts.mainLayout')
@section('meta-tag')
    @endsection
@section('content')

    <section class="chatBoxes">
        <h1 class="title">Get in touch</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="chatBox">
                        <h2>Get Support</h2>
                        <div class="chatIcon">
                            <img src="image/SupportIcon.png" alt="">
                        </div>
                        <div class="chatContent">
                            <h3>Call Us</h3>
                            <a href="tel:+91999127633">+91-9999127633</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="chatBox">
                        <h2>Mail </h2>
                        <div class="chatIcon">
                            <img src="image/mailIcon.png" alt="">
                        </div>
                        <div class="chatContent">
                            <h3>Mail Us</h3>
                            <a href="mailto:info@vinayana.in">info@vinayana.in</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="chatBox">
                        <h2>Whatsapp</h2>
                        <div class="chatIcon">
                            <img src="image/ChatIcon.png" alt="">
                        </div>
                        <div class="chatContent">
                            <h3>Whatsapp</h3>
                            <a href="https://wa.me/+919999127633">+91-9999127633</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    @endsection
