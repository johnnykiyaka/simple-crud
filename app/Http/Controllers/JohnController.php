<?php

namespace App\Http\Controllers;

use App\John;
use Illuminate\Http\Request;

class JohnController extends Controller
{
    public function index()

    {
        $john = John::all();
        return view('john')
           ->with('john',$john);
    }
    public function store(Request $request)

    
        {

            $john = new John;


            $john->title=$request->input('title');
            $john->subtitle=$request->input('subtitle');
            $john->description=$request->input('description');

            $john->save();

            return redirect('/john')->with('status','john Saved Succesfully');

        }

        public function edit($id)

        {


            $john= John::findorFail($id);
            return view('john-edit')->with('john',$john)
            ->with('status','john edited Succesfully');
        }



 
        public function update(Request $request, $id)

        {
    
            $john=John::find($id);
            
            $john->title=$request->input('title');
            $john->subtitle=$request->input('subtitle');
            $john->description=$request->input('description');
            $john->update();
            return redirect('/john')->with('status','John updated Succesfully');
    
        }
        
        public function delete($id)
        {
            $john= John::findorFail($id);
            $john->delete();
            return redirect('/john')->with('status','John Deleted Succesfully');
        }

}
