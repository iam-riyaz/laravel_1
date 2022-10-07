<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// basic action controller--------> php artisan make: controller 'contorller name' 
class DemoCtrlr extends Controller
{
    public function myfn(){
        return view('demo2');
    }
}
