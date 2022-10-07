<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



//single action controller ---->  php artisan make: controller 'controller name' --invokable

class SingleActionCtrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('demo3');
    }
}
