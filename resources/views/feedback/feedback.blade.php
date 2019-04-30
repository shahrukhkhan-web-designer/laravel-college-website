
@extends('layouts.mainLayout')
@section('meta-tag')
@section('content')
    <section class="formBackImg">
        <section class="get-in-touch">
            <div class="container">
                <div class="get-in-touch-small">
                    <h1 class="title">Feedback</h1>
                    <p style="margin-bottom: 25px;">Please provide your valuable feedbback</p>
                    <form id="feedback-form" class="contact-form feedback-form">
{{--                        <input type="hidden" value="{{csrf_token()}}" name="_token">--}}
                        <div class="row">
                            <div class="col-12">
                                <input type="text" name="name" id="f_name" placeholder="Name" class="form-control">

                            </div>

                        </div>
                        <div class="row mb-25">
                            <div class="col-md-6 mb-10">
                                <input type="text" name="phone" id="f_phone" placeholder="Phone" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" id="f_email" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <textarea name="" id=f_message"" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submitDiv">
                                <button id="f_submit" class="btn submitBtn">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </section>
    </section>



@endsection
@endsection