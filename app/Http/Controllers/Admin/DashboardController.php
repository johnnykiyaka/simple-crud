<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\DashboardController;

class DashboardController extends Controller
{
    public function registered()

    {
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }

    public function registeredit(Request $request, $id)

    {

      $users=User::findorFail($id);
      return view('admin.register-edit')->with('users',$users) ;

    }

    public function registerupdate(Request $request, $id)

    {

        $users=User::find($id);
        
        $users->name=$request->input('name');
        $users->email=$request->input('email');
        $users->update();
        return redirect('/role-register')->with('status','User updated Succesfully');

    }

    public function registerdelete($id)
    {
            
      $users=User::findorFail($id);
      $users->delete();
      return redirect('/role-register')->with('status','User deleted Succesfully');
    }


    public function store(Request $request)

    {
        $users == new User; 

        $users->name=$request->input('name');
        $users->email=$request->input('email');

        $users->save();

        return redirect()->with('status','User Saved Succesfully');

    }


}
