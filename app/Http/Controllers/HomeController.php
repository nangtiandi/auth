<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */ 
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function editProfile(){
        return view('editProfile');
    }
    public function updateProfile(Request $request){
        $user = User::find(Auth::id());

        $reName = uniqid()."_user.".$request->file('photo')->getClientOriginalExtension();
        $request->file('photo')->storeAs('public/img',$reName);
        $user->photo = $reName;

        $user->phone = $request->phone;
        $user->update();

        return redirect()->back();
    }
}

