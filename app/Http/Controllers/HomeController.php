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



    public function agriculture() {
        return view('pages.agriculture');
    }
    public function artshumanities() {
        return view('pages.artshumanities');
    }
    public function commercebanking() {
        return view('pages.commercebanking');
    }
    public function dental() {
        return view('pages.dental');
    }
    public function design() {
        return view('pages.design');
    }
    public function education() {
        return view('pages.education');
    }
    public function engineering() {
        return view('pages.engineering');
    }
    public function hotelmanagement() {
        return view('pages.hotelmanagement');
    }
    public function informationtechnology() {
        return view('pages.informationtechnology');
    }
    public function law() {
        return view('pages.law');
    }
    public function management() {
        return view('pages.management');
    }
    public function masscommunication() {
        return view('pages.masscommunication');
    }
    public function medical() {
        return view('pages.medical');
    }
    public function nursing() {
        return view('pages.nursing');
    }
    public function paramedical() {
        return view('pages.paramedical');
    }
    public function performingart() {
        return view('pages.performingart');
    }
    public function pharmacy() {
        return view('pages.pharmacy');
    }
    public function sciences() {
        return view('pages.sciences');
    }
}
