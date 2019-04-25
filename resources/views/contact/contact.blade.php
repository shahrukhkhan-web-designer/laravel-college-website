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
                            <a href="tel:+919999127629">+91-9999127629</a>
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
                            <a href="https://wa.me/+919999127629">+91-9999127629</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

{{--<section class="get-in-touch">--}}
{{--    <div class="container">--}}
{{--    <h1 class="title">Get in touch</h1>--}}
{{--    <form class="contact-form ">--}}
{{--        <div class="row">--}}
{{--        <div class="form-field col-md-6 x-50">--}}
{{--            <input id="name" class="input-text js-input" type="text" required>--}}
{{--            <label class="label" for="name">Name</label>--}}
{{--        </div>--}}
{{--        <div class="form-field col-md-6 x-50">--}}
{{--            <input id="email" class="input-text js-input" type="phone" required>--}}
{{--            <label class="label" for="email">Phone</label>--}}
{{--        </div>--}}

{{--        <div class="form-field col-md-12 x-50">--}}
{{--            <input id="email" class="input-text js-input" type="email" required>--}}
{{--            <label class="label" for="email">Email</label>--}}
{{--        </div>--}}
{{--        <div class="form-field col-md-12 x-100">--}}
{{--            <input id="message" class="input-text js-input" type="text" required>--}}
{{--            <label class="label" for="message">Message</label>--}}
{{--        </div>--}}
{{--        <div class="form-field col x-100 align-center">--}}
{{--            <input class="submit-btn" type="submit" value="Submit">--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--    </div>--}}
{{--</section>--}}

    @endsection
