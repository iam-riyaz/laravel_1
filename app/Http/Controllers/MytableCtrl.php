<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mytable;

class MytableCtrl extends Controller
{
    public function tabget(){
        $url=url('/mytable');
        $data=compact('url','title');
        $title="Create Form";
        return view("mytable")->with($data);
    }

    public function tabpost(Request $request){


        $request->validate(
            
            [
                'name'=>"required",
                 'email'=>"required | email",
                 'age'=>"required",
                 'city'=>"required",
                 'gender'=>"required",
                 'dob'=>"required",
                 'password'=>'required'
            ]
        );

       echo "success";
        echo "<pre>";
        print_r($request->all());

        // insert query in laravel
        $mytable= new Mytable;

        $mytable->name=$request['name'];
        $mytable->email=$request['email'];
        $mytable->age=$request['age'];
        $mytable->city=$request['city'];
        $mytable->gender=$request['gender'];
        $mytable->dob=$request['dob'];
        $mytable->password= md5($request['password']);

        $mytable->save();

        return redirect('/mytable');
    }


    public function view(){

        $mytable_view= Mytable::all();
      

        $data=compact('mytable_view');


        return view('mytable_view')->with($data);
    }

    public function delete($id){

        $mytable= Mytable::find($id);
        if(!is_null($mytable))
        {
            $mytable->delete();
        }
        return redirect('mytable');
    }


    public function edit($id){


        $mytable=Mytable::find($id);

        if(is_null($mytable))
        {
            return redirect('mytable');
        }
        else{

            $url=url('/mytable/update/').$id;
           $title="Update Form";
            $data=compact('mytable','url','title');
            return view('mytable')->with($data);
        }

    }






}
