<?php

namespace App\Http\Controllers;

use App\Therapist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class TherapistController extends Controller
{
    public function index()

    {
        $therapist = Therapist::all();
        return view('therapist')
           ->with('therapist',$therapist);
    }

    public function store(Request $request)

    
    {

        $therapist = new Therapist;


        $therapist->name=$request->input('name');
        $therapist->email=$request->input('email');
        $therapist->password=$request->input('password');
        $therapist->specialization=$request->input('specialization');
        $therapist->location=$request->input('location');


        $therapist->save();

        Session::flash('statuscode','success');

        return redirect('/therapist')->with('status','therapist Saved Succesfully');

    }

    public function edit($id)

    {


        $therapist= Therapist::findorFail($id);
        return view('therapist-edit')->with('therapist',$therapist)
        ->with('status','therapist edited Succesfully');
    }


    public function update(Request $request, $id)

    {

        $therapist=Therapist::find($id);
        
        


        $therapist->name=$request->input('name');
        $therapist->email=$request->input('email');
        $therapist->password=$request->input('password');
        $therapist->specialization=$request->input('specialization');
        $therapist->location=$request->input('location');

        $therapist->update();
        Session::flash('statuscode','info');
        return redirect('/therapist')->with('status','Therapist updated Succesfully');

    }
    public function delete($id)
        {
            $therapist= Therapist::findorFail($id);
            $therapist->delete();
            Session::flash('statuscode','error');
            return redirect('/therapist')->with('status','Therapist Deleted Succesfully');
        }



}
