
@extends('layouts.mainLayout')
@section('meta-tag')
@section('content')
    <section class="formBackImg">
        <section class="get-in-touch">
            <div class="container">
                <div class="get-in-touch-small">
                    <h1 class="title">Feedback</h1>
                    <p style="margin-bottom: 25px;">Please provide your valuable feedbback</p>
                    <form class="contact-form feedback-form">
                        <div class="row">
                            <div class="col-12">
                                <input type="text" placeholder="Name" class="form-control">
                            </div>

                        </div>
                        <div class="row mb-25">
                            <div class="col-md-6">
                                <input type="text" placeholder="Phone" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <input type="email" placeholder="Email" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submitDiv">
                                <button class="btn submitBtn">Submit</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </section>
    </section>



@endsection
@endsection