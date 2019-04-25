<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function aboutUs() {
        return view('about.about');
    }
    public function contactUs() {
        return view( 'contact.contact');
    }
    public function scholarShip(){
        return view('scholarships.scholarships');
    }

    public function noidaInternationUniversity() {
        return view('universityDetails.niu');
    }
    public function gloculUniversity() {
        return view('universityDetails.glocul');
    }
    public function admission() {
        return view('admission.admission');
    }
    public function programs() {
        return view('programs.programs');
    }

    public function whoWeAre() {
        return view('whoweare.whoweare');
    }
    public function termsConditions() {
        return view('termsconditions.termsandcondition');
    }
    public function privacy() {
    return view('privacy.privacy');
}
    public function feedback() {
        return view('feedback.feedback');
    }
}
