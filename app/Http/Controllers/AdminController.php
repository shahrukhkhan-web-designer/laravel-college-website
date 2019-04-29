<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public  function SaveAdmission(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'phone'=>'required|numeric|digits:10',
            'qualification'=>'required',
            'course'=>'required',
            'messages'=>'required',
            'email'=>'required|email',
        ]);

        if ($validator->fails()){
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = array(
            'name' =>$request->name ,
            'email' => $request->email,
            'phone' => $request->phone,
            'qualification' => $request->qualification,
            'course' => $request->course,
            'messages' => $request->messages,

        );
        $from = 'gautam1606@gmail.com';
        $view = view('emails.apply-form', compact('data'));
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $contents = $view->render();
        mail('gautam1606@gmail.com', 'Apply Form', $contents, $headers);


    }
}
