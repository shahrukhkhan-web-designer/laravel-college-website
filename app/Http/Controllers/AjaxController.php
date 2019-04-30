<?php

namespace App\Http\Controllers;

use Validator;
use http\Env\Response;
use Illuminate\Http\Request;


class AjaxController extends Controller
{
    //

    public function EnquiryForm(Request $request){

        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required|email'
        ]);

        if ($validator->fails()){
            return \response()->json(['errors'=>$validator->errors()]);
        }

        return  response()->json(['success'=>'Enquiry Submit Successfully']);

    }

//    public function feedbackForm(Request $request){
//
//        $validator = Validator::make($request->all(),[
//            'name'=>'required',
//            'phone'=>'required|numeric',
//            'email'=>'required|email'
//        ]);
//
//        if ($validator->fails()){
//            return \response()->json(['errors'=>$validator->errors()]);
//        }
//
//        return  response()->json(['success'=>'Enquiry Submit Successfully']);
//
//    }
}

