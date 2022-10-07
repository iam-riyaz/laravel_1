<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormCtrl extends Controller
{

    public function formFn(){
        return view('form');
    }


    public function reg(Request $request){

        $request->validate(
            
            [
                'name'=>"required",
                 'age'=>"required",
                 'mobile'=>"required",
                 'email'=>"required | email",
                 'password'=>"required"
            ]

        );




 
        echo "<pre>";
        print_r($request->all());
        
    }

}
