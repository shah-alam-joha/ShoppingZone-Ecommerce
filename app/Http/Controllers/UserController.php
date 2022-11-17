<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Hash;
use Auth;

class UserController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
     public function create()
    {
    	return view('user.create');
    }

     public function index()
    {
    	$data=User::all();
    	return view('user.index',compact('data'));
    }

    public function UserStore(Request $request)
    {
        
    	$data=new User;
    	$data->name=$request->name;
        $data->phone=$request->phone;
    	$data->email=$request->email;
    	$data->password=Hash::make($request->password);
    	$data->type=$request->role;
  
    	$data->save();

    	 $notification=array(
                 'messege'=>'User Successfully Added!',
                 'alert-type'=>'sucess'
                       );
               return Redirect()->back()->with($notification);

    }

    public function UserDelete($id)
    {
    	$data=User::find($id);
    	$data->delete();
        $notification=array(
                 'messege'=>'User Delete Done',
                 'alert-type'=>'success'
                       );
            return Redirect()->back()->with($notification);
    }

    public function UserEdit($id)
    {
    	$data=User::find($id);
    	return view('user.edit',compact('data'));
    }

    public function UserUpdate(Request $request,$id)
    {
    	
    	$data=User::find($id);
    	$data->name=$request->name;
    	$data->phone=$request->phone;
    	$data->email=$request->email;
    	$data->type=$request->role;
    	$data->save();

    	 $notification=array(
                 'messege'=>'User Successfully Update!',
                 'alert-type'=>'sucess'
                       );
        return Redirect()->back()->with($notification);

    }

    public function changePassword(Request $request)
    {
        
        $data=User::find(Auth::user()->id);
        $data->password=Hash::make($request->password);
        $data->save();

         $notification=array(
                 'messege'=>'User Successfully Update!',
                 'alert-type'=>'sucess'
                       );
        return Redirect()->back()->with($notification);
    }

    
}
