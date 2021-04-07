<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Member;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index(){
        $events = Event::all();
        $images = DB::table('slider_images')->get();
        return view('home_page', compact('images', 'events'));
    }
    
    public function user_info()
    {
        $user = User::find(Auth::user()->id);
    }
    public function users(){
        $users = User::all();
        return view('admin.user.users', compact('users'));
    }

    public function members(){
        $members = Member::all();
        return view('pages.members', compact('members'));
    }

    public function events(){
        $events = Event::all();
        return view('pages.events', compact('events'));
    }
}
