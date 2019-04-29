@extends('layouts.mainLayout')
@section('meta-tag')
    @section('content')
       <section class="formBackImg">
           <section class="get-in-touch">
               <div class="container">
                   <div class="get-in-touch-small">
                       <h1 class="title">Admission Form</h1>
                       <p style="margin-bottom: 25px;">Welcome to our school's Admission Center. Please use this form to apply for your child's admission to our school. We need complete and accurate information about the student, so make sure you fill out all fields. School Admission Forms are processed within 48 hours. You will receive an email confirmation when we process your application.</p>
                       <form class="contact-form " method="post">
                           <input type="hidden" value="{{csrf_token()}}" name="_token">
                           <div class="row">
                               <div class="col-12">
                                   <input type="text" id="ad-name" placeholder="Name" name="name" value="{{old('name')}}" class="form-control">
                                   <span class="invalidField">
@if($errors->has('name'))
                                    {{$errors->first('name')}}
                                    @endif
                                   </span>

                               </div>

                           </div>
                           <div class="row mb-25">
                               <div class="col-md-6">
                                   <input type="text" id="ad-phone" placeholder="Phone" name="phone" value="{{old('phone')}}" class="form-control">
                                   <span class="invalidField">
@if($errors->has('phone'))
                                       {{$errors->first('phone')}}
                                   @endif
                                   </span>
</div>


                               <div class="col-md-6">
                                   <input type="text" id="ad-email" placeholder="Email" name="email" value="{{old('email')}}" class="form-control">
                                   <span class="invalidField">
@if($errors->has('email'))
                                       {{$errors->first('email')}}
                                   @endif
                                   </span>
</div>
                           </div>
                           <div class="row mb-25">
                               <div class="col-md-6">
                                   <select name="qualification" id="ad-qualification" class="form-control">
                                       <option value="">Select Qualification</option>
                                       <option value="High School" @if(old('qualification')=='High School') selected @endif>High School</option>
                                       <option value="Intermediate" @if(old('qualification')=='Intermediate') selected @endif>Intermediate</option>
                                       <option value="Diploma" @if(old('qualification')=='Diploma') selected @endif>Diploma</option>
                                       <option value="Bachelor" @if(old('qualification')=='Bachelor') selected @endif>Bachelor</option>


                                   </select>
                                   <span class="invalidField">
                                   @if($errors->has('qualification'))
                                       {{$errors->first('qualification')}}
                                   @endif
                                   </span>
                               </div>
                               <div class="col-md-6">

                                   <select name="course" id="ad-courses" class="form-control">
                                       <option value="">Select Courses</option>
                                       <option value="BBA" @if(old('qualification')=='BBA') selected @endif>BBA</option>
                                       <option value="BCA" @if(old('qualification')=='BCA') selected @endif>BCA</option>
                                       <option value="BCOM" @if(old('qualification')=='BCOM') selected @endif>BCOM</option>


                                   </select>
<span class="invalidField">
                                   @if($errors->has('course'))
                                       {{$errors->first('course')}}
                                   @endif
                                   </span>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12">
                                   <textarea name="messages" id="ad-message" cols="30" rows="4"  class="form-control" placeholder="Message">{{old('messages')}}</textarea>
                               </div>
                               <span class="invalidField">
                               @if($errors->has('messages'))
                                   {{$errors->first('messages')}}
                               @endif
                               </span>
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