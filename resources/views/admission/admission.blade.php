@extends('layouts.mainLayout')
@section('meta-tag')
    @section('content')
       <section class="formBackImg">
           <section class="get-in-touch">
               <div class="container">
                   <div class="get-in-touch-small">
                       <h1 class="title">Admission Form</h1>
                       <p style="margin-bottom: 25px;">Welcome to our school's Admission Center. Please use this form to apply for your child's admission to our school. We need complete and accurate information about the student, so make sure you fill out all fields. School Admission Forms are processed within 48 hours. You will receive an email confirmation when we process your application.</p>
                       <form class="contact-form ">
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
                           <div class="row mb-25">
                               <div class="col-md-6">
                                   <select name="" id="" class="form-control">
                                       <option value="">Qualification</option>
                                       <option value="">High School</option>
                                       <option value="">Intermediate</option>
                                       <option value="">Diploma</option>
                                       <option value="">Bachelor</option>


                                   </select>
                               </div>
                               <div class="col-md-6">

                                   <select name="" id="" class="form-control">
                                       <option value="">Select Courses</option>
                                       <option value="">BBA</option>
                                       <option value="">BCA</option>
                                       <option value="">BCOM</option>


                                   </select>

                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12">
                                   <textarea name="" id="" cols="30" rows="4" class="form-control" placeholder="Address"></textarea>
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