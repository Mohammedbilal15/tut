<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use App\Models\passport;
use App\Models\role;

class HomeController extends Controller
{
    public function index(){
        $user = user::find(1);
        return view('layout',compact('user'));
        
    }
    public function pass(){
        $user = user::find(1)->passport;
        //return $user;
        return view('home',compact('user'));
    }
    public function mobs(){
        $mobiles = user::find(1)->mobile;
        return view('mobile',compact('mobiles'));
    }
    public function rols(){
        $role = user::find(1)->roles;
        return view('roles',compact('role'));
    }
    



}
