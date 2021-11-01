<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Incorrect password";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/project');
        }
    }

    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }

    function dashboard(Request $req)
    {
        $users =User::all();
        return view ('dashboard',['users'=>$users]); 
    }
}
